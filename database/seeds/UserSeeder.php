<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,2) as $index){
            DB::table('users')->insert([
                'username'=> $faker->userName,
                'usertype'=> 2,
                'password'=> Hash::make('1234567890')
            ]);

        }
        foreach(range(1,2) as $index){
            DB::table('users')->insert([
                'username'=> $faker->userName,
                'usertype'=> 3,
                'password'=> Hash::make('1234567890')
            ]);

        }

        foreach(range(1,2) as $index){
            DB::table('users')->insert([
                'username'=> $faker->userName,
                'usertype'=> 4,
                'password'=> Hash::make('1234567890')
            ]);

        }
       
    }
}
