<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    public $crear_producto = [
        'nombre_producto' => 'trim|required|alpha_space|min_length[4]',  
        'precio' => 'required|decimal',
        'stock' => 'required|numeric|min_length[1]|max_length[10]',
        'descripcion' => 'trim|required|alpha_space|min_length[4]',  
    ];

    public $crear_categoria = [
        'categoria_descripcion' => 'trim|required|alpha|min_length[1]', 
    ];
    public $crear_dventa = [
        'id_producto_venta' => 'required|numeric|min_length[1]|max_length[10]',
        'cantidad' => 'required|numeric|min_length[1]|max_length[10]',
        'subtotal' => 'required|decimal',    
    ];

    public $crear_pedido = [
        'cantidad' => 'required|numeric|min_length[1]|max_length[10]',
        'fecha_pedido' => 'required|valid_date',
        'estado_pedido' => 'trim|required|alpha|min_length[4]',  
    ];

    public $crear_provedor = [
        'nombre_proveedor' =>  'trim|required|alpha_space|min_length[4]',
        'direccion' =>  'trim|required|alpha_space|min_length[4]',
        'telefono' =>  'required|min_length[9]|max_length[9]',
    ];
    public $crear_pventas = [
        //'cantidad' =>  'required|numeric|min_length[1]|max_length[10]',
        //'precio_venta' =>  'required|decimal',  
        //'id_venta' =>  'required|numeric|min_length[1]|max_length[10]',
    ];

    public $crear_rventas = [
    'nombre' => 'trim|required|alpha_space|min_length[4]',
    //'apellido' => 'required',
    //'sexo' => 'required|in_list[M,F]',
    //'correo' => 'required|valid_email',
    //'telefono' => 'required|numeric|min_length[10]|max_length[15]',
    //'direccion' => 'required',

    ];


    

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------
}
