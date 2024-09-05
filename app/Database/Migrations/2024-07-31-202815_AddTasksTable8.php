<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTasksTable6 extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true,
            ],
            'title' => [
                'type' => 'TEXT',
                'default' => NULL
            ],
            'bucket' => [
                'type' => 'TEXT',
                'default' => NULL
            ],
            'progress' => [
                'type' => 'TEXT',
                'default' => NULL
            ],
            'notes' => [
                'type' => 'TEXT',
                'default' => NULL
            ],
            'updates' => [
                'type' => 'TEXT',
                'default' => NULL
            ],
            'date_started datetime default current_timestamp',
            'date_assigned datetime default current_timestamp',
            'date_completed datetime default current_timestamp',
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('tasks_tracker');
    }

    public function down()
    {
        $this->forge->dropTable('tasks_tracker');
    }
}
