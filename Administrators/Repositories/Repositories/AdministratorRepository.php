<?php


namespace Modules\Administrators\Repositories\Repositories;


use Modules\Administrators\Entities\Administrators;
use Modules\Administrators\Repositories\Contracts\AdministratorContract;
use Modules\Core\Repositories\Base\BaseRepository;

class AdministratorRepository extends BaseRepository implements AdministratorContract
{

    public function entity()
    {
        return Administrators::class;
    }

    public function delete($admin)
    {
        if (!!$admin->comments->count()) {
            foreach ($admin->comments as $comment) {
                if (!!$comment->replies->count()) {
                    foreach ($comment->replies as $reply) {
                        $reply->delete();
                    }
                }
                $comment->delete();
            }
        }

        if (!!$admin->posts->count()) {
            foreach ($admin->posts as $post) {
                $post->update([
                    'author_id' =>  0
                ]);
            }
        }

        return $admin->delete();
    }
}
