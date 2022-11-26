<?php

namespace App\Models;

use App\Enums\TopicStatusEnums;
use App\Models\Traits\HasReadableDates;
use App\Models\Traits\Taggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Topic extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Taggable;
    use HasReadableDates;

    protected $fillable = [
        'user_id',
        'status',
        'view',
        'like',
        'title',
        'content'
    ];

    protected $casts = [
        'status' => TopicStatusEnums::class,
    ];


}
