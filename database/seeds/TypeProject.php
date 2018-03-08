<?php

use Illuminate\Database\Seeder;

class TypeProject extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('type_projects')->insert([
            [
                'project_id' => '1',
                'type_id' => '1'
            ],
            [
                'project_id' => '2',
                'type_id' => '1'
            ],
            [
                'project_id' => '1',
                'type_id' => '2'
            ],
            [
                'project_id' => '3',
                'type_id' => '3'
            ],
            [
                'project_id' => '4',
                'type_id' => '4'
            ],
            [
                'project_id' => '5',
                'type_id' => '5'
            ],
            [
                'project_id' => '6',
                'type_id' => '4'
            ]
        ]);
    }
}
