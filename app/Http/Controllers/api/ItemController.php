<?php

namespace App\Http\Controllers\api;

use App\Models\Item;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\itemResource;
use App\Http\Resources\itemCollection;

class ItemController extends Controller
{

    public function index()
    {
        return new itemCollection(item::paginate(2));
    }


    public function create()
    {
        //
    }


    public function store(StoreItemRequest $request)
    {
        //
    }


    public function show(Item $item)
    {
        return new itemResource($item);
    }


    public function edit(Item $item)
    {
        //
    }


    public function update(UpdateItemRequest $request, Item $item)
    {
        //
    }


    public function destroy(Item $item)
    {
        //
    }
}
