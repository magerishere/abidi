<?php

namespace App\Models\Traits;

use App\Models\Tag;

trait Taggable
{
    public function tag()
    {
        return $this->morphOne(Tag::class, 'taggable');
    }
}
