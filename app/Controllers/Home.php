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

    public function contacto()
    {
        $data['titulo']= "contacto";
        return view('\carpeta\plantilla\header.php', $data).view('\carpeta\plantilla\nav.php').view('\carpeta\contenido\contacto.php').view('\carpeta\plantilla\footter.php');
    }

    public function comercializacion()
    {
        $data['titulo']= "comercializacion";
        return view('\carpeta\plantilla\header.php', $data).view('\carpeta\plantilla\nav.php').view('\carpeta\contenido\comercializacion.php').view('\carpeta\plantilla\footter.php');
    }

    public function terminos()
    {
        $data['titulo']= "comercializacion";
        return view('\carpeta\plantilla\header.php', $data).view('\carpeta\plantilla\nav.php').view('\carpeta\contenido\terminos.php').view('\carpeta\plantilla\footter.php');
    }

    public function login()
    {
        $data['titulo']= "Ingreso";
        return view('\carpeta\plantilla\header.php', $data).view('\carpeta\plantilla\nav.php').view('\carpeta\contenido\login.php').view('\carpeta\plantilla\footter.php');
    }

    public function registro()
    {
        $data['titulo']= "Registro";
        return view('\carpeta\plantilla\header.php', $data).view('\carpeta\plantilla\nav.php').view('\carpeta\contenido\registro.php').view('\carpeta\plantilla\footter.php');
    }

}


