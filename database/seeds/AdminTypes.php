<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class AdminTypes extends Seeder
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
            DB::table('admin_types')->insert([

                'admin_type_name'=> $faker->name,
                'created_at'=> Carbon::now()->toDateString(),
                'updated_at'=> Carbon::now()->toDateString()
            ]);

        }
    }
}
