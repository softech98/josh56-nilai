<?php

use Faker\Factory;
use App\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends DatabaseSeeder {

	public function run()
	{
		DB::table('users')->truncate(); // Using truncate function so all info will be cleared when re-seeding.
		DB::table('roles')->truncate();
		DB::table('role_users')->truncate();
		DB::table('activations')->truncate();

		$admin = Sentinel::registerAndActivate(array(
			'email'       => 'admin@admin.com',
			'password'    => "admin",
			'first_name'  => 'Ilham',
			'last_name'   => 'Saputra',
		));
		$user = Sentinel::registerAndActivate(array(
			'email'       => 'user@user.com',
			'password'    => "user",
			'first_name'  => 'Pengguna',
			'last_name'   => 'Saputra',
		));

		$adminRole = Sentinel::getRoleRepository()->createModel()->create([
			'name' => 'Admin',
			'slug' => 'admin',
			'permissions' => array('admin' => 1),
		]);

        $userRole = Sentinel::getRoleRepository()->createModel()->create([
			'name'  => 'User',
			'slug'  => 'user',
		]);


		$admin->roles()->attach($adminRole);
		$user->roles()->attach($userRole);

		$this->command->info('Admin User created with username admin@admin.com and password admin');
	}

}