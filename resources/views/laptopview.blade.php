<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=account_circle,shopping_bag,shopping_cart" />
 
     @vite(['resources/css/app.css', 'resources/js/add.js'])
    <title>{{$macbook->name}}</title>
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
               <span class="material-symbols-outlined mr-5 hover:text-blue-400 transition-transform duration-300">account_circle</span>


            @endauth
            <a class='ml-5 hover:text-blue-400 transition-transform duration-300' href='/cart'><span class="material-symbols-outlined">shopping_bag</span></a>


        </div>
    </header>
     <div class='flex justify-center items-center'>
        <div class='flex justify-center rounded-lg items-center text-black  gap-10 border p-5 mt-20 mb-30'>
            <img class='p-5 border rounded-lg  border-gray-300 mt-10' src='{{asset($macbook->image)}}'>
            <div class='flex flex-col gap-5 mt-20 text-2xl'>
                <div >
                    <p class='text-3xl '>{{$macbook->name}}</p>
                </div>
                <div style="color: {{$macbook->arYra ? 'green' : 'red'}}">
                    <p>{{$macbook->arYra ? 'Yes' : 'No'}}</p>
                </div>
                <div>
                    <p>Storage</p>
                    <p class='mt-5 p-5 border rounded-md w-fit'>{{$macbook->storage}}</p>
                </div>
                <div>
                    <p>Color</p>
                    <p class='mt-5 p-5 border rounded-md w-fit'>{{$macbook->color}}</p>
                </div>
                <div>
                    <p >Price</p>
                    <p class='price mt-5 p-5 border rounded-md w-fit'>{{$macbook->price}}€</p>
                </div>
                @if($macbook->arYra)
                <form method="POST" action="/cart/add/mac/{{ $macbook->id }}">
                    @csrf
                    <div class='mt-7  flex  gap-y-10'>
                        
                        <div class='flex  gap-5 border-1 rounded-sm w-fit'>
                                <button type='button' class='remove pl-10 pr-10 pt-5 pb-5  text-black'>-</button>
                                <input class='counter w-10 text-center outline-none ' type='text' name="kiekis" value='1'>
                                <button type="button" class='add pl-10 pr-10 pt-5 pb-5  text-black'>+</button> 
                            
                        </div>
                        <div class='flex  gap-5 w-fit'>
                        <button type="submit" class='hover:text-blue-400 ml-5 bg-black pl-10 pr-10 pt-5 pb-5 rounded-sm text-white'>Add to Cart</button>
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