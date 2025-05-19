<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role; // ✅ MUST use your Role model
use App\Models\Permission;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $dashboardPermission = Permission::firstOrCreate(
            ['name' => 'view dashboard'],
            ['guard_name' => 'web']
        );

        $manageUsers = Permission::firstOrCreate(
            ['name' => 'manage users'],
            ['guard_name' => 'web']
        );

        $platformOwner = Role::firstOrCreate(
            ['name' => 'platform_owner'],
            ['guard_name' => 'web']
        );

        $admin = Role::firstOrCreate(
            ['name' => 'admin'],
            ['guard_name' => 'web']
        );

        $user = Role::firstOrCreate(
            ['name' => 'user'],
            ['guard_name' => 'web']
        );

        $platformOwner->syncPermissions([$dashboardPermission, $manageUsers]);
        $admin->syncPermissions([$dashboardPermission]);
        $user->syncPermissions([$dashboardPermission]);
    }
}
