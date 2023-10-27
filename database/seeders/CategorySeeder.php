<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::now();
        $createdDate = clone($date);

        DB::table('categories')->insert([
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
    }
}
