<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Organization;

class OrganizationUserSeeder extends Seeder
{
    public function run(): void
    {
        // Create Organizations
        $orgA = Organization::firstOrCreate(
            ['slug' => 'acme'],
            ['name' => 'Acme Credit Union', 'description' => 'Main branch org']
        );

        $orgB = Organization::firstOrCreate(
            ['slug' => 'zenfinance'],
            ['name' => 'Zen Finance Group', 'description' => 'West coast branch']
        );

        // Create Users
        $owner = User::firstOrCreate(
            ['email' => 'owner@example.com'],
            ['name' => 'Platform Owner', 'password' => bcrypt('password')]
        );

        $admin = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            ['name' => 'Org Admin', 'password' => bcrypt('password')]
        );

        $member = User::firstOrCreate(
            ['email' => 'member@example.com'],
            ['name' => 'Org Member', 'password' => bcrypt('password')]
        );

        // ✅ Assign global Spatie role
        $owner->assignRole('platform_owner');
        $admin->assignRole('admin');
        $member->assignRole('user');

        // ✅ Assign org-level roles in pivot table
        $orgA->users()->syncWithoutDetaching([
            $owner->id => ['role' => 'owner'],   // org-level owner
            $admin->id => ['role' => 'admin'],
            $member->id => ['role' => 'member'],
        ]);

        $orgB->users()->syncWithoutDetaching([
            $owner->id => ['role' => 'owner'],
            $member->id => ['role' => 'member'],
        ]);
    }
}
