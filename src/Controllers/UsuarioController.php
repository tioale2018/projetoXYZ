<?php
namespace App\Controllers;

use App\Models\Usuario;

class UsuarioController {
    public function index() {
        $usuario = new Usuario();
        echo $usuario->dizerOla();
        echo $usuario->dizerBomDia();
    }
}
