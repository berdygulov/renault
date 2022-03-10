<?php

namespace Database\Seeders;

use App\Models\ServiceCategory;
use Illuminate\Database\Seeder;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $service_categories = [
            [
                'name' => 'Диагностика'
            ],
            [
                'name' => 'Ремонт'
            ],
            [
                'name' => 'Осмотр'
            ],
        ];

        foreach ($service_categories as $service_category) {
            ServiceCategory::create($service_category);
        }
    }
}
