<?php

namespace Database\Seeders;

use App\Enums\UserRoleEnums;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdmins = [
            [
                'name' => 'superadmin',
                'email' => 'superadmin@gmail.com',
                'mobile' => '09366842860',
                'password' => 'superadmin@1234'
            ]
        ];

        foreach($superAdmins as $superAdmin)
        {
            $user = User::create($superAdmin);
            $user->assignRole(UserRoleEnums::SUPERADMIN);
        }

    }
}
