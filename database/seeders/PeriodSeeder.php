<?php

namespace Database\Seeders;

use App\Models\Period;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeriodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Period::create([
            'dateinit'=>'2018',
            'dateout'=>'2020',
            'observations'=>'ninguna',
            'status'=>'inactivo'

        ]);
        Period::create([
            'dateinit'=>'2020',
            'dateout'=>'2022',
            'observations'=>'ninguna',
            'status'=>'inactivo'

        ]);
        Period::create([
            'dateinit'=>'2022',
            'dateout'=>'2024',
            'observations'=>'ninguna',
            'status'=>'activo'

        ]);
    }
}
