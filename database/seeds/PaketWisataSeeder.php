<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PaketWisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
 
        // membuat data dummy sebanyak 10 record
        for($x = 1; $x <= 10; $x++){
 
        	// insert data dummy pegawai dengan faker
        	DB::table('paket_wisata')->insert([
        		'judul_paket_wisata' => $faker->name,
        		'deskripsi_paket_wisata' => $faker->paragraph,
        	]);
 
        }
    }
}
