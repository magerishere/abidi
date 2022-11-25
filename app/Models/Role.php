<?php

namespace App\Models;

use App\Enums\UserRoleEnums;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Models\Role as SpatieRole;

class Role extends SpatieRole
{
    use HasFactory;

    protected $casts = [
        'name' => UserRoleEnums::class,
    ];

}
