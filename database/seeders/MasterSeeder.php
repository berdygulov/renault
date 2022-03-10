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
        $masters = [
            [
                'name'       => 'Александр',
                'surname'    => 'Емельянов',
                'patronymic' => '',
                'position'   => 'Автослесарь',
            ],
            [
                'name'       => 'Дмитрий',
                'surname'    => 'Мостовщиков',
                'patronymic' => '',
                'position'   => 'Автослесарь',
            ],
            [
                'name'       => 'Владимир',
                'surname'    => 'Мотов',
                'patronymic' => '',
                'position'   => 'Автослесарь',
            ],
            [
                'name'       => 'Александр',
                'surname'    => 'Шопин',
                'patronymic' => '',
                'position'   => 'Электрик',
            ],
        ];

        foreach ($masters as $master) {
            Master::create($master);
        }
    }
}
