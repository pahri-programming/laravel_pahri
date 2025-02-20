<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs = [
            ['nama_barang'=>'Handphone','merek'=>'iphone 13','jumlah'=>5,'stok'=>20],
            ['nama_barang'=>'Laptop','merek'=>'Asus TUF','jumlah'=>2,'stok'=>15],
            ['nama_barang'=>'sepatu','merek'=>'Nike','jumlah'=>8,'stok'=>12],
            ['nama_barang'=>'Televisi','merek'=>'Smart tv','jumlah'=>1,'stok'=>10],
            ['nama_barang'=>'kulkas','merek'=>'polytron','jumlah'=>3,'stok'=>30],

        ];
        DB::table('barangs')->insert($barangs);
    }
}
