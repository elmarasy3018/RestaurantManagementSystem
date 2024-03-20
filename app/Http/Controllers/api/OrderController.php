<?php

namespace App\Http\Controllers\api;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\orderResource;
use App\Http\Resources\orderCollection;

class OrderController extends Controller
{

    public function index()
    {
        return new orderCollection(order::with('items')->paginate(5));
    }


    public function create()
    {
        //
    }


    public function store(StoreOrderRequest $request)
    {
        //
    }


    public function show(Order $order)
    {
        return new orderResource($order);
    }


    public function edit(Order $order)
    {
        //
    }


    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }


    public function destroy(Order $order)
    {
        //
    }
}
