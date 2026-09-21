<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Departamento;
use Illuminate\Http\JsonResponse;

class DepartamentoController extends Controller
{
    public function index(): JsonResponse
    {
        $departamentos = Departamento::query()
            ->where('activo', true)
            ->orderBy('nombre')
            ->get();

        return response()->json($departamentos);
    }
}