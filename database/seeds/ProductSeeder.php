<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'id' => 1,
                'name' => 'Angular',
                'description' => 'Superheroic JavaScript MVW Framework',
                'price' => 100
            ],[
                'id' => 2,
                'name' => 'Ember',
                'description' => 'A framework for creating ambitious web applications',
                'price' => 100
            ],[
                'id' => 3,
                'name' => 'React',
                'description' => 'A JavaScript Library for building user interfaces',
                'price' => 100
            ],
        ];

        foreach ($products as $product) {
            $product_model = new Product;
            $product_model->id = $product['id'];
            $product_model->product = $product['product'];
            $product_model->description = $product['description'];
            $product_model->price = $product['price'];
            $product_model->save();
        }
    }
}
