<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Item;
use App\Stock;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $items = Item::all();
        if (isset($items) && count($items)) {
            $data['meta']['status'] = 1;
            $data['meta']['message'] = "Inventory items fetched successfully";
            $data['data'] = $items;
            return response($data, 200);
        } else {
            $data['meta']['status'] = 0;
            $data['meta']['message'] = "No Inventory items found.";
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
            'category_id' => 'required|numeric',
            'name' => 'required',
            'unit_id' => 'required|numeric',
        ]);
        if ($v->fails()) {
            $data['meta']['status'] = 0;
            $data['meta']['message'] = "Failed adding Inventory item. Required fields are missing.";
            $data['data'] = $v->errors();
            return response($data, 400);
        } else {
            $item = new Item;
            $item->category_id = $request->category_id;
            $item->name = $request->name;
            $item->unit_id = $request->unit_id;
            $item->perishable = $request->perishable;
            if ($item->save()) {
                $data['meta']['status'] = 1;
                $data['meta']['message'] = "Inventory item created successfully";
                return response($data, 200);
            }
            $data['meta']['status'] = 0;
            $data['meta']['message'] = "Failed creating Inventory item";
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

    /**
     * Display a listing of the resource, based on camp.
     *
     * @return \Illuminate\Http\Response
     */
    public function stock(Request $request, $id, $camp_id)
    {
        $item = Item::find($id);
        if($item) {
            $stock = $item->getStock($camp_id);
            if ($stock) {
                $data['meta']['status'] = 1;
                $data['meta']['message'] = "Stock status for camp fetched successfully";
                $data['data'] = $stock;
                return response($data, 200);
            }
            $data['meta']['status'] = 0;
            $data['meta']['message'] = "No stock found in camp.";
            return response($data, 404);
        }
        $data['meta']['status'] = 0;
        $data['meta']['message'] = "No item found.";
        return response($data, 404);
    }

    /**
     * Update item stock for a camp.
     *
     * @return \Illuminate\Http\Response
     */
    public function stockUpdate(Request $request, $id, $camp_id)
    {
        $v = Validator::make($request->all(), [
            'availability' => 'numeric|required_without_all:requirement',
            'requirement' => 'numeric|required_without_all:availability',
        ]);
        if ($v->fails()) {
            $data['meta']['status'] = 0;
            $data['meta']['message'] = "Failed updating Inventory item stock. Required fields are missing.";
            $data['data'] = $v->errors();
            return response($data, 400);
        } else {
            $item = Item::find($id);
            if ($item->updateStock($camp_id, $request->availability, $request->requirement)) {
                $data['meta']['status'] = 1;
                $data['meta']['message'] = "Stock status for camp updated successfully";
                return response($data, 200);
            }
            $data['meta']['status'] = 0;
            $data['meta']['message'] = "Failed updating stock status for camp";
            return response($data, 400);
        }
    }
}
