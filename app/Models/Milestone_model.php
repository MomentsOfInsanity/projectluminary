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

    public function getAllMilestones() {
      
        $sql= "SELECT * FROM milestones ORDER BY date DESC";
        $query = $this->db->query($sql);
        return $query->getResult();
    }

    

}
