<?php

namespace Database\Seeders;

use App\Models\Master;
use Illuminate\Database\Seeder;

class MasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Master::factory()
            ->count(10)
            ->create();
    }
}
