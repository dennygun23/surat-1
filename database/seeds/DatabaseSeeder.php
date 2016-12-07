<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

		$this->call(UsersTableSeeder::class);

		Model::reguard();
    }
}



class UsersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array('name'=>'Wirasto Karim', 'email'=>'wirasto@sims.com', 'password'=> Hash::make('wirasto')));
        User::create(array('name'=>'Lisa Kawaii', 'email'=>'lisa@sims.com', 'password'=> Hash::make('lisa02')));
    }
}