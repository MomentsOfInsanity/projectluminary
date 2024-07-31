<?php

namespace App\Models;

use CodeIgniter\Model;

class User_model extends Model
{
    protected $db;
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'group_id',
        'license_id',
        'role_id',
        'email',
        'first_name',
        'last_name',
        'password',
        'salt',
        'reset_password_token',
        'session_id',
        'is_active',
        'is_deleted',
        'PHOTO_EXTENSION',
        'NOTES',
        'update_by',
        'user_type',
        'last_login_date',
        'last_login_attempt',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
        'admin_contact',
        'profile_img_key',
        'first_time_login_complete',
        'is_teacherAdmin',
        'expired_at'
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
