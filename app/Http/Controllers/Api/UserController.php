<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $query = User::query()
            ->with([
                'departamento:id,nombre',
                'cargo:id,nombre',
            ]);

        if ($request->filled('idDepartamento')) {
            $query->where(
                'idDepartamento',
                $request->integer('idDepartamento')
            );
        }

        if ($request->filled('idCargo')) {
            $query->where(
                'idCargo',
                $request->integer('idCargo')
            );
        }

        $usuarios = $query
            ->orderBy('id')
            ->get();

        return response()->json($usuarios);
    }

    public function store(StoreUserRequest $request): JsonResponse
    {
        $usuario = User::create($request->validated());

        $usuario->load([
            'departamento:id,nombre',
            'cargo:id,nombre',
        ]);

        return response()->json([
            'message' => 'Usuario registrado correctamente.',
            'data' => $usuario,
        ], 201);
    }

    public function show(User $user): JsonResponse
    {
        $user->load([
            'departamento:id,nombre',
            'cargo:id,nombre',
        ]);

        return response()->json($user);
    }

    public function update(
        UpdateUserRequest $request,
        User $user
    ): JsonResponse {
        $user->update($request->validated());

        $user->load([
            'departamento:id,nombre',
            'cargo:id,nombre',
        ]);

        return response()->json([
            'message' => 'Usuario actualizado correctamente.',
            'data' => $user,
        ]);
    }

    public function destroy(User $user): JsonResponse
    {
        $user->delete();

        return response()->json([
            'message' => 'Usuario eliminado correctamente.',
        ]);
    }
}