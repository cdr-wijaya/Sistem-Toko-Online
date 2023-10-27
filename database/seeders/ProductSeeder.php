<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date        = Carbon::now();
        $createdDate = clone($date);

        DB::table('products')->insert([
            [
                'category_id'   => '3',
                'product_name'  => 'Gaun Pernikahan',
                'slug'          => 'gaun-pernikahan',
                'price'         => mt_rand(50000,1000000),
                'stock'         => mt_rand(20,999), 
                'discount'      => 0.2,
                'description'   => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae alias consequatur a tenetur placeat commodi iure accusantium quo omnis quasi neque, labore veritatis? Eligendi sint amet, quos corrupti dignissimos soluta?',
                'picture'       => "products/busana1.jfif",
                'created_at'    => $createdDate,
                'updated_at'    => $createdDate,
            ],
            [
                'category_id'   => '1',
                'product_name'  => 'Jaket Wanita',
                'slug'          => 'jaket-wanita',
                'price'         => mt_rand(50000,1000000),
                'stock'         => mt_rand(10,999), 
                'discount'      => 0,
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem, magnam.',
                'picture'       => "products/busana2.jpg",
                'created_at'    => $createdDate,
                'updated_at'    => $createdDate,
            ],
            [
                'category_id'   => '2',
                'product_name'  => 'Baju Renang Anak',
                'slug'          => 'baju-renang-anak',
                'price'         => mt_rand(50000,1000000),
                'stock'         => mt_rand(20,999), 
                'discount'      => 0.15,
                'description'   => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae alias consequatur a tenetur placeat commodi iure accusantium quo omnis quasi neque, labore veritatis? Eligendi sint amet, quos corrupti dignissimos soluta?',
                'picture'       => "products/busana3.jpg",
                'created_at'    => $createdDate,
                'updated_at'    => $createdDate,
            ],
            [
                'category_id'   => '4',
                'product_name'  => 'Pakaian Lengkap SD',
                'slug'          => 'pakaian-lengkap-sd',
                'price'         => mt_rand(50000,1000000),
                'stock'         => mt_rand(20,999), 
                'discount'      => 101,
                'description'   => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae alias consequatur a tenetur placeat commodi iure accusantium quo omnis quasi neque, labore veritatis? Eligendi sint amet, quos corrupti dignissimos soluta?',
                'picture'       => "products/busana4.jpg",
                'created_at'    => $createdDate,
                'updated_at'    => $createdDate,
            ],
            [
                'category_id'   => '2',
                'product_name'  => 'Baju Capovo Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
                'slug'          => 'baju-capovo',
                'price'         => mt_rand(50000,1000000),
                'stock'         => mt_rand(20,999), 
                'discount'      => 0.7,
                'description'   => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae alias consequatur a tenetur placeat commodi iure accusantium quo omnis quasi neque, labore veritatis? Eligendi sint amet, quos corrupti dignissimos soluta?',
                'picture'       => "products/busana5.png",
                'created_at'    => $createdDate,
                'updated_at'    => $createdDate,
            ],
            [
                'category_id'   => '1',
                'product_name'  => 'Jas Busana Adat Bali',
                'slug'          => 'jas-busana-adat-bali',
                'price'         => mt_rand(50000,1000000),
                'stock'         => mt_rand(20,999), 
                'discount'      => 0,
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem, magnam.',
                'picture'       => "products/baju1.jfif",
                'created_at'    => $createdDate,
                'updated_at'    => $createdDate,
            ],
            [
                'category_id'   => '3',
                'product_name'  => 'Baju Renang Dewasa',
                'slug'          => 'baju-renang-dewasa',
                'price'         => mt_rand(50000,1000000),
                'stock'         => mt_rand(20,999), 
                'discount'      => 102,
                'description'   => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae alias consequatur a tenetur placeat commodi iure accusantium quo omnis quasi neque, labore veritatis? Eligendi sint amet, quos corrupti dignissimos soluta?',
                'picture'       => "products/baju2.jfif",
                'created_at'    => $createdDate,
                'updated_at'    => $createdDate,
            ],
            [
                'category_id'   => '4',
                'product_name'  => 'Pakaian Lengkap SMP',
                'slug'          => 'pakaian-lengkap-smp',
                'price'         => mt_rand(50000,1000000),
                'stock'         => mt_rand(20,999), 
                'discount'      => 0.99,
                'description'   => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae alias consequatur a tenetur placeat commodi iure accusantium quo omnis quasi neque, labore veritatis? Eligendi sint amet, quos corrupti dignissimos soluta?',
                'picture'       => "products/busana6.jpg",
                'created_at'    => $createdDate,
                'updated_at'    => $createdDate,
            ],
        ]);
    }
}
