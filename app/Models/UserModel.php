<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'user';

    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    protected $allowedFields = ['email', 'password', 'nama', 'alamat', 'no_hp', 'foto'];
 
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}