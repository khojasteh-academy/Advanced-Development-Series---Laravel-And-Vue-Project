<?php


namespace Modules\Users\Repositories\Repositories;


use Modules\Core\Repositories\Base\BaseRepository;
use Modules\Users\Entities\User;
use Modules\Users\Repositories\Contracts\UserContract;

class UserRepository extends BaseRepository implements UserContract
{

    public function entity()
    {
        return User::class;
    }


    public function delete($user)
    {
        if (!!$user->comments->count()) {
            foreach ($user->comments as $comment) {
                if (!!$comment->replies->count()) {
                    foreach ($comment->replies as $reply) {
                        $reply->delete();
                    }
                }
                $comment->delete();
            }
        }
        return $user->delete();
    }
}
