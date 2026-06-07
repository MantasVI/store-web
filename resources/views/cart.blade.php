<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=account_circle,shopping_bag" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>CART</title>
</head>
<body class='italic text-white font-bold relative'>
    <header class='flex justify-between items-center bg-[#292323] p-5'> 
        <div class='text-xl'>
            <a class='hover:text-blue-400 transition-transform duration-300' href='/#'>icon</a>
        </div>
        <div class=''>
            <a class='mr-5 hover:text-blue-400 transition-transform duration-300 ' href='/mac'>mac</a>
            <a class='ml-5 hover:text-blue-400 transition-transform duration-300' href='/iphone'>iphone</a>
        </div>
        <div class=''>
            @guest
            <a class='mr-5 hover:text-blue-400 transition-transform duration-300' href='/login'>login</a>
            @endguest
            @auth
              <span class="material-symbols-outlined  mr-5 hover:text-blue-400 transition-transform duration-300">account_circle</span>


            @endauth
            <a class='ml-5 hover:text-blue-400 transition-transform duration-300' href='#'><span class="material-symbols-outlined">shopping_bag</span></a>


        </div>
    </header>
   <div class="flex flex-col border  items-center justify-center ">
      <div class='flex  p-5 rounded-sm gap-5 mt-20 text-2xl text-black mb-40'>
        @if(count($items)>0)
        <table >
            <tr class="border bg-gray-100">
                <th class="p-2">Product Image</th>
                 <th class="p-2">Product Name</th>
                <th class="p-2">Singular Product Price</th>
                <th  class="p-2">Quantity</th>
                <th class="p-2">Sum</th>
                <th class="p-2"> Edit quantity</th>
                <th class="p-2">Remove item</th>
            </tr>
                <tbody class="  "> @foreach($items as $item)
                    <tr>
                       
                        <td class='p-10'><img class="p-5 w-[300px] h-[300px] block" src="{{asset($item['product']->image)}}"></td>
                        <td class="p-10 text-center">{{ $item['product']->name }}</td>
                        <td class="p-10 text-center">{{$item['product']->price}} €</td>
                        <td class="p-10 text-center">{{ $item['quantity'] }}</td>
                        <td class="p-10 text-center">{{ $item['total'] }} €</td>
                        <td class="p-10 text-center">
                            <a href="/cart/edit/{{$item['key']}}" class=' rounded-sm border pr-5 pl-5 pt-3 pb-3'>Edit</a>
                        </td>
                        <td class="p-10 text-center">
                            <form method='POST' action="/cart/delete/{{$item['key']}}">
                                @csrf
                                @method('DELETE')
                                <button type='submit' class=' rounded-sm border pr-5 pl-5 pt-3 pb-3'>Remove</button>
                            </form>
                        </td>
                    </tr>  @endforeach
                </tbody>
            
             
        </table>
        <div class="flex flex-col border rounded-sm p-10 h-fit">
            <div class="flex justify-between mt-5 mb-5">
                <p>Total: </p>
                <p>{{$grandtotal}} €</p>
            </div>
            <div class="flex justify-between mt-5 mb-5">
                <p class='mr-5'>Without Taxes: </p>
                <p>{{$pvm}} €</p>
            </div>
             <div  class="flex justify-center mt-20 ">
                <button class=" rounded-sm w-fit p-5 border ">Checkout</button>
            </div>
            
        </div>
        @else
       <table class=" h-fit">
            <tr class="border bg-gray-100">
                <th class="p-5 ">Product Image</th>
                 <th class="p-5">Product Name</th>
                <th class="p-5">Singular Product Price</th>
                <th  class="p-5">Quantity</th>
                <th class="p-5">Sum</th>
                <th class="p-5"> Edit quantity</th>
                <th class="p-5">Remove item</th>
            </tr>
        </table>
        @endif
        
   </div>
    

               
</body>
</html>