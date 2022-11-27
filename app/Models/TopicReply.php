<?php

namespace App\Models;

use App\Models\Traits\HasReadableDates;
use App\Models\Traits\HasUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TopicReply extends Model
{
    use HasFactory;
    use HasUser;
    use SoftDeletes;
    use HasReadableDates;

    protected $fillable = [
        'user_id',
        'topic_id',
        'status',
        'title',
        'content'
    ];

    public function forMemberUser()
    {
        return $this->user->isMember();
    }

    public function forDoctorUser()
    {
        return $this->user->isDoctor();
    }
}
