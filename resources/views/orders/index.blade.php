@extends('app')
@section('title', 'Orders')
@section('body')
    <div class="body">
        <h1 class="mt-10 text-center text-4xl">Orders</h1>
        <div class="grid grid-cols-3 gap-10 m-10">
            @foreach ($orders as $order)
                <div class="bg-blue-300 rounded-lg">
                    @php($total = 0)
                    <div class="grid grid-cols-1 bg-blue-400 rounded-lg p-5 m-5">
                        <div class="text-2xl text-center m-1">{{ $order->name }}</div>
                        <div class="text-lg">Status : {{ $order->status }}</div>
                        <div class="text-lg">Address : {{ $order->address }}</div>
                    </div>
                    <div class="grid grid-cols-5 gap-4 text-center bg-blue-400 rounded-lg p-5 m-5">
                        <div class="font-bold">Name</div>
                        <div class="font-bold">Category</div>
                        <div class="font-bold">Price</div>
                        <div class="font-bold">Quantity</div>
                        <div class="font-bold">Total</div>
                        <hr class="col-span-5">
                        @foreach ($order->items as $item)
                            <div>{{ $item->name }}</div>
                            <div>{{ $item->category }}</div>
                            <div>{{ $item->price }}</div>
                            <div>{{ $item->pivot->quantity }}</div>
                            <div>{{ $item->price * $item->pivot->quantity }}
                                @php($total += $item->price * $item->pivot->quantity)</div>
                        @endforeach
                        <hr class="col-span-5">
                        <div class="col-span-1 font-bold">Order Total</div>
                        <div class="col-span-3"></div>
                        <div class="col-span-1">{{ $total }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
