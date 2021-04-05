<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;
use App\User;
class SellerSeeder extends Seeder
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
            DB::table('sellers')->insert([
                'organization_name' => $faker->name,
                'email'=>$faker->safeEmail,
                'mobile_number'=>$faker->phoneNumber,
                'street' => 'Zone3',
                'barangay'=>'Carmen',
                'schedule_online_time' => '7am-5pm Everyday',
                'seller_image' => 'lansones.jpg',
                'seller_description'=> $faker->paragraph(2),
                'user_id'=> $faker->unique()->numberBetween(1, User::count()),
                'created_at'=> Carbon::now()->toDateString(),
                'updated_at'=> Carbon::now()->toDateString()
                
            ]);
        }
    }
}
