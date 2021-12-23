<?php

namespace App\Models;

use CodeIgniter\Model;

class QualityModel extends Model
{
    protected $table            = 'quality';
    protected $primaryKey       = 'id_quality';
    protected $allowedFields    = ['code_quality', 'name_quality', 'created_at', 'updated_at'];
}
