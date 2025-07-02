<?php

namespace App\Controllers;

// Controlador que gestiona las vistas de Vestidos
class ControladorVestido extends BaseController
{
    // Método que carga la vista de Vestidos de Fiesta
    public function V1(): string
    {
        return view('ContenedorVestidos/Fiesta');
    }

    // Método que carga la vista de Vestidos Formales
    public function V2(): string
    {
        return view('ContenedorVestidos/Formal');
    }
}
