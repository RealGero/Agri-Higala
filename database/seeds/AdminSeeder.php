<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\AdminType;
use App\User;
use Carbon\Carbon;
class AdminSeeder extends Seeder
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
            DB::table('admins')->insert([

                'name' =>$faker->name,
                'user_id'=> $faker->unique()->numberBetween(1, User::count()),
                'admin_type_id'=> $faker->unique()->numberBetween(1, AdminType::count()),
                'created_at'=> Carbon::now()->toDateString(),
                'updated_at' => Carbon::now()->toDateString(),
            ]);
        }
    }
}
