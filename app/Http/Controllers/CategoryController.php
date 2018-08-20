<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories = Category::getAllCategoriesOrdered();
        if (isset($categories) && count($categories)) {
            $data['meta']['status'] = 1;
            $data['meta']['message'] = "Inventory categories fetched successfully";
            $data['data'] = $categories;
            return response($data, 200);
        } else {
            $data['meta']['status'] = 0;
            $data['meta']['message'] = "No Inventory categories found.";
            return response($data, 404);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $v = Validator::make($request->all(), [
            'parent_id' => 'numeric',
            'name' => 'required',
        ]);
        if ($v->fails()) {
            $data['meta']['status'] = 0;
            $data['meta']['message'] = "Failed adding Inventory category. Required fields are missing.";
            $data['data'] = $v->errors();
            return response($data, 400);
        } else {
            $category = new Category;
            $category->parent_id = $request->category_id;
            $category->name = $request->name;
            if ($category->save()) {
                $data['meta']['status'] = 1;
                $data['meta']['message'] = "Inventory category created successfully";
                return response($data, 200);
            }
            $data['meta']['status'] = 0;
            $data['meta']['message'] = "Failed creating Inventory category";
            return response($data, 400);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
