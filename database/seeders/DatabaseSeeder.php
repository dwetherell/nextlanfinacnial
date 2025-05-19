<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Permission; // ✅ use your custom model with HasUuids

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        // User::factory(10)->create();

      //  User::factory()->create([
     //       'name' => 'Test User',
      //      'email' => 'test@example.com',
      //      'password' => Hash::make('password123'),
      //  ]);
       // $adminRole = Role::create(['name' => 'admin']);
      //  $userRole = Role::create(['name' => 'user']);

     //   $dashboardPermission = Permission::create(['name' => 'view dashboard']);
     //   $adminPermission = Permission::create(['name' => 'manage users']);

      //  $adminRole->givePermissionTo($dashboardPermission, $adminPermission);
      //  $userRole->givePermissionTo($dashboardPermission);


        $this->call([
            RoleSeeder::class,
            OrganizationUserSeeder::class,
        ]);

    }
}
