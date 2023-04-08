<?php

namespace App\Traits;

use App\Models\Order;
use App\Models\ShoppingCart;

trait OrderTrait
{


    public static function getAllOrder($userID)
    {
        return Order::where('user_id', $userID)->orderBy('id', 'DESC')->paginate(10);
    }


    public static function selectCheckout($userID){
        $results = ShoppingCart::selectRaw("shopping_carts.*,
            products.name AS product_name,
            products.old_price,
            products.sales_price,
            products.images,
            products.quantity,
            products.sold
        ")->where('shopping_carts.user_id', $userID)
        ->leftJoin('products', 'products.id', '=', 'shopping_carts.product_id')->get();

        $filteredResults = array();
        $total = 0;

        foreach ($results as $result) {
            if($result->qty > ($result->quantity - $result->sold)){
                return array(
                    'resp' => 'error',
                    'proName' => $result->product_name,
                    'avail' => $result->quantity - $result->sold
                );
                break;
            }
            $total+= $result->sales_price * $result->qty;
            $result['sub_total'] = $result->sales_price * $result->qty;
            array_push($filteredResults, $result);
        }

        return array(
            'items' => $filteredResults,
            'sum' => $total,
            'resp' => '',
        );
    }


    public function createOrderTrait($data)
    {
        return Order::create([
            'user_id'           => $data['user_id'],
            'order_number'      => $data['orderNumber'],
            'first_name'         => $data['first_name'],
            'last_name'         => $data['last_name'],
            'email'         => $data['email'],
            'phone'         => $data['phone'],
            'address'         => $data['address'],
            'bus_stop'         => $data['bus_stop'],
            'city'         => $data['city'],
            'state'         => $data['state'],
            'country'         => $data['country'],
            'payment_method'         => $data['payment_method'],
            'total'             => $data['checkoutTotal'],
            'product_json'      => json_encode($data['checkoutItem']),
        ]);
    }


    public function userSIngleOrder($userID, $orderNum)
    {
        return Order::where([
            ['user_id', $userID], ['order_number', $orderNum]
        ])->first();
    }




}
