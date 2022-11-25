<?php

namespace App\Models\Traits;

use App\Models\Meta;

trait Metatable
{
    public function meta()
    {
        return $this->morphMany(Meta::class, 'metatable');
    }
}
