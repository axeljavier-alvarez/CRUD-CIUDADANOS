<?php

namespace App\Models;

use CodeIgniter\Model;

// cambiar el nombre al del archivo
class MunicipiosModel extends Model
{
    protected $table         = 'municipios';
    protected $allowedFields = [
        'cod_muni', 'nombre_municipio', 'cod_depto',
    ];
    
}