<?php

namespace App\Models;

use App\Models\Interfaces\Copyable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model implements Copyable
{
    use HasFactory;

    public function copy() {
        $order = new Order();
        $order->customer_name = $this->customer_name;
        $order->products = $this->products;
        $order->save();

        return $order;
    }

    public function __clone () {
        return $this->copy();
    }
}
