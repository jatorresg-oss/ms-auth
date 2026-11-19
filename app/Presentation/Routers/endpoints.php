<?php

use App\Presentation\Repositories\UsuariosRepository;
use Slim\App;

return function (App $app) {
    // Día 1: listado inicial para verificar la conexión con la base de datos.
    $app->get('/usuarios', [UsuariosRepository::class, 'all']);
};