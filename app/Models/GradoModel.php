<?php namespace App\Models;

use CodeIgniter\Model;

class GradoModel extends Model
{
    protected $table = 'grado';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields    = ['grado', 'seccion', 'profesor_id'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $hidden = ['profesor_id'];

    protected $skipValidation   = false;
}