<?php

namespace App\Models\Traits;

use App\Models\Meta;

trait Metaable
{
    public function meta()
    {
        return $this->morphMany(Meta::class, 'metaable');
    }
}
