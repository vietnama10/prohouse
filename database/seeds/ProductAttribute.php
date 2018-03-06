<?php

use Illuminate\Database\Seeder;

class ProductAttribute extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('product_attribute')->insert([
            [
                'name' => 'Size',
                'input_type' => 'text',
                'active' => 1,
                'required' => 1,
                'default_value' => 0
            ],
            [
                'name' => 'Level',
                'input_type' => 'text',
                'active' => 1,
                'required' => 1,
                'default_value' => 1
            ],
            [
                'name' => 'Bathroom',
                'input_type' => 'text',
                'active' => 1,
                'required' => 1,
                'default_value' => '0'
            ],
            [
                'name' => 'Bedroom',
                'input_type' => 'text',
                'active' => 1,
                'required' => 1,
                'default_value' => '0'
            ],
            [
                'name' => 'Direction',
                'input_type' => 'text',
                'active' => 1,
                'required' => 1,
                'default_value' => ''
            ],
            [
                'name' => 'Interior',
                'input_type' => 'text',
                'active' => 1,
                'required' => 1,
                'default_value' => 'Fully Furnished'
            ],
            [
                'name' => 'Type',
                'input_type' => 'text',
                'active' => 1,
                'required' => 1,
                'default_value' => '1'
            ],
        ]);
    }
}
