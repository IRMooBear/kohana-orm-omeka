<?php
class Model_Omeka_Record_Type extends Model_Omeka
{
	protected $_has_many = array(
		'elements' => array(
			'model' => 'omeka_element',
		),
		'element_texts' => array(
			'model' => 'omeka_element_text',
		)
	);
}