<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class InfoWisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 50; $i++){
 
    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('info_wisata')->insert([
    			'judul_info_wisata' => $faker->sentence($nbWords = 6, $variableNbWords = true),
    			'id_kategori' => $faker->randomDigit,
    			'gambar_info_wisata' => $faker->imageUrl($width = 640, $height = 480),
    			'artikel_info_wisata' => $faker->text,
    			'tanggal_info_wisata' => $faker->dateTime($max = 'now', $timezone = null),
    			'id_editor' => $faker->randomDigit
    		]);
 
    	}
    }
}
