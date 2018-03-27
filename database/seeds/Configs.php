<?php

use Illuminate\Database\Seeder;

class Configs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('configs')->insert([
            [
                'config_name' => 'Logo',
                'config_tag' => 'cf_logo',
                'config_value' => 'logo.png'
            ],
            [
                'config_name' => 'Home Title',
                'config_tag' => 'cf_hometitle',
                'config_value' => 'Apartment, Villa, Office for rent in Ho Chi Minh'
            ],
            [
                'config_name' => 'Email',
                'config_tag' => 'cf_email',
                'config_value' => 'nguyenthanhhai@sweethouse.com'
            ],
            [
                'config_name' => 'Phone Number',
                'config_tag' => 'cf_phonenumber',
                'config_value' => '+842343665555'
            ],
            [
                'config_name' => 'Mobile Number',
                'config_tag' => 'cf_mobilenumber',
                'config_value' => '+841229665555'
            ],
            [
                'config_name' => 'Address',
                'config_tag' => 'cf_address',
                'config_value' => 'No 25, Hoang Van Thu Street, Phu Nhuan District, Ho Chi Minh City'
            ],
            [
                'config_name' => 'Location',
                'config_tag' => 'cf_location',
                'config_value' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.1554846657796!2d106.67716331437039!3d10.799400992305909!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528d709be1ca7%3A0xad4c3e93dea170d3!2zMjAgSG_DoG5nIFbEg24gVGjhu6UsIHBoxrDhu51uZyA5LCBQaMO6IE5odeG6rW4sIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1522119491036'
            ],
            [
                'config_name' => 'FaceBook',
                'config_tag' => 'cf_facebook',
                'config_value' => 'https://facebook.com/sweethouse.group'
            ],
        ]);
    }
}
