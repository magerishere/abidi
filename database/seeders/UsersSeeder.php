<?php

namespace Database\Seeders;

use App\Enums\UserRoleEnums;
use App\Models\Topic;
use App\Models\TopicReply;
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
            ],
            [
                'name' => 'پیمان کاظمی',
                'email' => 'doctor2@gmail.com',
                'mobile' => '09194901202',
                'password' => 'doctor@1234'
            ],
            [
                'name' => 'فاطمه خیراندیش',
                'email' => 'doctor3@gmail.com',
                'mobile' => '09194901203',
                'password' => 'doctor@1234'
            ],
            [
                'name' => 'خسرو مهرورز',
                'email' => 'doctor4@gmail.com',
                'mobile' => '09194901204',
                'password' => 'doctor@1234'
            ],
            [
                'name' => 'مهتاب پیروزی',
                'email' => 'doctor5@gmail.com',
                'mobile' => '09194901205',
                'password' => 'doctor@1234'
            ],
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
            ],
            [
                'name' => 'پیمان محمدی',
                'email' => 'member2@gmail.com',
                'mobile' => '09194901206',
                'password' => 'member@1234'
            ],
            [
                'name' => 'غزاله خیراندیش',
                'email' => 'member3@gmail.com',
                'mobile' => '09194901207',
                'password' => 'member@1234'
            ],
            [
                'name' => 'پرستو مهرورز',
                'email' => 'member4@gmail.com',
                'mobile' => '09194901208',
                'password' => 'member@1234'
            ],
            [
                'name' => 'ایمان پیروزی',
                'email' => 'member5@gmail.com',
                'mobile' => '09194901209',
                'password' => 'member@1234'
            ],
        ];

        foreach ($memberUsers as $memberUser) {
            $user = User::create($memberUser);
            $user->assignRole(UserRoleEnums::MEMBER);
        }

        foreach (User::role([UserRoleEnums::DOCTOR, UserRoleEnums::MEMBER])->get() as $user) {
            Topic::factory(30)->create([
                'user_id' => $user->id,
            ]);
        }

        foreach (Topic::all() as $topic) {
            TopicReply::factory(5)->create([
                'user_id' => $topic->user_id,
                'topic_id' => $topic->id,
            ]);
        }

    }
}
