<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\Qrcode;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(5)->create();
        Qrcode::factory()->count(1)->create([
            'product_id' => Product::factory()->count(1)->create([
                'category_id' => Category::factory()->count(1)->create()->first()->id,
                 'user_id' => User::factory()->count(1)->create()->first()->id
             ])->first()->id

        ]);
        Qrcode::factory()->count(1)->create([
            'product_id' => Product::factory()->count(1)->create([
                'category_id' => Category::factory()->count(1)->create()->first()->id,
                 'user_id' => User::factory()->count(1)->create()->first()->id
             ])->first()->id

        ]);
        Qrcode::factory()->count(1)->create([
            'product_id' => Product::factory()->count(1)->create([
                'category_id' => Category::factory()->count(1)->create()->first()->id,
                 'user_id' => User::factory()->count(1)->create()->first()->id
             ])->first()->id

        ]);
        Qrcode::factory()->count(1)->create([
            'product_id' => Product::factory()->count(1)->create([
                'category_id' => Category::factory()->count(1)->create()->first()->id,
                 'user_id' => User::factory()->count(1)->create()->first()->id
             ])->first()->id

        ]);
        Qrcode::factory()->count(1)->create([
            'product_id' => Product::factory()->count(1)->create([
                'category_id' => Category::factory()->count(1)->create()->first()->id,
                 'user_id' => User::factory()->count(1)->create()->first()->id
             ])->first()->id

        ]);
        Qrcode::factory()->count(1)->create([
            'product_id' => Product::factory()->count(1)->create([
                'category_id' => Category::factory()->count(1)->create()->first()->id,
                 'user_id' => User::factory()->count(1)->create()->first()->id
             ])->first()->id

        ]);
        Qrcode::factory()->count(1)->create([
            'product_id' => Product::factory()->count(1)->create([
                'category_id' => Category::factory()->count(1)->create()->first()->id,
                 'user_id' => User::factory()->count(1)->create()->first()->id
             ])->first()->id

        ]);
        Qrcode::factory()->count(1)->create([
            'product_id' => Product::factory()->count(1)->create([
                'category_id' => Category::factory()->count(1)->create()->first()->id,
                 'user_id' => User::factory()->count(1)->create()->first()->id
             ])->first()->id

        ]);
        Qrcode::factory()->count(1)->create([
            'product_id' => Product::factory()->count(1)->create([
                'category_id' => Category::factory()->count(1)->create()->first()->id,
                 'user_id' => User::factory()->count(1)->create()->first()->id
             ])->first()->id

        ]);
        Qrcode::factory()->count(1)->create([
            'product_id' => Product::factory()->count(1)->create([
                'category_id' => Category::factory()->count(1)->create()->first()->id,
                 'user_id' => User::factory()->count(1)->create()->first()->id
             ])->first()->id

        ]);
        
    }
}
