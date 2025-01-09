<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleAndPermissionSeeder::class,
            DepartmentSeeder::class,
        ]);

        User::create([
            'first_name' => 'Joe',
            'last_name' => 'Lohr',
            'email' => 'jlohr@autorisknow.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
        ]);

        User::factory(10)->create();
    }
}
