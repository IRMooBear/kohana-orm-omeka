<?php
class Model_Omeka_Entity extends Model_Omeka
{
	protected $_has_many = array(
		'users' => array(
			'model' => 'omeka_user',
		),
		'tags' => array(
			'model' => 'omeka_tag',
		),
		'relations' => array(
			'model' => 'omeka_entities_relation',
		),
	);
}