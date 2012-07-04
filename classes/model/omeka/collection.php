<?php
class Model_Omeka_Collection extends Model_Omeka
{
	protected $_belongs_to = array(
		'user' => array(
			'model' => 'omeka_user',
		),
	);
	
	protected $_has_many = array(
		'items' => array(
			'model' => 'omeka_item',
		)
	);
}