<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;
use App\User;

class BuyerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker = Faker::create();

       foreach (range(1,6) as $index)
       {
            DB::table('buyers')->insert([

           'email' => $faker->safeEmail,
           'mobile_number'=> $faker->phoneNumber,
           'first_name'=> $faker->name,
           'middle_name' => $faker->name,
           'last_name' => $faker->name,
           'street'=> 'agora',
           'barangay' => 'camaman.an',
           'birth_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
           'gender' => 'Male',
           'buyer_image'=> 'lansones.jpg',
           'valid_id' => 'ustp.png',
           
            'created_at'=> Carbon::now()->toDateString(),
            'updated_at' => Carbon::now()->toDateString(),
            'user_id'=> $faker->unique()->numberBetween(1, User::count())
            ]);
           
       }
        

    }
}
