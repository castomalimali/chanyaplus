<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class FormHandleController extends Controller
{
public function indexOrder(){
    return view('forms.order');
}
public function storeOrder(Request $request ){
    $request->validate([
        'name' => 'required',
        'email' => 'required',

        'message' => 'required',
    ]);

    $order= new Order();
    $order->name = $request->input('name');
    $order->email = $request->email;
    $order->phone = $request->phone;
    $order->address = $request->address;
    $order->message = $request->message;
    $order->save();

    return redirect()->back();

}
}
