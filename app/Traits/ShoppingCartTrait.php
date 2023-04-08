<?php

namespace App\Traits;

use App\Models\ShoppingCart;

trait ShoppingCartTrait
{


    public static function getCart($userID, $pid)
    {
        return ShoppingCart::where([
            ['user_id', $userID], ['product_id', $pid]
        ])->first();
    }


    public static function createCart($userID, $pid)
    {
        return ShoppingCart::create([
            'user_id'       => $userID,
            'product_id'    => $pid,
            'qty'           => 1
        ]);
    }

    public static function updateCart($userID, $pid, $qty)
    {
        return ShoppingCart::where([
            ['user_id', $userID], ['product_id', $pid]
        ])->update([
            'qty'           => $qty + 1
        ]);
    }


    public static function removeCart($userID, $pid, $qty)
    {
        return ShoppingCart::where([
            ['user_id', $userID], ['product_id', $pid]
        ])->update([
            'qty'           => $qty - 1
        ]);
    }


}
