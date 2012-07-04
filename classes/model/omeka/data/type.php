<?php
class Model_Omeka_Data_Type extends Model_Omeka
{
	protected $_has_many = array(
		'elements' => array(
			'model' => 'omeka_element',
		),
	);
}