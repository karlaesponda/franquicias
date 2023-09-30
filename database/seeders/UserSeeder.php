<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'full_name' => 'Karla Esponda',
            'username' => 'Karlaesponda',
            'email' => 'kalejandra.kaec@hotmail.com',
            'password' => Hash::make('12345'), // Cambia 'password' por la contraseña que desees para los usuarios de prueba
            'direccion' => 'calle 21 A por 56 y 58',
            'CP' => '97314',
            'telefono' => '9931175965',
        ]);

        User::create([
            'full_name' => 'Blair Waldorf',
            'username' => 'queenB',
            'email' => 'waldorf.com',
            'password' => Hash::make('12345'), // Cambia 'password' por la contraseña que desees para los usuarios de prueba
            'direccion' => 'upper east side',
            'CP' => '97314',
            'telefono' => '9931175965',
        ]);

        User::factory(10)->create();
    }
}
