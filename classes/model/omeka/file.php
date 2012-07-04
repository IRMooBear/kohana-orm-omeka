<?php
class Model_Omeka_File extends Model_Omeka
{
	protected $_belongs_to = array(
		'item' => array(
			'model' => 'omeka_item',
		),
	);
}