<?php
class Model_Omeka_Element extends Model_Omeka
{
	protected $_belongs_to = array(
		'record_type' => array(
			'model' => 'omeka_record_type'
		),
		'data_type' => array(
			'model' => 'omeka_data_type',
		),
		'element_set' => array(
			'model' => 'omeka_element_set',
		),
	);
}