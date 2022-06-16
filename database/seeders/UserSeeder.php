<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Lino Alex Huamanvilca',
            'email'=>'lino@gamil.com',
            'password'=>bcrypt('12345678')
        ]);
        User::create([
            'name'=>'Andre Luque',
            'email'=>'andre.luque@gmail.com',
            'password'=>bcrypt('12345678')
        ]);
        User::factory(10)->create();
    }
}
