<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Product::count() > 0) {
            echo "Products table already has data. Skipping seeding.\n";
            return;
        }

        DB::beginTransaction();

        try {
            Product::create([
                'name' => 'Product 1',
            ]);

            Product::create([
                'name' => 'Product 2',
            ]);

            Product::create([
                'name' => 'Product 3',
            ]);

            Product::create([
                'name' => 'Product 4',
            ]);

            Product::create([
                'name' => 'Product 5',
            ]);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            echo "Failed seeding products: ",  $e->getMessage(), "\n";
        }
    }
}