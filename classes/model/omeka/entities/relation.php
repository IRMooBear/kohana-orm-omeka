<?php
class Model_Omeka_Entities_Relation extends Model_Omeka
{
	protected $_belongs_to = array(
		'relationship' => array(
			'model' => 'omeka_entity_relationship',
		),
		'entity' => array(
			'model' => 'omeka_entity',
		),
		'relation' => array(
			'model' => 'omeka_entities_relation',
		),
	);
	
	
}