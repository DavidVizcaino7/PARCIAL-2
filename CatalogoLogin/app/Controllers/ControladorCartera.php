<?php

namespace App\Controllers;

class ControladorCartera extends BaseController
{
    public function index($subcategoria = null)
    {
        // Verificar sesión activa
        if (!session()->get('logueado')) {
            return redirect()->to(base_url('login'));
        }

        // Mostrar vista correspondiente
        if ($subcategoria == 1) {
            return view('ContenedorCarteras/Mano');
        } elseif ($subcategoria == 2) {
            return view('ContenedorCarteras/Hombro');
        } else {
            return view('errors/html/error_404');
        }
    }
}
