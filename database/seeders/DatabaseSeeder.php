<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $date = Carbon::now();
        $createdDate = clone($date);

        DB::table('jenis_produks')->insert([
            [
                'title' => 'Busana Adat',
                'slug' => 'busana-adat',
                'created_at' => $createdDate,
                'updated_at' => $createdDate,
            ],
            [
                'title' => 'Busana Anak',
                'slug' => 'busana-anak',
                'created_at' => $createdDate,
                'updated_at' => $createdDate,
            ],
            [
                'title' => 'Busana Dewasa',
                'slug' => 'busana-dewasa',
                'created_at' => $createdDate,
                'updated_at' => $createdDate,
            ],
            [
                'title' => 'Seragam Sekolah',
                'slug' => 'seragam-sekolah',
                'created_at' => $createdDate,
                'updated_at' => $createdDate,
            ],
            [
                'title' => 'Busana Kerja',
                'slug' => 'busana-kerja',
                'created_at' => $createdDate,
                'updated_at' => $createdDate,
            ],
            [
                'title' => 'Busana Olahraga',
                'slug' => 'busana-olahraga',
                'created_at' => $createdDate,
                'updated_at' => $createdDate,
            ],
        ]);

        DB::table('produks')->insert([
            [
                'jenis_produks_id' => '3',
                'nama_produk' => 'Gaun Pernikahan',
                'slug' => 'gaun-pernikahan',
                'harga' => 1999000,
                'stok' => 350, 
                'deskripsi' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae alias consequatur a tenetur placeat commodi iure accusantium quo omnis quasi neque, labore veritatis? Eligendi sint amet, quos corrupti dignissimos soluta?',
                'created_at' => $createdDate,
                'updated_at' => $createdDate,
            ],
            [
                'jenis_produks_id' => '1',
                'nama_produk' => 'Jaket Wanita',
                'slug' => 'jaket-wanita',
                'harga' => 150000,
                'stok' => 500, 
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem, magnam.',
                'created_at' => $createdDate,
                'updated_at' => $createdDate,
            ],
            [
                'jenis_produks_id' => '2',
                'nama_produk' => 'Baju Renang Anak',
                'slug' => 'baju-renang-anak',
                'harga' => 199000,
                'stok' => 280, 
                'deskripsi' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae alias consequatur a tenetur placeat commodi iure accusantium quo omnis quasi neque, labore veritatis? Eligendi sint amet, quos corrupti dignissimos soluta?',
                'created_at' => $createdDate,
                'updated_at' => $createdDate,
            ],
            [
                'jenis_produks_id' => '4',
                'nama_produk' => 'Pakaian Lengkap SD',
                'slug' => 'pakaian-lengkap-sd',
                'harga' => 329000,
                'stok' => 280, 
                'deskripsi' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae alias consequatur a tenetur placeat commodi iure accusantium quo omnis quasi neque, labore veritatis? Eligendi sint amet, quos corrupti dignissimos soluta?',
                'created_at' => $createdDate,
                'updated_at' => $createdDate,
            ],
        ]);
        
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'username' => 'admin_',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin123'),
                'level' => 'admin',
            ],
            [
                'name' => 'agus',
                'username' => 'agus_',
                'email' => 'agus@gmail.com',
                'password' => Hash::make('agus123'),
                'level' => 'pelanggan',
            ],
            [
                'name' => 'putu',
                'username' => 'putu_',
                'email' => 'putu@gmail.com',
                'password' => Hash::make('putu123'),
                'level' => 'pelanggan',
            ],
            [
                'name' => 'kadek',
                'username' => 'kadek_',
                'email' => 'kadek@gmail.com',
                'password' => Hash::make('kadek123'),
                'level' => 'pelanggan',
            ],
            [
                'name' => 'komang',
                'username' => 'komang_',
                'email' => 'komang@gmail.com',
                'password' => Hash::make('komang123'),
                'level' => 'pelanggan',
            ],
            [
                'name' => 'ketut',
                'username' => 'ketut_',
                'email' => 'ketut@gmail.com',
                'password' => Hash::make('ketut123'),
                'level' => 'pelanggan',
            ],
        ]);
    }
}
