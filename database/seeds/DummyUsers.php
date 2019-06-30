<?php

use Faker\Factory;
use App\User;
use Illuminate\Database\Seeder;

class DummyUsers extends DatabaseSeeder {

    public function run()
    {
        $faker = Factory::create('id_ID');
        for($i=0; $i<5; $i++)
        {
             if(rand(0,1)==0) {
                $gender='L';
            }
            else{
                $gender='P';
            }
            $user = Sentinel::registerAndActivate(array(
                'email'     => $faker->unique()->email,
                'password'    => "password",
                'first_name' => $faker->unique()->firstName,
                'last_name' => $faker->unique()->lastName,
                'gender'     => $gender,
                'created_at'=>$faker->dateTimeBetween('2017-01-15','2017-11-20')
            ));

            $user->roles()->attach(Sentinel::findRoleById(rand(1,2)));
        }
    }

}