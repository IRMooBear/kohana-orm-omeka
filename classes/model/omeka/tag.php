<?php
class Model_Omeka_Tag extends Model_Omeka
{
	protected $_has_many = array(
		'entities' => array(
			'model' => 'omeka_entity',
		),
	);
}