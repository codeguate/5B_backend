<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('roles')->insert([
            'titulo'       => 'Administrador',
            'descripcion'       => 'Administrador del sistema',
            'state'       => 1,
            'created_at'        => date('Y-m-d H:m:s'),
            'updated_at'        => date('Y-m-d H:m:s')
        ]);
        DB::table('roles')->insert([
            'titulo'       => 'Promotor',
            'descripcion'       => 'Promotor Eventos',
            'state'       => 1,
            'created_at'        => date('Y-m-d H:m:s'),
            'updated_at'        => date('Y-m-d H:m:s')
        ]);

        DB::table('roles')->insert([
            'titulo'       => 'Edecan',
            'descripcion'       => 'Edecan de Evento',
            'state'       => 1,
            'created_at'        => date('Y-m-d H:m:s'),
            'updated_at'        => date('Y-m-d H:m:s')
        ]);

        DB::table('users')->insert([
            "id"                => 1,
            'username'          =>  "admin",
            'password'          => bcrypt('1234'),
            'email'             => "jdrodriguezr61@gmail.com",
            'nombres'         => "Admin",
            'apellidos'          => "Sys",
            'codigo'       => "1234",
            'nacimiento'          => "1995-01-06",
            'state'             => 1,
            'rol'             => 1,
            'created_at'        => date('Y-m-d H:m:s'),
            'updated_at'        => date('Y-m-d H:m:s')
        ]);

        DB::table('users')->insert([
            "id"                => 2,
            'username'          =>  "promotor",
            'password'          => bcrypt('code1234'),
            'email'             => "dddd61@gmail.com",
            'nombres'         => "Daniel",
            'apellidos'          => "Rodriguez",
            'descripcion'       => "Vendedor del sistema",
            'codigo'       => "lndWV6cjYx",
            'nacimiento'          => "1995-01-06",
            'state'             => 1,
            'rol'             => 2,
            'created_at'        => date('Y-m-d H:m:s'),
            'updated_at'        => date('Y-m-d H:m:s')
        ]);

        DB::table('users')->insert([
            "id"                => 3,
            'username'          =>  "edecan",
            'password'          => bcrypt('code1234'),
            'email'             => "daniel.rodriguez@gmail.com",
            'nombres'         => "Daniela",
            'apellidos'          => "Rodrigueza",
            'descripcion'       => "Edecan del sistema",
            'codigo'       => "lndWV6cjYx",
            'nacimiento'          => "1995-01-06",
            'state'             => 1,
            'rol'             => 3,
            'created_at'        => date('Y-m-d H:m:s'),
            'updated_at'        => date('Y-m-d H:m:s')
        ]);



        



    }
}