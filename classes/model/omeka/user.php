<?php
class Model_Omeka_User extends Model_Omeka
{
	protected $_has_many = array(
		'activations' => array(
			'model' => 'omeka_users_activation',
		),
		'processes' => array(
			'model' => 'omeka_process',
		),
		'collections' => array(
			'model' => 'omeka_collection',
			'foreign_key' => 'owner_id',
		),
	);
	
	protected $_belongs_to = array(
		'entity' => array(
			'model' => 'omeka_entity',
		),
	);
}