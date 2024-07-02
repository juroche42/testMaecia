<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Service;
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
            UserSeeder::class,
            ServiceSeeder::class,
        ]);

        $users = User::all();
        $services = Service::all();

        foreach ($users as $user) {
            $user->services()->attach($services->random());
        }
    }
}
