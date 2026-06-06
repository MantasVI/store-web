<?php

namespace App\Http\Controllers;

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

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(c $c)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(c $c)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, c $c)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(c $c)
    {
        //
    }
}
