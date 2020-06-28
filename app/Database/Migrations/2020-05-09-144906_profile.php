<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Profile extends Migration
{
	public function up()
	{
		//membuat field table database
		$this->forge->addField([
			'profile_id' 			=> [
				'type'				=> 'BIGINT',
				'constraint'		=> 20,
				'unsigned'			=> TRUE,
				'auto_increment'	=> TRUE
			],
			'fullname' 		=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> '100',
			],
			'name' 		=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> '100',
			],
			'timestamps'          => [
				'type'              => 'DATE',
                'null'              => TRUE,
            ],
			'asal' 		=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> '100',
			],
			'hobi' 		=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> '100',
			],
			'kuliah_name' 		=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> '100',
			],
			'prody' 		=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> '100',
			],
			'profile_image'         => [
                'type'              => 'VARCHAR',
                'constraint'        => '100',
                'null'              => TRUE,
            ],
			'profile_description' 		=> [
				'type'				=> 'TEXT',
				'constraint'		=> '100',
			],
		]);
		$this->forge->addKey('profile_id', TRUE);
		$this->forge->createTable('profile');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
