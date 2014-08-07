<?php
class AlbumModel extends RelationModel
{
    protected    $_link = array
	(
		'images'=>array//images为映射的字段名
		(
			'class_name'=>'Album_file',//模型名(表名)
			'mapping_type'=>HAS_MANY,
			'foreign_key'=>'album_id',
		),
	);
}