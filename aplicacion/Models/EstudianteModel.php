<?php namespace App\Models;

use CodeIgniter\Model;

class EstudianteModel extends Model{
    protected $table = 'estudiante';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    protected $allowedFields = ['nombre', 'apellido', 'dui', 'genero', 'carnet', 'grado_id'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $hidden = ['dui', 'apellido', 'dui', 'grado_id'];

    protected $skipValidation   = false; 
}