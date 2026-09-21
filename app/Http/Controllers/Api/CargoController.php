<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cargo;
use Illuminate\Http\JsonResponse;

class CargoController extends Controller
{
    public function index(): JsonResponse
    {
        $cargos = Cargo::query()
            ->where('activo', true)
            ->orderBy('nombre')
            ->get();

        return response()->json($cargos);
    }
}