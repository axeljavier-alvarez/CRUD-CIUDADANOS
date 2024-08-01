<?php

namespace App\Models;

use CodeIgniter\Model;

// cambiar el nombre al del archivo
class DepartamentosModel extends Model
{
    protected $table         = 'departamentos';
    protected $primaryKey = 'cod_depto';

    protected $allowedFields = [
        'cod_depto', 'nombre_depto', 'cod_region',
    ];
    
}