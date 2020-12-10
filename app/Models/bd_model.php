<?php namespace App\Models;

use CodeIgniter\Model;

class bd_model extends Model{
	protected $table      = 'administrador';
    protected $primaryKey = 'id_admin';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['usuario','contrasenia'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}