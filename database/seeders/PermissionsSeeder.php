<?php

namespace Database\Seeders;

use App\Enums\UserPermissionEnums;
use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission_names = UserPermissionEnums::asArray();

        foreach ($permission_names as $permission_name) {
            Permission::create([
                'name' => $permission_name
            ]);
        }
    }
}
