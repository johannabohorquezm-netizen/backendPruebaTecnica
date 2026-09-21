<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class User extends Model
{
    protected $table = 'users';

    protected $fillable = [
        'usuario',
        'email',
        'primerNombre',
        'segundoNombre',
        'primerApellido',
        'segundoApellido',
        'idDepartamento',
        'idCargo',
    ];

    protected $casts = [
        'idDepartamento' => 'integer',
        'idCargo' => 'integer',
    ];

    public function departamento(): BelongsTo
    {
        return $this->belongsTo(
            Departamento::class,
            'idDepartamento'
        );
    }

    public function cargo(): BelongsTo
    {
        return $this->belongsTo(
            Cargo::class,
            'idCargo'
        );
    }
}