<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([BuyerSeeder::class]);
        $this->call([UserSeeder::class]);
        // $this->call([SellerSeeder::class]);
        // $this->call([UsersTableSeeder::class]);
        // $this->call([AdminTypes::class]);
        // $this->call([RiderSeeder::class]);
    }
}
