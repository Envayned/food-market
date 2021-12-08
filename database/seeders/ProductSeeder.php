<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //test item
//        DB::table('products')->insert([
//            'name' => 'Item #1',
//            'description' => 'text 1',
//            'price' => '1.99',
//        ]);
        Product::factory(21)->create();
    }
}
