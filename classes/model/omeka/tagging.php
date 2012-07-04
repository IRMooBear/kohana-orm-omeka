<?php
class Model_Omeka_Tagging extends Model_Omeka
{
	protected $_belongs_to = array(
		'relation' => array(
			'model' => 'omeka_entities_relation',
		),
		'entity' => array(
			'model' => 'omeka_entity',
		),
		'tag' => array(
			'model' => 'omeka_tag',
		),
	);
}