<?php

namespace App\Controllers;

use App\Models\Consulta_model;
use App\Models\Registro_model;

class Usuario_contoller extends BaseController{

    public function add_consulta(){

$validation = \Config\Services::validation();
$request = \Config\Services::request();

$validation->setRules(
    [
        'nombre' => 'required|max_length[150]',
         'correo' => 'required|valid_email',
         'telefono' => 'required|max_length[150]',
         'motivo' => 'required|max_length[20]',
         'consulta' => 'required|max_length[250]|min_length[10]',
    ],
    [   // Errors
        'nombre' => [
            'required' => 'El nombre es requerido',
        ],

         'correo' => [
            'required' => 'El correo electrónico es obligatorio',
            'valid_email' => 'La dirección de correo debe ser válida',
        ],

         'telefono' => [
            'required' => 'El telefono es requerido',
        ],

          'motivo'   => [
            'required'      => 'El motivo es obligatorio',
            'max_length'    => 'El motivo de la consulta debe tener como máximo 100 caracteres',
        ],

        'consulta' => [
            'required' => 'La consulta es requerido',
            'min_length' =>'La consulta debe tener como mínimo 10 caracteres',
            'max_length'    => 'La consulta debe tener como máximo 200 caracteres',
        ],
    ]
);

if ($validation->withRequest($request)->run() ){

     $data = [
        'nombreApellido_mensaje' => $request->getPost('nombre'),
        'correo_mensaje' => $request->getPost('correo'),
        'telefono_mensaje' => $request->getPost('telefono'),
        'motivo_mensaje' => $request->getPost('motivo'),
        'consulta_mensajea' => $request->getPost('consulta') 
            ];

               $consulta = new Consulta_model();
               $consulta->insert($data);

              return redirect()->route('contacto')->with('mensaje_consulta', 'Su consulta se envió exitosamente!');
                        
                }else{

                 $data['titulo'] = 'Contacto';
                $data['validation'] = $validation->getErrors();
                 return view('\carpeta\plantilla\header.php', $data).view('\carpeta\plantilla\nav.php').view('\carpeta\contenido\contacto.php').view('\carpeta\plantilla\footter.php');
 

                }

        }

    public function add_registro()
{
    $validation = \Config\Services::validation();
    $request = \Config\Services::request();

    $validation->setRules([
        'nombre'     => 'required|max_length[150]',
        'apellido'   => 'required|max_length[150]',
        'correo'     => 'required|valid_email',
        'contrasena' => 'required|min_length[8]|max_length[10]',
        'confirmar'  => 'required|matches[contrasena]'
    ], [
        'nombre' => [
            'required' => 'El nombre es requerido',
        ],

        'apellido' => [
            'required' => 'El nombre es requerido',
        ],

         'correo' => [
            'required' => 'El correo electrónico es obligatorio',
            'valid_email' => 'La dirección de correo debe ser válida',
        ],

         'contrasena' => [
            'required' => 'La contraseña es requerida',
            'min_length' => 'La contraseña debe tener al menos 8 caracteres',
            'max_length' => 'La contraseña debe tener maximo 10 caractere',
        ],

        'confirmar' => [
            'required' => 'La confirmación de la contraseña es requerida',
            'matches'  => 'Las contraseñas no coinciden'
        ],
    ]);

    if ($validation->withRequest($request)->run()) {
        
    $data = [
    'nombre_registro'     => $request->getPost('nombre'),
    'apellido_registro'   => $request->getPost('apellido'),
    'correo_registro'     => $request->getPost('correo'),
    'contrasena_registro' => password_hash($request->getPost('contrasena'), PASSWORD_DEFAULT),
    'estado_registro'     => 'activo',
    'perfil_registro'     => 'usuario',
];

$registro = new \App\Models\Registro_model();
$registro->insert($data);

    return redirect()->to('registro')->with('registro_ok', 'Cuenta creada correctamente.');
                            
                }else{
                 $data['titulo'] = 'Registro';
                $data['validation'] = $validation->getErrors();
                 return view('\carpeta\plantilla\header.php', $data).view('\carpeta\plantilla\nav.php').view('\carpeta\contenido\registro.php').view('\carpeta\plantilla\footter.php');
                }
}

}
?>