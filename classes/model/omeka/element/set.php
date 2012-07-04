<?php
class Model_Omeka_Element_Set extends Model_Omeka
{
	protected $_has_many = array(
		'elements' => array(
			'model' => 'omeka_element',
		),
	);
	
	protected $_belongs_to = array(
		'mime' => array(
			'model' => 'omeka_mime_elment_set_lookup',
		),
	);
}