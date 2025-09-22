<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Weight_log;
use App\Models\Weight_target;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1)->create();
        Weight_target::factory(1)->create();
        Weight_log::factory(35)->create();
    }
}
