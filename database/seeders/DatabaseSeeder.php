<?php

namespace Database\Seeders;

use App\Models\JobCard;
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
        // \App\Models\User::factory(10)->create();
        $this->call(VehiclTcategorySeeder::class);
        $this->call(SparePartSeeder::class);
//        $this->call(JobCardSeeder::class);
    }
}
