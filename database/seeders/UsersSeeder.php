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

        foreach ($superAdmins as $superAdmin) {
            $user = User::create($superAdmin);
            $user->assignRole(UserRoleEnums::SUPERADMIN);
        }

        $doctorUsers = [
            [
                'name' => 'محسن راد',
                'email' => 'doctor@gmail.com',
                'mobile' => '09194901285',
                'password' => 'doctor@1234'
            ]
        ];

        foreach ($doctorUsers as $doctorUser) {
            $user = User::create($doctorUser);
            $user->assignRole(UserRoleEnums::DOCTOR);
        }

        $memberUsers = [
            [
                'name' => 'علی خوشکار',
                'email' => 'member@gmail.com',
                'mobile' => '09194901225',
                'password' => 'member@1234'
            ]
        ];

        foreach ($memberUsers as $memberUser) {
            $user = User::create($memberUser);
            $user->assignRole(UserRoleEnums::MEMBER);
        }

    }
}
