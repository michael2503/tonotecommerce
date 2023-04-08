<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Order;
use App\Models\Product;
use App\Models\ShoppingCart;
use App\Traits\OrderTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\PDF;

class OrderController extends Controller
{

    use OrderTrait;

    public function checkout()
    {
        $carts = ShoppingCart::where('user_id', Auth::user()->id)->with('product')->get();
        if($carts){
            $total = 0;
            foreach ($carts as $value) {
                $total += $value['product']['sales_price'] * $value['qty'];
            }
            return view('user.checkout', [
                'total' => $total
            ]);
        }
        return view('guest.products');
    }


    public function createOrder(OrderRequest $request)
    {
        $data = $request->all();
        foreach ($data as $req) {
            $req = $request->old($req);
        }
        $userID = Auth::user()->id;
        $data['orderNumber'] = strtoupper($userID.Str::random(8));
        $selectCheckout = $this->selectCheckout($userID);

        if($selectCheckout['resp'] == 'error'){
            return redirect()->back()->with('error', $selectCheckout['proName'].' quantity can not be greater than '.$selectCheckout['avail']);
        }

        $data['checkoutItem'] = $selectCheckout['items'];
        $data['checkoutTotal'] = $selectCheckout['sum'];
        $data['user_id'] = $userID;
        $create = $this->createOrderTrait($data);

        if($create){
            ShoppingCart::where('user_id', $userID)->delete();
            foreach ($selectCheckout['items'] as $item) {
                $pro = Product::findorFail($item->product_id);
                Product::where('id', $item->product_id)->update([
                    'sold' => $pro->sold + $item->qty
                ]);
            }

            return redirect()->route('orders')->with('success', 'Order successfully created');
        }
    }



    public function index()
    {
        $orders = $this->getAllOrder(Auth::user()->id);
        return view("user.orders", [
            'orders' => $orders
        ]);
    }


    public function orderDetails($orderNumber)
    {
        return view('user.orders-details', [
            'order' => $this->userSIngleOrder(Auth::user()->id, $orderNumber)
        ]);
    }


    public function downloadInvoice($orderNumber){
        $order = Order::where('order_number', $orderNumber)->first();
        if($order){
            $catInfo = json_decode($order->product_json);
            $pdf = PDF::loadView('user/invoiceView', [
                'order' => $order,
                'catInfos' => $catInfo,
            ]);

            return $pdf->download(strtolower($order->order_number).'-'. Str::random(5) .'-invoice.pdf');
        }
    }


}
