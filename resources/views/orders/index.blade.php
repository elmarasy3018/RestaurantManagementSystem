@extends('app')
@section('title', 'Orders')
@section('body')
<div class="body">
    <h1 class="mt-10 text-center text-4xl">Orders</h1>
    <div class="m-20 overflow-x-auto shadow-md sm:rounded-lg">
        <div class="grid grid-cols-4 gap-4">
            @foreach ($orders as $order)
            <div>
                <table class="w-full text-sm text-left rtl:text-right text-blue-100 dark:text-blue-100">
                    <thead class="text-xs text-white uppercase bg-blue-600 dark:text-white">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Order ID
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Order Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Order Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Order Address
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-blue-500 border-b border-blue-400">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-blue-50 whitespace-nowrap dark:text-blue-100">
                                {{ $order->id }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $order->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $order->status }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $order->address }}
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="w-full text-sm text-left rtl:text-right text-blue-100 dark:text-blue-100">
                    <thead class="text-xs text-white uppercase bg-blue-600 dark:text-white">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Item ID
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Item Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Item Description
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Item Category
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Item Price
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order->items as $item)
                        <tr class="bg-blue-500 border-b border-blue-400">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-blue-50 whitespace-nowrap dark:text-blue-100">
                                {{ $item->id }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $item->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->description }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->category }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->price }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <br><br>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection