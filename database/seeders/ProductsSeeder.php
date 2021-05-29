<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{

    public function run()
    {
        $user = User::factory()->create();

        Product::factory()
            ->count(100)
            ->for($user)
            ->create();
    }
}
