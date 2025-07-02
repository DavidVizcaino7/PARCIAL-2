<?php

namespace App\Controllers;

// Controlador para manejar las vistas de Carteras
class ControladorCartera extends BaseController
{
    // Método para mostrar la vista de Carteras de Mano
    public function C1(): string
    {
        return view('ContenedorCarteras/Mano');
    }

    // Método para mostrar la vista de Carteras de Hombro
    public function C2(): string
    {
        return view('ContenedorCarteras/Hombro');
    }
}
