<?php

namespace Database\Seeders;

use App\Models\Departamento;
use Illuminate\Database\Seeder;

class DepartamentoSeeder extends Seeder
{
    public function run(): void
    {
        $departamentos = [
            [
                'codigo' => 'TI',
                'nombre' => 'Tecnologías de la Información',
                'activo' => true,
                'idUsuarioCreacion' => 1,
            ],
            [
                'codigo' => 'LEG',
                'nombre' => 'Legal',
                'activo' => true,
                'idUsuarioCreacion' => 1,
            ],
            [
                'codigo' => 'SEG',
                'nombre' => 'Seguridad',
                'activo' => true,
                'idUsuarioCreacion' => 1,
            ],
            [
                'codigo' => 'EVT',
                'nombre' => 'Eventos y Buffets',
                'activo' => true,
                'idUsuarioCreacion' => 1,
            ],
        ];

          foreach ($departamentos as $departamento) {
             Departamento::updateOrCreate(
             ['codigo' => $departamento['codigo']],
              $departamento
             );
            }
    }
}