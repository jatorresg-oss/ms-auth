<?php

namespace App\Controllers;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Collection;

class UsuariosController
{
    public function all(): Collection
    {
        return Usuario::all();
    }
}