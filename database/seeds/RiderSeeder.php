<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;
use App\User;
use App\Seller;

class RiderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach(range(1,3) as $index)
        {
            DB::table('riders')->insert([

                'mobile_number' => $faker->phoneNumber,
                'rider_image' =>'lansones.jpg',
                'user_id'=> $faker->unique()->numberBetween(1, User::count()),
                'seller_id'=> $faker->unique()->numberBetween(1, Seller::count()),
                'created_at'=> Carbon::now()->toDateString(),
                'updated_at'=> Carbon::now()->toDateString()
            ]);
        }
         
    }
}
