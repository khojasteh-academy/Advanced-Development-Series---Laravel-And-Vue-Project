<?php

namespace Modules\Posts\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Posts\Entities\PostRelations\CommentRelationsTrait;
use Modules\Posts\Entities\PostRelations\GalleryRelationsTrait;
use Modules\Posts\Entities\PostRelations\ImageRelationsTrait;
use Modules\Posts\Entities\PostRelations\LinkRelationsTrait;
use Modules\Posts\Entities\PostRelations\MetaRelationsTrait;
use Modules\Posts\Entities\PostRelations\TermRelationsTrait;

class Posts extends Model
{
    protected $guarded = [];

    use ImageRelationsTrait;
    use LinkRelationsTrait;
    use TermRelationsTrait;
    use GalleryRelationsTrait;
    use CommentRelationsTrait;
    use MetaRelationsTrait;

    public function getPathAttribute()
    {
        return "/post/$this->id";
    }

    public function getWebPathAttribute()
    {
        $slug = $this->slug->meta_data;
        return "/posts/$slug";
    }


}
