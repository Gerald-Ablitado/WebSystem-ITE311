<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateQuizzesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'            => ['type' => 'INT', 'auto_increment' => true, 'unsigned' => true],
            'lesson_id'     => ['type' => 'INT', 'unsigned' => true],
            'question'      => ['type' => 'TEXT'],
            'option_a'      => ['type' => 'VARCHAR', 'constraint' => 255],
            'option_b'      => ['type' => 'VARCHAR', 'constraint' => 255],
            'option_c'      => ['type' => 'VARCHAR', 'constraint' => 255],
            'option_d'      => ['type' => 'VARCHAR', 'constraint' => 255],
            'correct_option'=> ['type' => 'ENUM', 'constraint' => ['a', 'b', 'c', 'd']],
            'created_at'    => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('lesson_id', 'lessons', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('quizzes');
    }

    public function down()
    {
        $this->forge->dropTable('quizzes');
    }
}