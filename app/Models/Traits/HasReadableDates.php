<?php

namespace App\Models\Traits;

use Morilog\Jalali\Jalalian;

trait HasReadableDates
{
    public function getReadableCreatedAtAttribute()
    {
        return Jalalian::fromCarbon($this->created_at)->format('%d %B %Y');
    }
}
