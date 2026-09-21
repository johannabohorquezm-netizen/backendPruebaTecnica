<?php

namespace Database\Seeders;

use App\Models\Cargo;
use Illuminate\Database\Seeder;

class CargoSeeder extends Seeder
{
    public function run(): void
    {
        $cargos = [
            [
                'codigo' => 'ADM',
                'nombre' => 'Administrador',
                'activo' => true,
                'idUsuarioCreacion' => 1,
            ],
            [
                'codigo' => 'LFR',
                'nombre' => 'Líder Frontend',
                'activo' => true,
                'idUsuarioCreacion' => 1,
            ],
            [
                'codigo' => 'LBE',
                'nombre' => 'Líder Backend',
                'activo' => true,
                'idUsuarioCreacion' => 1,
            ],
            [
                'codigo' => 'DFR',
                'nombre' => 'Desarrollador Frontend',
                'activo' => true,
                'idUsuarioCreacion' => 1,
            ],
            [
                'codigo' => 'DBE',
                'nombre' => 'Desarrollador Backend',
                'activo' => true,
                'idUsuarioCreacion' => 1,
            ],
            [
                'codigo' => 'ABO',
                'nombre' => 'Abogado',
                'activo' => true,
                'idUsuarioCreacion' => 1,
            ],
            [
                'codigo' => 'GUA',
                'nombre' => 'Guardia',
                'activo' => true,
                'idUsuarioCreacion' => 1,
            ],
            [
                'codigo' => 'POL',
                'nombre' => 'Pollero',
                'activo' => true,
                'idUsuarioCreacion' => 1,
            ],
        ];

        foreach ($cargos as $cargo) {
            Cargo::updateOrCreate(
             ['codigo' => $cargo['codigo']],
              $cargo
            );
        }
    }
}