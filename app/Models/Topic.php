<?php

namespace App\Models;

use App\Enums\TopicStatusEnums;
use App\Models\Traits\HasReadableDates;
use App\Models\Traits\HasUser;
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
    use HasUser;

    protected $fillable = [
        'user_id',
        'status',
        'view',
        'like',
        'title',
        'content'
    ];

    protected $with = [
        'replies'
    ];

    protected $casts = [
        'status' => TopicStatusEnums::class,
    ];

    public function replies()
    {
        return $this->hasMany(TopicReply::class);
    }

    public function doctorReplies()
    {
        return $this->replies()->get()->filter(function ($reply) {
            return $reply->user->isDoctor();
        });
    }

}
