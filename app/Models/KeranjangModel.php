<?php

namespace App\Models;

use CodeIgniter\Model;

class KeranjangModel extends Model
{
    protected $table      = 'keranjang';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    protected $allowedFields = ['id_user', 'id_barang', 'banyak_barang', 'total_harga'];
 
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}