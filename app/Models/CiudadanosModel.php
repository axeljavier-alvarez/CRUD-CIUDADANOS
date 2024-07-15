<?php

namespace App\Models;

use CodeIgniter\Model;

// cambiar el nombre al del archivo
class CiudadanosModel extends Model
{
    protected $table         = 'ciudadanos';
    protected $allowedFields = [
        'dpi', 'apellido', 'nombre', 'direccion', 'tel_casa', 'tel_movil', 'email', 'fechanac', 'cod_nivel_acad', 'cod_muni',
    ];
    
}