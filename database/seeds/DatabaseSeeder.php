<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        DB::table('sanpham')->insert([
        	'id'=>'2',
        	'id-danhmuc'=>'1',
        	'tensp'=>'abc',
        	'giagoc'=>10,
        	'giakm'=>5,
        	'ImageLink'=>'image/vong/vongtayhatcuom',
        	'TgianKtao'=>'2020/01/01',
        	'view'=>12,
        	'mausac'=>'xanh'
        ]);
    }
}
