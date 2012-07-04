<?php
class Model_Omeka_Item_Type extends Model_Omeka
{
	protected $_has_many = array(
		'items' => array(
			'model' => 'omeka_item',
		),
		'elements' => array(
			'model' => 'omeka_element',
			'through' => 'item_types_elements',
			'foreign_key' => 'item_type_id',
			'far_key' => 'element_id',
		)
	);
}