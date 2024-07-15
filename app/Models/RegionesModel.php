<?php

namespace App\Models;

use CodeIgniter\Model;

// cambiar el nombre al del archivo
class RegionesModel extends Model
{
    protected $table         = 'regiones';
    protected $allowedFields = [
        'cod_region', 'nombre', 'descripcion',
    ];
    
}