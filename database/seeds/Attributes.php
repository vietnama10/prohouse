<?php

use Illuminate\Database\Seeder;

class Attributes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('attributes')->insert([
            [
                'name' => 'Interior',
                'attribute_tag' => 'interior',
                'input_type' => 'select',
                'is_active' => 1,
                'required' => 1,
                'default_value' => 'a:3:{i:0;s:15:"Fully Furnished";i:1;s:16:"A Part Furnished";i:2;s:12:"No Furniture";}'
            ]
        ]);
    }
}
