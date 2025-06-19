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

     $session = session();
$cliente_id = $session->get('id'); // Asegúrate que así se guarda el ID del usuario logueado

$data = [
    'nombreApellido_mensaje' => $request->getPost('nombre'),
    'correo_mensaje' => $request->getPost('correo'),
    'telefono_mensaje' => $request->getPost('telefono'),
    'asunto_mensaje' => $request->getPost('motivo'),
    'consulta_mensaje' => $request->getPost('consulta'),
    'estado_mensaje' => 1,
    'cliente_id' => $cliente_id ?? null // Guardar el ID si está logueado, o null si no
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

        public function leer_mensaje($id=null){
        $data=array('estado_mensaje'=>'0');
        $consulta=new Consulta_model();
        $consulta->update($id, $data);
        return redirect()->route('consultasAdm');
    }

    public function noLeido_mensaje($id=null){
        $data=array('estado_mensaje'=>'1');
        $consulta=new Consulta_model();
        $consulta->update($id, $data);
        return redirect()->route('consultasAdm');
    }

     
    public function add_registro()
{
    $validation = \Config\Services::validation();
    $request = \Config\Services::request();

    $validation->setRules([
        'nombre'     => 'required|max_length[150]',
        'apellido'   => 'required|max_length[150]',
        'correo'     => 'required|valid_email',
        'dni'     => 'required|max_length[150]',
        'domicilio'   => 'required|max_length[150]',
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

        'dni' => [
            'required' => 'El dni es requerido',
        ],

        'domicilio' => [
            'required' => 'El domicilio es requerido',
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
    'dni_registro'     => $request->getPost('dni'),
    'domicilio_registro'     => $request->getPost('domicilio'),
    'contrasena_registro' => password_hash($request->getPost('contrasena'), PASSWORD_DEFAULT),
    'estado_registro'     => 1,
    'perfil_registro'     => 1,
];

$registro = new Registro_model();
$registro->insert($data);

    return redirect()->route('registro')->with('registro_ok', 'Cuenta creada correctamente.');
                            
                }else{
                 $data['titulo'] = 'Registro';
                $data['validation'] = $validation->getErrors();
                 return view('\carpeta\plantilla\header.php', $data).view('\carpeta\plantilla\nav.php').view('\carpeta\contenido\registro.php').view('\carpeta\plantilla\footter.php');
                }

}


public function buscar_usuario(){
    $validation = \Config\Services::validation();
    $request = \Config\Services::request();
    $session = session();

    $validation->setRules([
        'correo'     => 'required|valid_email',
        'contrasena' => 'required|min_length[8]|max_length[10]',
    ], [

         'correo' => [
            'required' => 'El correo electrónico es obligatorio',
            'valid_email' => 'La dirección de correo debe ser válida',
        ],

         'contrasena' => [
            'required' => 'La contraseña es requerida',
            'min_length' => 'La contraseña debe tener al menos 8 caracteres',
            'max_length' => 'La contraseña debe tener maximo 10 caractere',
        ],
    ]);

    if (!$validation->withRequest($request)->run()) {
        $data['titulo'] = 'Login';
        $data['validation'] = $validation->getErrors();
        return view('\carpeta\plantilla\header.php', $data).view('\carpeta\plantilla\nav.php').view('\carpeta\contenido\login.php').view('\carpeta\plantilla\footter.php');
     }

      $correo = $request->getPOST('correo');
      $contrasena = $request->getPOST('contrasena');

      $user_Model = new Registro_model();
      $user = $user_Model->where('correo_registro', $correo)->where('estado_registro', 1)->first();

    if($user && password_verify($contrasena, $user['contrasena_registro'])){
        $data =[
            'id'=>$user['id_registro'],
            'nombre' => $user['nombre_registro'],
            'apellido' => $user['apellido_registro'],
            'perfil' => $user['perfil_registro'],
            'estado' => $user['estado_registro'],
            'login' => TRUE
        ];

        $session->set($data);

        switch($user['perfil_registro']){
            case '1':
                return redirect()->route('agregar');
            break;
            case '2':
               return redirect()->route('/');
            break;
        }
    }else{
        return redirect()->route('login')->with('mensaje', 'Usuario y/o contraseña incorrecto');
    }
}

public function cerrar_sesion(){
    $session = session();
    $session->destroy();
    return redirect()->route('login');
}

public function admin(){
    $data["titulo"] = 'index';

    return view('\carpeta\plantillas/header', $data).view('\carpeta\plantillas/admin_nav').view('\carpeta\contenido/inicio_admin');
}


public function listar() {
        $consulta_model =new Consulta_model();
        
        $data['consulta']=$consulta_model->findAll();
        
        
            $data['titulo'] = 'Consultas';
            
            return view('carpeta/plantilla/header', $data)
            . view('carpeta/plantilla/nav')
            . view('carpeta/contenido/ver_consultas')
            . view('carpeta/plantilla/footter');
    }

public function ver_usuario()
{
    $registro_model = new \App\Models\Registro_model();
    $id = session()->get('id');
    $usuario = $registro_model->find($id);
    $data['usuario'] = $usuario;
    $data['titulo'] = 'Ver Usuario';

    return view('carpeta/plantilla/header', $data)
         . view('carpeta/plantilla/nav')
         . view('carpeta/contenido/ver_usuario')
         . view('carpeta/plantilla/footter');
}


public function actualizar_usuario()
{
    $validation = \Config\Services::validation();
    $request = \Config\Services::request();
    $registro = new \App\Models\Registro_model();

    $validation->setRules([
        'nombre'     => 'required',
        'apellido'   => 'required',
        'correo'     => 'required|valid_email',
        'dni'        => 'required|max_length[8]',
        'domicilio'  => 'required|max_length[150]',
        'contrasena' => 'permit_empty|min_length[8]|max_length[10]',
    ], [
        'nombre' => [
            'required' => 'El nombre es obligatorio.',
        ],
        'apellido' => [
            'required' => 'El apellido es obligatorio.',
        ],
        'correo' => [
            'required' => 'El correo es obligatorio.',
            'valid_email' => 'El correo no es válido.',
        ],
        'dni' => [
            'required' => 'El DNI es obligatorio.',
            'max_length' => 'Máximo 8 caracteres en DNI.'

        ],
        'domicilio' => [
            'required' => 'El domicilio es obligatorio.',
            'max_length' => 'Máximo 150 caracteres.'
        ],
        'contrasena' => [
            'min_length' => 'La contraseña debe tener al menos 8 caracteres',
            'max_length' => 'La contraseña debe tener maximo 10 caractere',
        ],
    ]);

    if ($validation->withRequest($request)->run()) {
        $id = $request->getPost('id_registro');

        $data = [
            'nombre_registro'    => $request->getPost('nombre'),
            'apellido_registro'  => $request->getPost('apellido'),
            'correo_registro'    => $request->getPost('correo'),
            'dni_registro'       => $request->getPost('dni'),
            'domicilio_registro' => $request->getPost('domicilio'),
        ];

        if ($request->getPost('contrasena')) {
            $data['contrasena_registro'] = password_hash($request->getPost('contrasena'), PASSWORD_DEFAULT);
        }

        $registro->update($id, $data);

        return redirect()->to('usuario/ver_usuario/' . $id)->with('mensaje', 'Usuario actualizado correctamente.');
    } else {
        $data['validation'] = $validation->getErrors();
        $data['usuario'] = (new \App\Models\Registro_model())->find($request->getPost('id_registro'));
        $data['titulo'] = 'Editar Usuario';

        return view('carpeta/plantilla/header', $data)
             . view('carpeta/plantilla/nav')
             . view('carpeta/contenido/ver_usuario', $data)
             . view('carpeta/plantilla/footter');
    }
}



   
}?>