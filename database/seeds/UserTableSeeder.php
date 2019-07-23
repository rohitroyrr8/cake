<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        User::truncate();

        foreach(range(1, 20) as $i){
        	User::create([
        		'name' => $faker->firstname,
        		'email' => $faker->email,
        		'mobile' => Str::random(10),
        		'password' => bcrypt('secret'),
        		'status' => 'active'
        	]);
        }
    }
}
