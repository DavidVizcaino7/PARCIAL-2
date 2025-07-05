<?php

namespace App\Controllers;

class ControladorVestido extends BaseController
{
    public function index($subcategoria = null)
    {
        // Verifica si el usuario ha iniciado sesión
        if (!session()->get('logueado')) {
            return redirect()->to(base_url('login'));
        }

        // Mostrar la vista según la subcategoría
        if ($subcategoria == 1) {
            return view('ContenedorVestidos/Fiesta');
        } elseif ($subcategoria == 2) {
            return view('ContenedorVestidos/Formal');
        } else {
            // Si no es 1 ni 2, error 404
            return view('errors/html/error_404');
        }
    }
}
