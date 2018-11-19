<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manager = new User();
        $manager->name = 'Administrador';
        $manager->Apellidos = 'Alvarado Moreno'; 
        $manager->Direccion = 'Alvarado Moreno';   
        $manager->Telefono = 'Alvarado Moreno';
        $manager->Avatar = '1541449033holis.png';         
        $manager->email = 'admin@gmail.com';
        $manager->password = bcrypt('12345');
        $manager->tipo = 'A';
        $manager->save();
    }
}
