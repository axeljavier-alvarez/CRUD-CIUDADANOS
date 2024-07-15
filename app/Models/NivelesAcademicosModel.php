<?php

namespace App\Models;

use CodeIgniter\Model;

// cambiar el nombre al del archivo
class NivelesAcademicosModel extends Model
{
    protected $table         = 'nivelesacademicos';
    protected $allowedFields = [
        'cod_nivel_acad', 'nombre', 'descripcion',
    ];
    
}