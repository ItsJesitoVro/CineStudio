<?php namespace App\Models;

use CodeIgniter\Model;

class noticias_accion extends Model{
	protected $table      = 'accion';
    protected $primaryKey = 'id_accion';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['titulo','contenido','autor','fecha','imagen'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}