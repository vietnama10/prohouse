<?php

use Illuminate\Database\Seeder;

class Projects extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('projects')->insert([
            [
                'name' => 'Green Valley',
                'description' => 'Green valley description',
                'url' => 'green-valley'
            ],
            [
                'name' => 'My Gia',
                'description' => 'My Gia description',
                'url' => 'my-gia'
            ],
            [
                'name' => 'Phu My Hung',
                'description' => 'Phu My Hung description',
                'url' => 'phu-my-hung'
            ],
            [
                'name' => 'Green Valley',
                'description' => 'Green valley description',
                'url' => 'green-valley'
            ],
            [
                'name' => 'Sky Garden',
                'description' => 'Sky Garden description',
                'url' => 'sky-garden'
            ],
            [
                'name' => 'My Hoang',
                'description' => 'My Hoang description',
                'url' => 'my-hoang'
            ]
        ]);
    }
}
