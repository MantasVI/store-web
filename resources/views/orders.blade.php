<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=account_circle,shopping_bag" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Orders</title>
</head>
<body class='italic text-white font-bold relative'>
    <header class='flex justify-between items-center bg-[#292323] p-5'> 
        <div class='text-xl'>
            <a class='hover:text-blue-400 transition-transform duration-300' href='/home'>icon</a>
        </div>
        <div class=''>
            <a class='mr-5 hover:text-blue-400 transition-transform duration-300' href='/mac'>mac</a>
            <a class='ml-5 hover:text-blue-400 transition-transform duration-300' href='/iphone'>iphone</a>
        </div>
        <div class=''>
            @guest
            <a class='mr-5 hover:text-blue-400 transition-transform duration-300' href='/login'>login</a>
            @endguest
            @auth
            <a href='/orders'><span class="material-symbols-outlined mr-5 hover:text-blue-400 transition-transform duration-300">account_circle</span></a>
            @endauth
            <a class='ml-5 hover:text-blue-400 transition-transform duration-300' href='/cart'><span class="material-symbols-outlined">shopping_bag</span></a>
        </div>
    </header>

    <div class="flex flex-col border items-center justify-center ">
       <div class='flex flex-col p-5 relative rounded-sm gap-10 mt-20 text-2xl text-black mb-40 w-full px-10 items-center'>
             <a href="/mac" class=" absolute -top-15 right-10 transition-colors cursor-pointer duration-300 hover:text-white hover:bg-black rounded-sm w-fit p-5 border ">Continue Shopping</a>
            @if(count($orders) > 0)
                @foreach($orders as $order)
                    <div class="flex gap-5 w-full items-start">
                        <table  class="h-fit  w-full">
                            <tr class="border bg-gray-100">
                                <th class="p-2">Product Name</th>
                                <th class="p-2">Quantity</th>
                                <th class="p-2">Price per item</th>
                                <th class="p-2">Sum</th>
                            </tr>
                            <tbody>
                                @foreach($order->items as $item)
                                <tr>
                                    <td class="p-5 text-center">{{ $item->name }}</td>
                                    <td class="p-5 text-center">{{ $item->kiekis }}</td>
                                    <td class="p-5 text-center">{{ $item->price }}€</td>
                                    <td class="p-5 text-center">{{ $item->price * $item->kiekis }}€</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                        <div class="flex flex-col border rounded-sm p-20 h-fit shadow-lg">
                            <p class="text-xl font-bold mb-5">Order #{{ $order->id }}</p>
                            <div class="flex justify-between mt-5 mb-5">
                                <p>Total:</p>
                                <p>{{ $order->total }}€</p>
                            </div>
                            <div class="flex justify-between mt-5 mb-5">
                                <p class='mr-5'>Status:</p>
                                <p>{{ $order->status }}</p>
                            </div>
                            <div class="flex justify-between mt-5 mb-5">
                                <p class='mr-5'>Date:</p>
                                <p>{{ $order->created_at->format('Y-m-d') }}</p>
                                
                            </div>

                        </div>
                        
                    </div>
                @endforeach
            @else
                <table class="h-fit">
                    <tr class="border bg-gray-100">
                        <th class="p-5">Product Name</th>
                        <th class="p-5">Quantity</th>
                        <th class="p-5">Price per item</th>
                        <th class="p-5">Sum</th>
                    </tr>
                </table>
                  <a href="/mac" class="transition-colors cursor-pointer duration-300 hover:text-white hover:bg-black rounded-sm w-fit p-5 border ">Continue Shopping</a>
            @endif
        </div>
    </div>
</body>
</html>