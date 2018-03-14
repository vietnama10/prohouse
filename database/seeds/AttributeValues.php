<?php

use Illuminate\Database\Seeder;

class AttributeValues extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('attribute_values')->insert([
            [
                'value' => 'Fully Furnished',
                'product_id' => 1,
                'attribute_id' => 1
            ],
            [
                'value' => 'Fully Furnished',
                'product_id' => 2,
                'attribute_id' => 1
            ],
            [
                'value' => 'A Part Furnished',
                'product_id' => 3,
                'attribute_id' => 1
            ],
            [
                'value' => 'No Furniture',
                'product_id' => 4,
                'attribute_id' => 1
            ],
            [
                'value' => 'A Part Furnished',
                'product_id' => 5,
                'attribute_id' => 1
            ]
        ]);
    }
}
