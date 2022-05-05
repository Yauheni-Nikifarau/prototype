<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    /**
     * @return array
     */
    public function definition()
    {
        $orderProducts = json_encode([
            '1' => $this->faker->numberBetween(0,5),
            '2' => $this->faker->numberBetween(0,5),
            '3' => $this->faker->numberBetween(0,5),
        ]);

        return [
            'customer_name' => $this->faker->firstName(),
            'products' => $orderProducts,
        ];
    }
}
