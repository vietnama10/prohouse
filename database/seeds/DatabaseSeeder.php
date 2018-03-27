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
        $this->call(Types::class);
        $this->call(Projects::class);
        $this->call(TypeProject::class);
        $this->call(Products::class);
        $this->call(ProductImages::class);
        $this->call(Attributes::class);
        $this->call(AttributeValues::class);
        $this->call(Configs::class);
    }
}
