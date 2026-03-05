<?php

use Database\Seeders\StudentsSeeder as Students;
use Database\Seeders\UsersSeeder as Users;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // dump('Seeder Users...');
        // (new Users)->run();
        dump('Seeder Students...');
        (new Students)->run();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
