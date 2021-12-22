<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email'             => 'manager@mail.ru',
            'name'              => 'Admin',
            'surname'           => 'Super',
            'email_verified_at' => now(),
            'password'          => Hash::make('manager2021'), // password
            'remember_token'    => Str::random(10),
        ]);
//        \App\Models\User::factory(1)->create();

//        $this->call([
//            MasterSeeder::class,
//            ServiceCategorySeeder::class,
//            ServiceSeeder::class,
//            ApplicationSeeder::class,
//        ]);
    }
}
