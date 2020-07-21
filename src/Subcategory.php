<?php

namespace MarshallOliver\LaravelCenterEdgeAPI;

use MarshallOliver\LaravelCenterEdgeAPI\ApiModel;

class Subcategory extends ApiModel
{
    protected $table = 'SubCategories';
	protected $primaryKey = 'SubCatID';
    public $incrementing = false;
	protected $keyType = 'string';
    public $timestamps = false;

    const fieldMap = [
        'table' => 'SubCategories',
        'fields' => [
            'category_number' => 'CatNo',
            'subcategory_number' => 'SubCatNo',
			'description' => 'Description',
            'enabled' => 'EnableSubCategory',
            'is_for_sales' => 'ForSales',
            'revenue_center' => 'RevCenterNo',
            'subcategory_id' => 'SubCatID',
            'has_service_charge', => 'ServiceChargesApply',
            'receives_remote_sales', => 'ReceiveRemoteSales'
        ],
    
	];
	
}