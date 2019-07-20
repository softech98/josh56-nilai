<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create('id_ID');
    	for($i=0; $i<20; $i++)
    	{
    		if(rand(0,1)==0) {
    			$gender='L';
    		}
    		else{
    			$gender='P';
    		}
    		DB::table('is_guru')->insert([
    			'nip'     => $faker->unique()->numerify('1#################'),
    			'email'     => $faker->unique()->email,
    			'nama' => $faker->unique()->name,
    			'tempat_lahir' => $faker->city,
    			'tanggal_lahir' => $faker->dateTimeThisCentury->format('Y-m-d'),
    			'jenis_kelamin'     => $gender,
    			'alamat'     => $faker->address,
    			'hp'     => $faker->phoneNumber,
    			'created_at'=>$faker->dateTimeBetween('2019-01-15','2019-06-20'),
    			'updated_at'=>$faker->dateTimeBetween('2019-01-15','2019-06-20'),

    		]);
    	}
    }
}

