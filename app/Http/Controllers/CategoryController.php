<?php


namespace App\Http\Controllers;


use App\Models\Category;

class CategoryController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Category::all();
        return view('backend.category.index',[
            'data'=>$data,
            'title'=>'All Categories',
            'meta_desc'=>'This is meta description for all categories'
        ]);
    }
}
