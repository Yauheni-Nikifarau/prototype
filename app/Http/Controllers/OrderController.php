<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OrderController extends Controller {
    public function showOrdersPage() {
        return view( 'orders')->withOrders($this->ordersListResource( Order::all() ));
    }

    public function showEditPage(Order $order) {
        return view('edit-order')->withOrder($this->orderResource($order));
    }

    public function showCreatePage() {
        return view('create-order');
    }

    public function copyOrder(Order $order) {
//        $order->copy();
        clone $order;
        return redirect('/orders');
    }

    public function createOrder(Request $request) {
        $order = new Order();
        $order->customer_name = $request->input('customer_name');
        $order->products = json_encode([
            '1' => $request->input('product_1'),
            '2' => $request->input('product_2'),
            '3' => $request->input('product_3'),
        ]);
        $order->save();

        return redirect('/orders');
    }

    public function updateOrder(Order $order, Request $request) {
        $order->customer_name = $request->input('customer_name');
        $order->products = json_encode([
            '1' => $request->input('product_1'),
            '2' => $request->input('product_2'),
            '3' => $request->input('product_3'),
        ]);
        $order->save();

        return redirect('/orders');
    }

    private function ordersListResource ($list) {
        $resultCollection = [];

        foreach ($list as $order) {
            $resultCollection[] = $this->orderResource($order);
        }
        return $resultCollection;
    }

    private function orderResource( $order ) {
        $resultProductsArray = [];
        foreach (json_decode($order->products) as $id => $amount) {
            $resultProductsArray[$id] = [
                'name' => Product::find((int) $id)->name,
                'amount' => $amount
            ];
        }
        return [
            'id' => $order->id,
            'created' => Carbon::parse($order->created_at)->format('h:i d-m-Y'),
            'customer_name' => $order->customer_name,
            'products' => $resultProductsArray,
        ];
    }
}
