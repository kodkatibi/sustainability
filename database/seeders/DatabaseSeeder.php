<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\User;
use App\Models\Vote;
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
        User::factory(10000)->create();
        Company::factory()->count(1000)->create();
        $this->call([
            PolicySeeder::class
        ]);
        Vote::factory(10000)->create();

    }
}
