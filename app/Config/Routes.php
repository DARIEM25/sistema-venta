<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
$routes->get('/', 'Usuarios::index'); // vista pagina principal para todos los usuarios
$routes->get('Iniciar_Sesion', 'Usuarios::Inciar_Sesion'); // vista para que el usuario inicie sesion
$routes->get('Registrarse', 'Usuarios::Registrarse'); //vista para que se registre el usuario
$routes->post('registrar/usuario', 'Usuarios::registro_usuario'); // registro de nuevo usuario

    $routes->get('Principal', 'Usuarios::Principal'); // vista cliente
    // VISTA PRODUCTOS CLIENTE
    $routes->get('Productos', 'Trajes::Listar_Trajes'); // vista lista de las trajes
    $routes->get('Compras', 'Trajes::Listar_Compras'); // vista lista de las compras


$routes->group('admin',['namespase'=>'App\Controllers','filter'=>'SessionAdmin'], function($routes) {

    // VISTA HOME DEL ADMINISTRADOR
    $routes->get('Home', 'Admin::Dashboard');  // vista en blanco dashboard Herencias Administrador

    // VISTA PRODUCTOS ADMIN
    $routes->get('Productos', 'Productos::Listar'); // vista lista de los Productos
    $routes->get('ajax/(:any)','Productos::ajax/$1');
    $routes->get('Insertar/Producto', 'Productos::mostrarFormulario'); // vista ingresar Producto
    $routes->post('registrar/Producto', 'Productos::crear'); // insertar nueva Producto
    $routes->get('editar/Producto/(:num)', 'Productos::editar/$1'); // vista Editar Producto
    $routes->post('actualizar/Producto', 'Productos::actualizar'); // funcion modificar Producto
    $routes->get('eliminar/Producto/(:num)', 'Productos::eliminar/$1'); //funcion eliminar Producto

    // VISTA PEDIDOS ADMIN
    $routes->get('Pedidos', 'Pedidos::Listar'); // vista lista de los Pedidos
    $routes->get('Insertar/Pedido', 'Pedidos::mostrarFormulario'); // vista ingresar Pedido
    $routes->post('registrar/Pedido', 'Pedidos::crear'); // insertar nueva Pedido
    $routes->get('editar/Pedido/(:num)', 'Pedidos::editar/$1'); // vista Editar Pedido
    $routes->post('actualizar/Pedido', 'Pedidos::actualizar'); // funcion modificar Pedido
    $routes->get('eliminar/Pedido/(:num)', 'Pedidos::eliminar/$1'); //funcion eliminar Pedido

    // VISTA CATEGORIAS ADMIN
    $routes->get('Categorias', 'Categorias::Listar'); // vista lista de los Categorias
    $routes->get('Insertar/Categoria', 'Categorias::mostrarFormulario'); // vista ingresar Categoria
    $routes->post('registrar/Categoria', 'Categorias::crear'); // insertar nueva Categoria
    $routes->get('editar/Categoria/(:num)', 'Categorias::editar/$1'); // vista Editar Categoria
    $routes->post('actualizar/Categoria', 'Categorias::actualizar'); // funcion modificar Categoria
    $routes->get('eliminar/Categoria/(:num)', 'Categorias::eliminar/$1'); //funcion eliminar Categoria

    // VISTA PROVEEDORES ADMIN
    $routes->get('Proveedores', 'Proveedores::Listar'); // vista lista de los Proveedor
    $routes->get('Insertar/Proveedor', 'Proveedores::mostrarFormulario'); // vista ingresar Proveedor
    $routes->post('registrar/Proveedor', 'Proveedores::crear'); // insertar nueva Categoria
    $routes->get('editar/Proveedor/(:num)', 'Proveedores::editar/$1'); // vista Editar Categoria
    $routes->post('actualizar/Proveedor', 'Proveedores::actualizar'); // funcion modificar Categoria
    $routes->get('eliminar/Proveedor/(:num)', 'Proveedores::eliminar/$1'); //funcion eliminar Categoria

     // VISTA DETALLE VENTA ADMIN
     $routes->get('Dventas', 'Dventas::Listar'); // vista lista de detalle venta
     $routes->get('Insertar/Dventa', 'Dventas::mostrarFormulario'); // vista ingresar detalle venta
     $routes->post('registrar/Dventa', 'Dventas::crear'); // insertar nueva detalle venta
     $routes->get('editar/Dventa/(:num)', 'Dventas::editar/$1'); // vista Editar detalle venta
     $routes->post('actualizar/Dventa', 'Dventas::actualizar'); // funcion modificar detalle venta
     $routes->get('eliminar/Dventa/(:num)', 'Dventas::eliminar/$1'); //funcion eliminar detalle venta

      // VISTA PRODUCTO VENTA ADMIN
      $routes->get('Pventas', 'Pventas::Listar'); // vista lista de los producto venta
      $routes->get('Insertar/Pventa', 'Pventas::mostrarFormulario'); // vista ingresar producto venta
      $routes->post('registrar/Pventa', 'Pventas::crear'); // insertar nueva producto venta
      $routes->get('editar/Pventa/(:num)', 'Pventas::editar/$1'); // vista Editar Cproducto venta
      $routes->post('actualizar/Pventa', 'Pventas::actualizar'); // funcion modificar producto venta
      $routes->get('eliminar/Pventa/(:num)', 'Pventas::eliminar/$1'); //funcion eliminar producto venta

      // VISTA REGISTRO VENTA ADMIN
      $routes->get('Rventas', 'Rventas::Listar'); // vista lista de las ventas
      $routes->get('Insertar/Rventa', 'Rventas::mostrarFormulario'); // vista ingresar Venta
      $routes->post('registrar/Rventa', 'Rventas::crear'); // insertar nueva Venta
      $routes->get('editar/Rventa/(:num)', 'Rventas::editar/$1'); // vista Editar Venta
      $routes->post('actualizar/Rventa', 'Rventas::actualizar'); // funcion modificar Venta
      $routes->get('eliminar/Rventa/(:num)', 'Rventas::eliminar/$1'); //funcion eliminar Venta
});

// LOGIN INGRESO Y SALIDA
$routes->post('login', 'Login::login');
$routes->get('salir', 'Login::salir');

// MIGRACIONES Y SEEDERS
$routes->get('/migrate', 'Login::migrate');
$routes->get('/seeder', 'Login::seeder');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
