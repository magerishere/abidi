<?php

namespace Database\Seeders;

use App\Enums\UserPermissionEnums;
use App\Enums\UserRoleEnums;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_names = UserRoleEnums::asArray();
        $permission_names = UserPermissionEnums::asArray();
        foreach ($role_names as $role_name) {
            $role = Role::create([
                'name' => $role_name
            ]);
            match ($role_name) {
                UserRoleEnums::SUPERADMIN => $role->givePermissionTo(superadmin_permissions()),
                UserRoleEnums::ADMIN => $role->givePermissionTo(admin_permissions()),
                UserRoleEnums::DOCTOR => $role->givePermissionTo(doctor_permissions()),
                UserRoleEnums::MEMBER => $role->givePermissionTo(user_permissions()),
                default => Log::error("Role name: $role_name does not match")
            };
        }
    }
}
