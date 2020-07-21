<?php

namespace MarshallOliver\LaravelCenterEdgeAPI\Controllers;

use MarshallOliver\LaravelCenterEdgeAPI\Category;
use MarshallOliver\LaravelCenterEdgeAPI\CategoryCollection;
use MarshallOliver\LaravelCenterEdgeAPI\Resources\Category as CategoryResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

	public function __construct()
	{
		$this->middleware('laravel-centeredge-api.construct.filters');
	}
	
    public function categories($database, Request $request)
    {

        return new CategoryCollection(Category::on($database)->get());
    
    }
}
