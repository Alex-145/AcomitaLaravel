<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActivitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Activity::create([
            'name'=>'Actividad Inicio Año',
            'desciptions'=>'At vero eos et landitiis praesentium voluptatum deleniti atque corrupti quos dolores.',
            'datatime'=>'2000-01-01 ',
            'status'=>'realizado',
            'user_id'=>'1'

        ]);
        Activity::create([
            'name'=>'Actividad Febrero',
            'desciptions'=>'At vero eos et landitiis praesentium voluptatum deleniti atque corrupti quos dolores.',
            'datatime'=>'2000-01-01 ',
            'status'=>'realizado',
            'user_id'=>'1'

        ]);
        Activity::create([
            'name'=>'Actividad Marzo',
            'desciptions'=>'At vero eos et landitiis praesentium voluptatum deleniti atque corrupti quos dolores.',
            'datatime'=>'2000-01-01 ',
            'status'=>'realizado',
            'user_id'=>'1'

        ]);
        Activity::create([
            'name'=>'Actividad Julio',
            'desciptions'=>'At vero eos et landitiis praesentium voluptatum deleniti atque corrupti quos dolores.',
            'datatime'=>'2000-01-01 ',
            'status'=>'pendiente',
            'user_id'=>'1'

        ]);

    }
}
