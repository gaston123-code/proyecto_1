<?php

namespace App\Controllers;

use App\Models\Producto_model;
use App\Models\Categoria_model;
use App\Models\Genero_model;
use App\Models\Marca_model;

class Productos_controller extends BaseController{

    public function form_agregar_producto(){
        $categoria = new Categoria_model();
        $data['categorias']=$categoria->findAll();
        $genero = new Genero_model();
        $data['generos']=$genero->findAll();
        $marca = new Marca_model();
        $data['marcas']=$marca->findAll();
        $data['titulo']='Agregar producto';
        return view ('carpeta/plantilla/header', $data).view('carpeta/plantilla/nav').view('carpeta/contenido/agregar_productos', $data).view('carpeta/plantilla/footter');
    }

    public function registrar_producto(){

        $validation = \Config\Services::validation();
        $request = \Config\Services::request();

        $validation->setRules(
            [
                'nombre' => 'required|max_length[150]',
                'precio' => 'required',
                'descripcion' => 'required|max_length[150]',
                'categoria' => 'is_not_unique[categoria_model.id_categoria]',
                'genero' => 'is_not_unique[genero_model.id_genero]',
                'marca' => 'is_not_unique[marca_model.id_marca]',
                'imagen' => 'uploaded[imagen]|max_size[imagen,4096]|is_image[imagen]'

            ],
            [   // Errors
                'nombre' => [
                    'required' => 'El nombre es requerido',
                    'max_length' => 'la descripcion debe tener un maximo de 150 caracteres'
                ],

                'precio' => [
                    'required' => 'El correo electrónico es obligatorio',
                ],

                'descripcion' => [
                    'required' => 'La descripcion es requerida',
                    'max_length' => 'la descripcion debe tener un maximo de 150 caracteres',
                ],

                'categoria' => [
                    'is_not_unique' => 'Debe seleccionar una categoria',
                ],

                'genero' => [
                    'is_not_unique' => 'Debe seleccionar una genero',
                ],

                'marca' => [
                    'is_not_unique' => 'Debe seleccionar una marca',
                ],

                'imagen' => [
                    'uploaded' => 'Debe seleccionar una imagen',
                    'is_image' => 'debe ser una imagen valida',
                ],
            ]
        );
        if($validation->withRequest($request)->run()){
            $img = $this->request->getFile('imagen');
            $nombre_aleatorio = $img->getRandomName();
            $img->move(ROOTPATH.'assets/uploads', $nombre_aleatorio);

            $data = [
                'nombre_producto' => $request->getPost('nombre'),
                'descrpcion_producto' => $request->getPost('descripcion'),
                'precio_producto' => $request->getPost('precio'),
                'stock_producto' => $request->getPost('stock'),
                'imagen_producto' => $nombre_aleatorio,
                'categoria_producto' => $request->getPost('categoria'),
                'genero_producto' => $request->getPost('genero'),
                'marca_producto' => $request->getPost('marca'),
                'estado_producto' => 1
            ];

            $producto = new Producto_model();
            $producto->insert($data);
            return redirect()->route('agregar')->with('mensaje', 'El producto se registró correctamente');
        } else{
            $categoria = new Categoria_model();
            $data['validation']=$validation->getErrors();
            $data['categorias']=$categoria->findAll();
            $genero = new Genero_model();
            $data['generos']=$genero->findAll();
            $marca = new Marca_model();
            $data['marcas']=$marca->findAll();
            $data['titulo']='Agregar producto';

            return view ('carpeta/plantilla/header', $data).view('carpeta/plantilla/nav').view('carpeta/contenido/agregar_productos', $data).view('carpeta/plantilla/footter');
        }
    }

    public function gestionar_productos() {
    $producto_model = new Producto_model();
    $categoria = new Categoria_model();
    $genero = new Genero_model();
    $marca = new Marca_model();

    // Obtener el término de búsqueda del parámetro GET
    $buscar = $this->request->getGet('buscar');

    // Preparar la consulta con los JOINs
    $producto_model = $producto_model
        ->join('categoria_model', 'categoria_model.id_categoria = producto.categoria_producto')
        ->join('genero_model', 'genero_model.id_genero = producto.genero_producto')
        ->join('marca_model', 'marca_model.id_marca = producto.marca_producto');

    // Aplicar filtro si hay término de búsqueda
    if (!empty($buscar)) {
        $producto_model = $producto_model->like('nombre_producto', $buscar);
    }

    // Ejecutar la consulta y obtener resultados
    $data['producto'] = $producto_model->findAll();

    $data['titulo'] = 'Listar producto';

    return view('carpeta/plantilla/header', $data)
        . view('carpeta/plantilla/nav')
        . view('carpeta/contenido/listar_producto', $data)
        . view('carpeta/plantilla/footter');
}


    public function editar_productos($id=null){
        $producto_model=new Producto_model();
        $categoria = new Categoria_model();
        $data['categorias'] = $categoria->findAll();
        #$data['producto'] = $producto_model->where('id_producto', $id)->first();
        $genero = new Genero_model();
        $data['generos'] = $genero->findAll();
        #$data['producto'] = $producto_model->where('id_producto', $id)->first();
        $marca = new Marca_model();
        $data['marcas'] = $marca->findAll();
        $data['producto'] = $producto_model->where('id_producto', $id)->first();

        $data['titulo'] = 'Edición producto';

        return view ('carpeta/plantilla/header', $data).view('carpeta/plantilla/nav').view('carpeta/contenido/editar_producto', $data).view('carpeta/plantilla/footter');
    }

    function actualizar_producto(){
    $validation = \Config\Services::validation();
    $request = \Config\Services::request();

    // Verificar si se subió una nueva imagen
    $img = $request->getFile('imagen');
    $imagen_subida = $img && $img->isValid() && !$img->hasMoved();

    // Reglas básicas (sin imagen)
    $rules = [
        'nombre' => 'required|max_length[150]',
        'precio' => 'required',
        'descripcion' => 'required|max_length[150]',
        'categoria' => 'is_not_unique[categoria_model.id_categoria]',
        'genero' => 'is_not_unique[genero_model.id_genero]',
        'marca' => 'is_not_unique[marca_model.id_marca]'
    ];

    // Agrega validación de imagen solo si se sube una nueva
    if ($imagen_subida) {
        $rules['imagen'] = 'uploaded[imagen]|max_size[imagen,4096]|is_image[imagen]';
    }

    // Mensajes personalizados
    $messages = [
        'nombre' => [
            'required' => 'El nombre es requerido',
            'max_length' => 'La descripción debe tener un máximo de 150 caracteres'
        ],
        'precio' => [
            'required' => 'El precio es obligatorio',
        ],
        'descripcion' => [
            'required' => 'La descripción es requerida',
            'max_length' => 'La descripción debe tener un máximo de 150 caracteres',
        ],
        'categoria' => [
            'is_not_unique' => 'Debe seleccionar una categoría',
        ],
        'genero' => [
            'is_not_unique' => 'Debe seleccionar un género',
        ],
        'marca' => [
            'is_not_unique' => 'Debe seleccionar una marca',
        ],
        'imagen' => [
            'uploaded' => 'Debe seleccionar una imagen',
            'is_image' => 'Debe ser una imagen válida',
        ],
    ];

    $validation->setRules($rules, $messages);

    if ($validation->withRequest($request)->run()) {
        $id = $request->getPost('id');

        // Obtener producto actual
        $productoModel = new Producto_model();
        $productoExistente = $productoModel->find($id);

        // Si se sube nueva imagen, guardarla
        if ($imagen_subida) {
            $nombre_aleatorio = $img->getRandomName();
            $img->move(ROOTPATH . 'assets/uploads', $nombre_aleatorio);
        } else {
            // Si no, mantener la anterior
            $nombre_aleatorio = $productoExistente['imagen_producto'];
        }

        // Datos actualizados
        $data = [
            'nombre_producto' => $request->getPost('nombre'),
            'descrpcion_producto' => $request->getPost('descripcion'),
            'precio_producto' => $request->getPost('precio'),
            'stock_producto' => $request->getPost('stock'),
            'imagen_producto' => $nombre_aleatorio,
            'categoria_producto' => $request->getPost('categoria'),
            'genero_producto' => $request->getPost('genero'),
            'marca_producto' => $request->getPost('marca')
        ];

        $productoModel->update($id, $data);
        return redirect()->route('gestionar')->with('mensaje', 'El producto se actualizó correctamente');
    } else {
        // Si falla la validación
        $categoria = new Categoria_model();
        $genero = new Genero_model();
        $marca = new Marca_model();
        $productoModel = new Producto_model();

        $data['validation'] = $validation->getErrors();
        $data['categorias'] = $categoria->findAll();
        $data['generos'] = $genero->findAll();
        $data['marcas'] = $marca->findAll();
        $data['producto'] = $productoModel->find($request->getPost('id'));
        $data['titulo'] = 'Editar producto';

        return view('carpeta/plantilla/header', $data)
            . view('carpeta/plantilla/nav')
            . view('carpeta/contenido/editar_producto', $data)
            . view('carpeta/plantilla/footter');
    }
}


    public function eliminar_producto($id=null){
        $data=array('estado_producto'=>'0');
        $producto=new Producto_model();
        $producto->update($id, $data);
        return redirect()->route('gestionar');
    }

    public function activar_producto($id=null){
        $data=array('estado_producto'=>'1');
        $producto=new Producto_model();
        $producto->update($id, $data);
        return redirect()->route('gestionar');
    }

    public function listar_productos() {
        $producto_model = new Producto_model();
        
        $data['producto']=$producto_model->where('estado_producto', 1)->where('stock_producto>', 0)
        ->join('categoria_model', 'categoria_model.id_categoria = producto.categoria_producto')->findAll();

            $data['titulo'] = 'Catálogo de productos';
            
            return view('carpeta/plantilla/header', $data)
            . view('carpeta/plantilla/nav')
            . view('carpeta/contenido/catalogo', $data)
            . view('carpeta/plantilla/footter');
    }

    public function listar_productos_por_genero($id) {
        $producto_model = new Producto_model();
        $genero = new Genero_model();
        
        $data['producto']=$producto_model->where('estado_producto', 1)->where('stock_producto>', 0)->where('genero_producto', $id)
        ->join('categoria_model', 'categoria_model.id_categoria = producto.categoria_producto')->findAll();

            $data['generos'] = $genero->findAll();
            $data['titulo'] = 'Catálogo de productos';
            
            return view('carpeta/plantilla/header', $data)
            . view('carpeta/plantilla/nav', $data)
            . view('carpeta/contenido/catalogo', $data)
            . view('carpeta/plantilla/footter');
    }

    public function listar_productos_por_categoria($id) {
        $producto_model = new Producto_model();
        $categoria_model = new Categoria_model();
        
        $data['producto']=$producto_model->where('estado_producto', 1)->where('stock_producto>', 0)->where('categoria_producto', $id)
        ->join('categoria_model', 'categoria_model.id_categoria = producto.categoria_producto')->findAll();

            $data['categorias'] = $categoria_model->findAll();
            $data['titulo'] = 'Catálogo de productos';
            
            return view('carpeta/plantilla/header', $data)
            . view('carpeta/plantilla/nav', $data)
            . view('carpeta/contenido/catalogo', $data)
            . view('carpeta/plantilla/footter');
    }

 
}
?>
