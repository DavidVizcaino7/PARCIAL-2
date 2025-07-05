<?php

namespace App\Controllers;

// Controlador encargado de manejar el inicio y cierre de sesión
class Login extends BaseController
{
    // Muestra el formulario de login
    public function index()
    {
        helper(['form', 'url']); // Habilita funciones para formularios y URLs
        return view('login');     // Carga la vista del formulario de login
    }

    // Valida las credenciales del usuario
    public function validar()
    {
        helper(['form', 'url']); // Nuevamente activa los helpers necesarios

        // Captura los datos enviados por el formulario
        $usuario = $this->request->getPost('username');
        $clave = $this->request->getPost('password');

        // Verifica si las credenciales son correctas (aquí están quemadas en el código)
        if ($usuario === 'dw' && $clave === '1234') {
            session()->set('logueado', true); // Inicia sesión guardando una variable en la sesión
            return redirect()->to(base_url('bienvenido')); // Redirige a la página de bienvenida
        } else {
            // Si las credenciales están mal, recarga la vista con un mensaje de error
            $data['error'] = 'Usuario o contraseña incorrectos';
            return view('login', $data);
        }
    }

    // Cierra la sesión del usuario
    public function logout()
    {
        session()->destroy(); // Elimina todos los datos de sesión
        return redirect()->to(base_url('login')); // Redirige nuevamente al login
    }
}
