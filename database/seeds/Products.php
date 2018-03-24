<?php

use Illuminate\Database\Seeder;

class Products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'sku' => 'apm1',
                'name' => 'Single Home At Florida 5, Pinecrest',
                'short_description' => 'Beautiful home on quiet, tree lined street. Addition and renovation create desirable.',
                'description' => 'Beautiful home on quiet, tree lined street. Addition and renovation create desirable.',
                'price' => 800,
                'unit' => 'month',
                'url_key'=> 'lorem-house-1',
                'size' => 120,
                'level' => 10,
                'bedroom' => 3,
                'bathroom' => 2,
                'status' => 1,
                'direction' => 'West',
                'location' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30171.191266167065!2d107.63091796867832!3d16.462626872558328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3141a1b799368811%3A0x72ae36398aacf36d!2zQ-G6p3UgTmfDs2kgVGhhbmggVG_DoG4!5e0!3m2!1svi!2s!4v1521294650985',
                'address' => 'Cau Ngoi, Thuy Thanh, Huong Thuy, Thua Thien Hue',
                'type_id' => 1,
                'project_id' => 1,
            ],
            [
                'sku' => 'apm2',
                'name' => 'Villa On Grand Avenue',
                'short_description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.',
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.',
                'price' => 650,
                'unit' => 'month',
                'url_key'=> 'lorem-house-2',
                'size' => 120,
                'level' => 10,
                'bedroom' => 3,
                'bathroom' => 2,
                'status' => 1,
                'direction' => 'West',
                'location' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30171.191266167065!2d107.63091796867832!3d16.462626872558328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3141a1b799368811%3A0x72ae36398aacf36d!2zQ-G6p3UgTmfDs2kgVGhhbmggVG_DoG4!5e0!3m2!1svi!2s!4v1521294650985',
                'address' => 'Cau Ngoi, Thuy Thanh, Huong Thuy, Thua Thien Hue',
                'type_id' => 1,
                'project_id' => 2,
            ],
            [
                'sku' => 'apm3',
                'name' => '1903 Hollywood Boulevard',
                'short_description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
                'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
                'price' => 900,
                'unit' => 'month',
                'url_key'=> 'lorem-house-3',
                'size' => 120,
                'level' => 10,
                'bedroom' => 3,
                'bathroom' => 2,
                'status' => 1,
                'direction' => 'West',
                'location' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30171.191266167065!2d107.63091796867832!3d16.462626872558328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3141a1b799368811%3A0x72ae36398aacf36d!2zQ-G6p3UgTmfDs2kgVGhhbmggVG_DoG4!5e0!3m2!1svi!2s!4v1521294650985',
                'address' => 'Cau Ngoi, Thuy Thanh, Huong Thuy, Thua Thien Hue',
                'type_id' => 2,
                'project_id' => 1,
            ],
            [
                'sku' => 'apm4',
                'name' => 'Villa In Hialeah, Dade County',
                'short_description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
                'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
                'price' => 28000,
                'unit' => 'unit',
                'url_key'=> 'lorem-house-4',
                'size' => 120,
                'level' => 10,
                'bedroom' => 3,
                'bathroom' => 2,
                'status' => 1,
                'direction' => 'West',
                'location' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30171.191266167065!2d107.63091796867832!3d16.462626872558328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3141a1b799368811%3A0x72ae36398aacf36d!2zQ-G6p3UgTmfDs2kgVGhhbmggVG_DoG4!5e0!3m2!1svi!2s!4v1521294650985',
                'address' => 'Cau Ngoi, Thuy Thanh, Huong Thuy, Thua Thien Hue',
                'type_id' => 4,
                'project_id' => 6,
            ],
            [
                'sku' => 'apm5',
                'name' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
                'short_description' => 'Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.',
                'description' => 'Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.',
                'price' => 35000,
                'unit' => 'unit',
                'url_key'=> 'lorem-house-5',
                'size' => 120,
                'level' => 10,
                'bedroom' => 3,
                'bathroom' => 2,
                'status' => 1,
                'direction' => 'West',
                'location' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30171.191266167065!2d107.63091796867832!3d16.462626872558328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3141a1b799368811%3A0x72ae36398aacf36d!2zQ-G6p3UgTmfDs2kgVGhhbmggVG_DoG4!5e0!3m2!1svi!2s!4v1521294650985',
                'address' => 'Cau Ngoi, Thuy Thanh, Huong Thuy, Thua Thien Hue',
                'type_id' => 4,
                'project_id' => 6,
            ],
        ]);
    }
}
