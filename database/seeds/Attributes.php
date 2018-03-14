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
                'input_type' => 'text',
                'is_active' => 1,
                'required' => 1,
                'default_value' => 'a:3:{s:4:"full";s:15:"Fully Furnished";s:4:"none";s:12:"No Furniture";s:4:"part";s:16:"A part furnished";}'
            ]
        ]);
    }
}
