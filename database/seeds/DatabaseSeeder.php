<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(Users::class);
        $this->call(Categories::class);
        $this->call(ProductAttribute::class);
        $this->call(Slide::class);
    }
}
