<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=account_circle,shopping_bag,shopping_cart" />
 
     @vite(['resources/css/app.css', 'resources/js/add.js'])
    <title>{{$iphone->name}}</title>
</head>
<body class='italic text-white font-bold relative'>
   <header class='flex justify-between items-center bg-[#292323] p-5'> 
        <div class='text-xl'>
            <a class='hover:text-blue-400 transition-transform duration-300' href='/home'>icon</a>
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
              <a href='/orders'> <span class="material-symbols-outlined mr-5 hover:text-blue-400 transition-transform duration-300">account_circle</span></a>


            @endauth
            <a class='ml-5 hover:text-blue-400 transition-transform duration-300' href='/cart'><span class="material-symbols-outlined">shopping_bag</span></a>


        </div>
    </header>
    <div class='flex  justify-center items-center '>
        <div class='flex relative justify-center items-center text-black rounded-sm  gap-10 mt-20 mb-40 p-10 border shadow-lg'>
            <a class='absolute top-0 left-0 p-2 mt-5 ml-5 rounded-sm transition-colors duration-300 hover:bg-black hover:text-white border' href="/mac">Cancel</a>
            <img class='h-full w-[500px] p-2 border-3 rounded-md border-gray-300 mt-10' src='{{asset($iphone->image)}}'>
            <div class='flex flex-col gap-5 mt-20 text-2xl'>
                <div >
                    <p class='text-3xl '>{{$iphone->name}}</p>
                </div>
                <div style="color: {{$iphone->arYra ? 'green' : 'red'}}">
                    <p>{{$iphone->arYra ? 'Taip' : 'Ne'}}</p>
                </div>
                <div>
                    <p >Storage</p>
                    
                    <p class='mt-5 p-5 border rounded-md w-fit'>{{$iphone->storage}}</p>
                </div>
                <div>
                    <p >Color</p>
                    <p class='mt-5 p-5 border rounded-md w-fit'>{{$iphone->color}}</p>
                </div>
                <div>
                    <p >Price</p>
                    <p class='price mt-5 p-10 border rounded-md w-fit' name="kaina">{{$iphone->price}} €</p>
                </div>
                @if($iphone->arYra)
                <form method="POST" action="/cart/add/iphone/{{ $iphone->id }}">
                    @csrf
                    <div class='mt-7  flex  gap-y-10'>
                        
                        <div class='flex  gap-5 border-1 rounded-sm w-fit'>
                                <button type='button' class='remove cursor-pointer pl-10 pr-10 pt-5 pb-5  text-black'>-</button>
                                <input class='counter w-10 text-center outline-none ' type='text' name="kiekis" value='1'>
                                <button type="button" class='add cursor-pointer pl-10 pr-10 pt-5 pb-5  text-black'>+</button> 
                            
                        </div>
                        <div class='flex  gap-5 w-fit'>
                        <button type="submit" class='cursor-pointer transition-colors duration-300  hover:bg-blue-600 ml-5 bg-black pl-10 pr-10 pt-5 pb-5 rounded-sm text-white'>Add to Cart</button>
                        </div>
                    </div>
                </form>
                @else
                <div class='mt-7  flex  gap-y-10'>
                    <p>This product is currently out of stock. Please check back later.</p>    
                </div>
                @endif
            </div>
        </div>
    </div>
</body>
</html>