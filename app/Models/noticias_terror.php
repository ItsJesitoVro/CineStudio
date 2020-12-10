<?php namespace App\Models;

use CodeIgniter\Model;

class noticias_terror extends Model{
	protected $table      = 'terror';
    protected $primaryKey = 'id_terror';

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