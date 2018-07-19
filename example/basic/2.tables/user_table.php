<?php
$user_table = array(
	'tblname' => 'user',
	'columns' => array(
		array(
			'name'          => 'id',
			'type'          => 'int',
			'primary'       => true,
			'unique'        => true,
			'autoincrement' => true,
			'notnull'       => true
		),
		array(
			'name'    => 'userlevel',
			'type'    => 'int',
			'length'  => 1,
			'default' => '2'
		),
		array(
			'name'    => 'username',
			'type'    => 'varchar',
			'length'  => 45,
			'unique'  => true,
			'notnull' => true
		),
		array(
			'name'    => 'password',
			'type'    => 'varchar',
			'length'  => 20,
			'notnull' => true
		),
		array(
			'name'   => 'firstname',
			'type'   => 'varchar',
			'length' => 45
		),
		array(
			'name'   => 'midname',
			'type'   => 'varchar',
			'length' => 1,
		),
		array(
			'name'   => 'lastname',
			'type'   => 'varchar',
			'length' => 45
		),
		array(
			'name'   => 'age',
			'type'   => 'int',
			'length' => 2
		),
		array(
			'name' => 'email',
			'type' => 'varchar'
		),
		array(
			'name'   => 'gender',
			'type'   => 'varchar',
			'length' => 6
		)
	)
);