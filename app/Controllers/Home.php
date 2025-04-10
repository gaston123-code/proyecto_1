<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data['titulo']= "inicio";
        return view('\carpeta\plantilla\header.php', $data).view('\carpeta\plantilla\nav.php').view('\carpeta\contenido\inicio.php').view('\carpeta\plantilla\footter.php');
    }

    public function somos()
    {
        $data['titulo']= "quienes somos";
        return view('\carpeta\plantilla\header.php', $data).view('\carpeta\plantilla\nav.php').view('\carpeta\contenido\quienes-somos.php').view('\carpeta\plantilla\footter.php');
    }
}


