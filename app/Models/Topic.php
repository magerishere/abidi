<?php

namespace App\Models;

use App\Enums\TopicStatusEnums;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Topic extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
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
