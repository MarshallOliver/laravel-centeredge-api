<?php

namespace MarshallOliver\LaravelCenterEdgeAPI;

use MarshallOliver\LaravelCenterEdgeAPI\ApiModel;

class Category extends ApiModel
{
    protected $table = 'Categories';
	protected $primaryKey = 'CatID';
    public $incrementing = false;
	protected $keyType = 'string';
    public $timestamps = false;

    const fieldMap = [
        'table' => 'Categories',
        'fields' => [
			'category_number' => 'CatNo',
			'description' => 'Description',
			'enabled' => 'EnableCategory',
			'category_id' => 'CatID'
        ],
    
	];
	
}