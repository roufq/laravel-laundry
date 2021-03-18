<?php

use Illuminate\Database\Seeder;
use App\User;
use Hash as Bcrypt;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
	        	'name' => 'Ahmad Rouf Mawanto',
	        	'email' => 'admin@gmail.com',
	        	'password' => Bcrypt::make('123456'),
        	]);
        $user->assignRole(['admin']);
    	
    	$kasir = User::create([
	        	'name' => 'Rouf Mawanto',
	        	'email' => 'kasir@gmail.com',
	        	'password' => Bcrypt::make('123456'),
        	]);
         $kasir->assignRole(['kasir']);

         $outlet = User::create([
	        	'name' => 'Ahmad Rouf',
	        	'email' => 'outlet@gmail.com',
	        	'password' => Bcrypt::make('123456'),
        	]);
         $outlet->assignRole(['outlet']);
    }

}
