<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

    	for($i = 1; $i <= 10; $i++){
        DB::table('is_siswa')->insert([
                'nis' => $faker->postcode,
    			'nisn' => $faker->numerify('9#########'),
                'rombel_id' => $faker->randomElement(['1', '2','3','4']),
    			'nama' => $faker->name,
                'tempat_lahir' => $faker->city,
    			'tanggal_lahir' => $faker->dateTimeThisCentury->format('Y-m-d'),
                'jenis_kelamin' => $faker->randomElement(['L', 'P']),
                'alamat' => $faker->address,
    			'agama' => $faker->randomElement(['Islam', 'Kristen Protestan', 'Kristen Katolik','Buddha','Hindu']),
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            
        ]);
    }
    }
}
