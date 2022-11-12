<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::factory(100)->create();
        User::factory()->create([
             'name' => 'Admin User',
             'email' => 'admin@example.com',
        ]);
    }
}
