<?php
namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;

class CreateBeritaTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'      => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'judul'   => ['type' => 'VARCHAR', 'constraint' => 200],
            'isi'     => ['type' => 'TEXT'],
            'tanggal' => ['type' => 'DATE'],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('berita');
    }

    public function down()
    {
        $this->forge->dropTable('berita');
    }
} 