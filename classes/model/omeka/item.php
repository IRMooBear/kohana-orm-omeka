<?php
class Model_Omeka_Item extends Model_Omeka
{
	protected $_has_many = array(
		'files' => array(
			'model' => 'omeka_file',
		),
	);
	
	protected $_belongs_to = array(
		'collection' => array(
			'model' => 'omeka_collection',
		),
		'item_type' => array(
			'model' => 'omeka_item_type',
		),
	);
}