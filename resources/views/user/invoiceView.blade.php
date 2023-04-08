<!DOCTYPE html>
<html>
<head>
    <title>Larave Generate Invoice PDF - Nicesnippest.com</title>
</head>
<style type="text/css">
    body{
        font-family: 'Roboto Condensed', sans-serif;
    }
    .m-0{
        margin: 0px;
    }
    .p-0{
        padding: 0px;
    }
    .pt-5{
        padding-top:5px;
    }
    .mt-10{
        margin-top:10px;
    }
    .text-center{
        text-align:center !important;
    }
    .w-100{
        width: 100%;
    }
    .w-50{
        width:50%;
    }
    .w-85{
        width:85%;
    }
    .w-15{
        width:15%;
    }
    .logo img{
        width:180px;
        /* height:45px; */
        padding-top:30px;
        position: absolute;
        right: 350px;
    }
    .logo span{
        margin-left:8px;
        top:19px;
        position: absolute;
        font-weight: bold;
        font-size:25px;
    }
    .gray-color{
        color:#5D5D5D;
    }
    .text-bold{
        font-weight: bold;
    }
    .border{
        border:1px solid black;
    }
    table tr,th,td{
        border: 1px solid #d2d2d2;
        border-collapse:collapse;
        padding:7px 8px;
    }
    table tr th{
        background: #F4F4F4;
        font-size:15px;
    }
    table tr td{
        font-size:13px;
    }
    table{
        border-collapse:collapse;
    }
    .box-text p{
        line-height:10px;
    }
    .float-left{
        float:left;
    }
    .total-part{
        font-size:16px;
        line-height:12px;
    }
    .total-right p{
        padding-right:20px;
    }
    .newImg img{
        opacity: 0.06;
        width: 600px;
        position: absolute;
        left: 80px;
        top: 300px;
        transform: rotate(35deg);
        z-index: 1;
    }
    .newImg p{
        opacity: 0.06;
        font-size: 70px;
        font-weight: bold;
        position: absolute;
        left: 80px;
        top: 300px;
        transform: rotate(35deg);
        z-index: 1;
    }
    .status div{
        position: relative;
    }
    /* .status div .circle{
        position: absolute;
        left: 32%;
        width: 80px;
        height: 80px;
        border: 5px solid;
        border-radius: 50%;
    } */
    .status div .name{
        font-size: 25px;
        font-weight: bold;
        bottom: 50px;
        left: 20%;
        border: 3px dotted;
        width: 200px;
        padding: 10px;
        /* transform: rotate(-30deg); */
    }
    .status div .circle.pending{
        border-color: #d9c727
    }
    .status div .name.pending{
        color: #d9c727
    }
    .status div .circle.deliver{
        border-color: #27d980
    }
    .status div .name.deliver{
        color: #27d980
    }
    .status div .circle.return{
        border-color: red
    }
    .status div .name.return{
        color: red
    }
    .status div .circle.shipped{
        border-color: #23a6d6
    }
    .status div .name.shipped{
        color: #23a6d6
    }
</style>
<body>
    <div class="newImg">
        {{-- <img src="https://api.bluescrow.com/upload/assets/bluescrow-logo-dark.jpg"> --}}
        <p>TONOTE-STORE</p>
    </div>
    <div class="head-title">
        <h1 class="text-center m-0 p-0">Invoice</h1>
    </div>
    <div class="add-detail mt-10">
        <div class="w-50 float-left mt-10">
            <p class="m-0 pt-5 text-bold w-100">Invoice Id - <span class="gray-color">#{{ $order->id }}</span></p>
            <p class="m-0 pt-5 text-bold w-100">Order Number - <span class="gray-color">{{ $order->order_number }}</span></p>
            <p class="m-0 pt-5 text-bold w-100">Order Date - <span class="gray-color">{{ date('M d, Y', strtotime($order->created_at)) }}</span></p>
        </div>
        <div style="clear: both;"></div>
    </div>
    <div class="table-section bill-tbl w-100 mt-10">
        <table class="table w-100 mt-10">
            <tr>
                <th class="w-50">From</th>
                <th class="w-50">To</th>
            </tr>
            <tr>
                <td>
                    <div class="box-text">
                        <p>Name: ToNote Store</p>
                        <p>Email: info@tonote.com</p>
                        <p>Phone: 08163994569</p>
                    </div>
                </td>
                <td>
                    <div class="box-text">
                        <p>Name: {{ ucwords($order->first_name) }} {{ ucwords($order->last_name) }}</p>
                        <p>Email: {{ $order->email }}</p>
                        <p>Phone: {{ $order->phone }}</p>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="table-section bill-tbl w-100 mt-10">
        <table class="table w-100 mt-10">
            <tr>
                <th class="w-50">Payment Method</th>
                <th class="w-50">Delivery Address</th>
            </tr>
            <tr>
                <td>
                    @if (strtolower($order->payment_method) == 'card')
                    Online Payment
                    @else
                    Pay on Delivery
                    @endif
                </td>
                <td>{{ $order->address }}, {{ $order->city }}, {{ $order->bus_stop }}, {{ $order->state }}, {{ $order->country }}</td>
            </tr>
        </table>
    </div>
    <div class="table-section bill-tbl w-100 mt-10">
        <table class="table w-100 mt-10">
            <tr>
                <th class="w-85">Product</th>
                <th class="w-15">Qty</th>
                <th class="w-50">Price</th>
                <th class="w-50">Sub Total</th>
            </tr>
            @foreach ($catInfos as $item)
            <tr align="center">
                <td>{{ $item->product_name }}</td>
                <td>{{ $item->qty }}</td>
                <td>NGN{{ number_format($item->sales_price) }}</td>
                <td>NGN{{ number_format($item->sub_total)  }}</td>
            </tr>
            @endforeach

            <tr align="center">
                <td colspan="2" rowspan="4" class="status">
                    @if ($order->status == 'Pending')
                    <div>
                        <p class="circle pending"></p>
                        <p class="name pending">PENDING</p>
                    </div>
                    @elseif ($order->status == 'Shipped')
                    <div>
                        <p class="circle shipped"></p>
                        <p class="name shipped">SHIPPED</p>
                    </div>
                    @elseif ($order->status == 'Delivered')
                    <div>
                        <p class="circle deliver"></p>
                        <p class="name deliver">DELIVERED</p>
                    </div>
                    @elseif ($order->status == 'Cancelled')
                    <div>
                        <p class="circle cancel"></p>
                        <p class="name cancel">CANCELLED</p>
                    </div>
                    @elseif ($order->status == 'Returned')
                    <div>
                        <p class="circle return"></p>
                        <p class="name return">RETURNED</p>
                    </div>
                    @endif
                </td>
                <td style="padding: 15px 0px"></td>
                <td  style="padding: 15px 0px"></td>
                {{-- <td colspan="4">
                    <div class="total-part">
                        <div class="total-left w-85 float-left" align="right">
                            <p style="padding-right: 20px">Total</p>
                            <p style="padding-right: 20px">Shipping Fee</p>
                            <p style="padding-right: 20px">Total Payable</p>
                        </div>
                        <div class="total-right w-15 float-left text-bold" align="right">
                            <p>N{{ number_format($order->total) }}</p>
                            <p>N{{  number_format($order->shipping_fee)  }}</p>
                            <p>N{{ number_format($order->total + $order->shipping_fee)  }}</p>
                        </div>
                        <div style="clear: both;"></div>
                    </div>
                </td> --}}
            </tr>
            <tr align="center">
                <td colspan="1">
                    <b style="font-size: 14px">Total</b>
                </td>
                <td>
                    <b  style="font-size: 14px">NGN{{ number_format($order->total) }}</b>
                </td>
            </tr>
            <tr align="center">
                <td colspan="1">
                    <b style="font-size: 14px">Shipping Fee</b>
                </td>
                <td>
                    <b style="font-size: 14px">NGN0.00</b>
                </td>
            </tr>
            <tr align="center">
                <th colspan="1">
                    Total Payable
                </th>
                <th>
                    NGN{{ number_format($order->total)  }}
                </th>
            </tr>
        </table>
    </div>
</html>
