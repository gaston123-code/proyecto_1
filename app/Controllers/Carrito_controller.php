<?php
namespace App\Controllers;

use App\Models\Producto_model;
use App\Models\Categoria_model;
use App\Models\Venta_model;
use App\Models\Detalle_Venta_Model;

class Carrito_controller extends BaseController {

    
    public function ver_carrito()
    {
    $cart = \Config\Services::cart();
    $data['titulo'] = 'Carrito de compras';
  
    return view('carpeta/plantilla/header', $data)
            . view('carpeta/plantilla/nav')
            . view('carpeta/contenido/ver_carrito', $data)
            . view('carpeta/plantilla/footter');
    }
    
    public function agregar_carrito()
    {
    $cart = \Config\Services::cart(); 
    $request = \Config\Services::request(); 
    $data = array(
    'id' => $request->getPost('id'), 
    'name' => $request->getPost('titulo'), 
    'price' => $request->getPost('precio'), 
    'qty' => 1
    );
    $cart->insert($data);

    return redirect()->to(base_url('ver_carrito'));    

}

   public function guardar_venta(){
$cart = \Config\Services::cart();
$venta = new Venta_model();
$detalle = new Detalle_venta_model();
$productos = new Producto_model;

$cart1 = $cart->contents();

foreach ($cart1 as $item){
$producto = $productos->where('id_producto' ,$item['id'])->first();
if ($producto['stock_producto'] < $item['qty']){
    // Mensaje de producto sin stock
return redirect()->route('ver_carrito')->with('mensaje', 'El producto no tiene stock suficiente');
}}

$total = 0;
foreach ($cart->contents() as $item) {
    $total += $item['qty'] * $item['price'];
}


$data=array('id_cliente' => session('id'), 'venta_fecha' => date('Y-m-d'), 'venta_total_compra'=>$total);

$venta_id = $venta->insert($data);


$cart1 = $cart->contents();
foreach ($cart1 as $item) {
$detalle_venta = array(
'id_venta' => $venta_id,
'id_producto' => $item['id'],
'detalle_cantidad' => $item['qty'],
'detalle_precio' => $item['price']

);
$producto = $productos->where('id_producto', $item['id'])->first();
$data = [
'stock_producto' => $producto['stock_producto'] - $item['qty'],
];
// Actualiza el stock del libro
$productos->update($item['id'], $data);


// Inserta el detalle de venta
$detalle->insert($detalle_venta);
}
// mensaje de agradecimiento por la compra
$cart->destroy();
return redirect()->route('ver_carrito')->with('mensaje', 'Gracias por su compra');
}
public function borrar($rowid)
{
    $cart = \Config\Services::cart();

    // Si el producto existe, lo elimina poniendo qty en 0
    $cart->remove($rowid);

    return redirect()->to(base_url('ver_carrito'))->with('mensaje', 'Producto eliminado del carrito');
}

public function vaciar($param = null)
{
    if ($param !== 'all') {
        return redirect()->to(base_url('ver_carrito'))->with('mensaje', 'Acceso inválido para vaciar el carrito');
    }

    $cart = \Config\Services::cart();
    $cart->destroy();

    return redirect()->to(base_url('ver_carrito'))->with('mensaje', 'El carrito ha sido vaciado correctamente');
}

public function listar_ventas(){
    $detalle_venta = new Detalle_venta_model;
    $venta = new Venta_model();

    $fecha_inicio = $this->request->getGet('fecha_inicio');
    $fecha_fin = $this->request->getGet('fecha_fin');

    $venta->join('registro', 'registro.id_registro=venta.id_cliente');

    if ($fecha_inicio && $fecha_fin) {
        // Aplicar el filtro por fecha si ambas están definidas
        $venta->where('venta_fecha >=', $fecha_inicio)
              ->where('venta_fecha <=', $fecha_fin);
    }

    $data['titulo'] = "Listado de ventas";
    $data['ventas'] = $venta->findAll();
    $data['fecha_inicio'] = $fecha_inicio;
    $data['fecha_fin'] = $fecha_fin;

    return view('carpeta/plantilla/header', $data)
        . view('carpeta/plantilla/nav')
        . view('carpeta/contenido/listar_venta', $data)
        . view('carpeta/plantilla/footter');
}


public function listar_ventas_detalles($id_venta){
    $detalle_venta = new Detalle_venta_model;
    $venta = new Venta_model();
    
    $data['titulo'] = "Detalles de la venta #$id_venta";

    // Obtén la información de la venta (si quieres mostrarla en el encabezado, por ejemplo)
    $data['venta'] = $venta
        ->join('registro', 'registro.id_registro = venta.id_cliente')
        ->where('venta.id_venta', $id_venta)
        ->first();

    $data['cliente'] = $venta
        ->select('venta.venta_fecha, venta.venta_total_compra, registro.nombre_registro, registro.apellido_registro, registro.correo_registro, registro.dni_registro, registro.domicilio_registro')
        ->join('registro', 'registro.id_registro = venta.id_cliente')
        ->where('venta.id_venta', $id_venta)
        ->first(); // Solo un resultado

    // Solo los detalles de esa venta específica
    $data['detalle'] = $detalle_venta
        ->select('detalle_venta.*, producto.descrpcion_producto, producto.nombre_producto, venta.*')
        ->join('producto', 'producto.id_producto = detalle_venta.id_producto')
        ->join('venta',    'venta.id_venta = detalle_venta.id_venta')
        ->where('detalle_venta.id_venta', $id_venta) // <- este es el filtro importante
        ->findAll();



    return view('carpeta/plantilla/header', $data)
        . view('carpeta/plantilla/nav')
        . view('carpeta/contenido/listaar_detalles', $data)
        . view('carpeta/plantilla/footter');
}

public function listar_ventas_cliente() {
    $venta = new Venta_model();
    $session = session();

    $id_usuario = $session->get('id'); // ✅ Esta es la clave correcta

    if (!$id_usuario) {
        return redirect()->to('/login');
    }

    $data['titulo'] = "Mis compras";

    $data['ventas'] = $venta->join('registro', 'registro.id_registro = venta.id_cliente')
                            ->where('venta.id_cliente', $id_usuario)
                            ->findAll();

    return view('carpeta/plantilla/header', $data)
        . view('carpeta/plantilla/nav')
        . view('carpeta/contenido/listar_venta_cliente', $data)
        . view('carpeta/plantilla/footter');
}




}