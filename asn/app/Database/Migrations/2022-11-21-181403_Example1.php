<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Example1 extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'example_1_id'  => [
                'type'           => 'int',
                'constraint'     => 11,
                'auto_increment' => true
            ],
            'title'         => [
                'type'       => 'varchar',
                'constraint' => 191
            ],
            'message' => [
                'type'       => 'varchar',
                'constraint' => 191
            ],
        ]);

        $this->forge->addKey('example_1_id', true);
        $this->forge->addUniqueKey('title');
        $this->forge->createTable('example_1', true);
    }

    public function down()
    {
        $this->forge->dropTable('example_1', true);
    }
}
