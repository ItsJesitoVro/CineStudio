<?php namespace App\Models;

use CodeIgniter\Model;

class noticias_romance extends Model{
	protected $table      = 'romantica';
    protected $primaryKey = 'id_romantica';

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