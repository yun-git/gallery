<?php
class Album_fileModel extends RelationModel
{
    protected $_link = array
	(
		'image'=>array
		(
			'class_name'=>'file',
			'mapping_type'=>HAS_ONE,
			'foreign_key'=>'id',
			'mapping_fields'=>'id,url',
			'as_fields'=>'url:url'
		),
	);
}