<?php

namespace App\Http\Controllers\Api\Category;

use App\Category;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryProductController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @param Category $category
     * @return \Illuminate\Http\Response
     */
    public function index(Category $category)
    {
        $products = $category->products;

        return $this->showAll($products, 200);
    }
}
