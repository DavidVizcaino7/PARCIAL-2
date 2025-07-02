<?php

namespace App\Controllers;

class ControladorZapatos extends BaseController
{
    // Método para mostrar la vista de zapatos Deportivos (subcategoría Z1)
    public function Z1(): string
    {
        return view('ContenedorZapatos/Deportivos');
    }

    // Método para mostrar la vista de zapatos Casual (subcategoría Z2)
    public function Z2(): string
    {
        return view('ContenedorZapatos/Casual');
    }
}
