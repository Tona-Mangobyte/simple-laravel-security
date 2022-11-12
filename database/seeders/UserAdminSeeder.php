<?php

namespace Database\Seeders;

use App\Models\UserAdmin;
use Illuminate\Database\Seeder;

class UserAdminSeeder extends Seeder
{
    public function run()
    {
        // UserAdmin::truncate();
        UserAdmin::factory(100)->create();
        UserAdmin::factory()->create([
            'username' => 'Admin User',
            'email' => 'admin@example.com',
        ]);
    }
}
