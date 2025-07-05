<?php

namespace App\Controllers;

class ControladorZapatos extends BaseController
{
    public function index($subcategoria = null)
    {
        // Verificar si el usuario está logueado
        if (!session()->get('logueado')) {
            return redirect()->to(base_url('login'));
        }

        // Seleccionar la vista según la subcategoría
        if ($subcategoria == 1) {
            return view('ContenedorZapatos/Deportivos');
        } elseif ($subcategoria == 2) {
            return view('ContenedorZapatos/Casual');
        } else {
            // Si no es ni 1 ni 2, mostrar error 404
            return view('errors/html/error_404');
        }
    }
}
