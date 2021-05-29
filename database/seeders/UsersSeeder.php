<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{

    public function run()
    {
        $user = User::factory()->create([
            'email' => 'info@example.com',
            'password' => Hash::make('password')
        ]);

    }
}
