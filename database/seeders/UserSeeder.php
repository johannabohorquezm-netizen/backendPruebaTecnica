<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $usuarios = [
            [
                'usuario' => 'ppicapiedra',
                'email' => 'ppicapiedra@mail.com',
                'primerNombre' => 'Pedro',
                'segundoNombre' => null,
                'primerApellido' => 'Picapiedra',
                'segundoApellido' => null,
                'idDepartamento' => 1,
                'idCargo' => 1,
            ],
            [
                'usuario' => 'pmarmol',
                'email' => 'pmarmol@mail.com',
                'primerNombre' => 'Pablo',
                'segundoNombre' => null,
                'primerApellido' => 'Marmol',
                'segundoApellido' => null,
                'idDepartamento' => 1,
                'idCargo' => 2,
            ],
            [
                'usuario' => 'jalimana',
                'email' => 'jalimana@mail.com',
                'primerNombre' => 'Juanito',
                'segundoNombre' => null,
                'primerApellido' => 'Alimaña',
                'segundoApellido' => null,
                'idDepartamento' => 1,
                'idCargo' => 3,
            ],
            [
                'usuario' => 'wwhite',
                'email' => 'wwhite@mail.com',
                'primerNombre' => 'Walter',
                'segundoNombre' => 'Hartwell',
                'primerApellido' => 'White',
                'segundoApellido' => 'Heisenberg',
                'idDepartamento' => 1,
                'idCargo' => 4,
            ],
            [
                'usuario' => 'jpinkman',
                'email' => 'jpinkman@mail.com',
                'primerNombre' => 'Jesse',
                'segundoNombre' => null,
                'primerApellido' => 'Pinkman',
                'segundoApellido' => null,
                'idDepartamento' => 1,
                'idCargo' => 4,
            ],
            [
                'usuario' => 'sgoodman',
                'email' => 'sgoodman@mail.com',
                'primerNombre' => 'Saul',
                'segundoNombre' => null,
                'primerApellido' => 'Goodman',
                'segundoApellido' => null,
                'idDepartamento' => 2,
                'idCargo' => 6,
            ],
            [
                'usuario' => 'mehrmantraut',
                'email' => 'mehrmantraut@mail.com',
                'primerNombre' => 'Mike',
                'segundoNombre' => null,
                'primerApellido' => 'Ehrmantraut',
                'segundoApellido' => null,
                'idDepartamento' => 3,
                'idCargo' => 7,
            ],
            [
                'usuario' => 'kwexler',
                'email' => 'kwexler@mail.com',
                'primerNombre' => 'Kimberly',
                'segundoNombre' => null,
                'primerApellido' => 'Wexler',
                'segundoApellido' => null,
                'idDepartamento' => 2,
                'idCargo' => 6,
            ],
            [
                'usuario' => 'gfring',
                'email' => 'gfring@mail.com',
                'primerNombre' => 'Gustavo',
                'segundoNombre' => null,
                'primerApellido' => 'Fring',
                'segundoApellido' => null,
                'idDepartamento' => 4,
                'idCargo' => 8,
            ],
            [
                'usuario' => 'jcalamita',
                'email' => 'jcalamita@mail.com',
                'primerNombre' => 'Juan',
                'segundoNombre' => 'Carlos',
                'primerApellido' => 'Calamita',
                'segundoApellido' => null,
                'idDepartamento' => 1,
                'idCargo' => 5,
            ],
        ];

        foreach ($usuarios as $usuario) {
            User::updateOrCreate(
            ['usuario' => $usuario['usuario']],
            $usuario
            );
        }
    }
}