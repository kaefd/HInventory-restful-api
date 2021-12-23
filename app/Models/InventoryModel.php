<?php

namespace App\Models;

use CodeIgniter\Model;

class InventoryModel extends Model
{
    protected $table            = 'inventory';
    protected $primaryKey       = 'id_inventory';
    protected $useTimestamps    = true;
    protected $allowedFields    = ['code', 'name', 'design', 'code_quality', 'weight', 'qty_pcs', 'qty_ctn', 'total_pcs'];
}
