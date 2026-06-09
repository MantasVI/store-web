<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Iphone;
use App\Models\Macbook;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function cart()
    {
        $cart = session()->get('cart',[]);
        $items = [];
        foreach($cart as $cartItem)
        {
            if($cartItem['type'] === 'iphone')
            {
                $product = Iphone::getId($cartItem['id']);
            }
            else
            {
                $product = Macbook::getId($cartItem['id']);
            }

            $items[] = [
                'product' => $product,
                'quantity' => $cartItem['quantity'],
                'total' => $product->price * $cartItem['quantity'],
                'type' => $cartItem['type'],
                'key' =>$cartItem['type'] . '_' . $cartItem['id'],
            ];
            
        }
         $pvm = (array_sum(array_column($items,'total')) * 79)/100;
            $grandtotal = array_sum(array_column($items,'total'));
        return view('cart',['items' => $items, 'grandtotal' => $grandtotal,'pvm'=> $pvm]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function add(Request $request,$type,$id)
    {
        $cart = session()->get('cart',[]);

        $cart[$type . '_' . $id] = [
            'id' => $id,
            'type' => $type,
            'quantity' => $request->kiekis,
            
        ];
         
        session()->put('cart',$cart);
        
       return redirect('/cart');
    }

    public function remove($id)
    {
        $cart = session()->get('cart',[]);
        unset($cart[$id]);
        session()->put('cart',$cart);
        return redirect('/cart');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function edit($id)
    {
          $cart = session()->get('cart',[]);
          $cartItem = $cart[$id]; 
          if($cartItem['type'] === 'iphone')
            {
                $product = Iphone::getId($cartItem['id']);
            }
            else
            {
                $product = Macbook::getId($cartItem['id']);
            }
             return view('edit',['product' => $product, 'key' => $id , 'quantity' => $cartItem['quantity'] ]);
    }
    public function checkout()
    {

    $cart = session('cart', []);

    if (empty($cart)) {
        return redirect('/cart');
    }

    if(auth()->check())
    {
       
         $total = 0;
        $order = Order::create([
        'user_id' => auth()->id(),
        'total'   => $total,
        'status'  => 'pending',
        ]);
       
        foreach ($cart as $key => $item) {
        // your cart key is like 'iphone_2' or 'mac_3'
            [$type, $id] = explode('_', $key);
            $product = $type === 'iphone' ? Iphone::getId($id) : Macbook::getId($id);    

            $total += $item['quantity'] * $product->price;

            OrderItem::create([
                'order_id'   => $order->id,
                'type'       => $type,
                'product_id' => $id,
                'name' => $product->name,
                'kiekis'     => $item['quantity'],
                'price'      => $product->price,
            ]);
    }
        $order->update(['total' => $total]);
    }
    

    session()->forget('cart');

    return view('thankyou');


    }
   
    public function update(Request $request,  $id)
    {  
        $request->validate(['kiekis' => 'integer']);
            
         
            $cart = session()->get('cart',[]);
            if(!isset($cart[$id]))
                {
                     return redirect('cart');
                }
            $cart[$id]['quantity'] =  $request->kiekis;
            
             session()->put('cart',$cart);

            return redirect('/cart');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function orders()
    {
        $orders = Order::getOrders();
        return view('orders',['orders' => $orders]);
    }
}
