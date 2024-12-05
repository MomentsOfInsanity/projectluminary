<?php

namespace App\Models;

use CodeIgniter\Model;

class Milestone_model extends Model
{
    protected $db;
    protected $table = 'milestones';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'date',
        'title',
        'description',
        'image',
        'created_at'
    ];

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function getUsers() {
      
        $query = $this->db->query('SELECT * from users');
        return $query->getRow();
    }

    

}
