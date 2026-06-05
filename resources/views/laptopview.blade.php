<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=account_circle,shopping_bag,shopping_cart" />
 
     @vite(['resources/css/app.css', 'resources/js/add.js'])
    <title>{{$macbook->name}}</title>
</head>
<body class='italic text-white font-bold'>
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
             <a class='mr-5 hover:text-blue-400 transition-transform duration-300' href='/userpage'><span class="material-symbols-outlined">account_circle</span></a>


            @endauth
            <a class='ml-5 hover:text-blue-400 transition-transform duration-300' href='#'><span class="material-symbols-outlined">shopping_bag</span></a>


        </div>
    </header>
     <div class='flex border rounded-md justify-center items-center mt-15'>
        <div class='flex justify-center items-center text-black mt-20 gap-20 border p-15'>
            <img class='p-5 border-2 border-gray-300 mt-20' src='{{asset($macbook->image)}}'>
            <div class='flex flex-col gap-10 mt-20 text-3xl'>
                <div >
                    <p class='text-6xl '>{{$macbook->name}}</p>
                </div>
                <div style="color: {{$macbook->arYra ? 'green' : 'red'}}">
                    <p>{{$macbook->arYra ? 'Yes' : 'No'}}</p>
                </div>
                <div>
                    <p class='text-4xl '>Storage</p>
                    <p class='mt-5 p-10 border rounded-md w-fit'>{{$macbook->storage}}</p>
                </div>
                <div>
                    <p class='text-4xl '>Color</p>
                    <p class='mt-5 p-10 border rounded-md w-fit'>{{$macbook->color}}</p>
                </div>
                <div>
                    <p class='text-4xl '>Price</p>
                    <p class='price mt-5 p-20 border rounded-md w-fit'>{{$macbook->price}}€</p>
                </div>
                @if($macbook->arYra)
                <form method="POST" action="/mac/add/{{ $macbook->id }}">
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
    <footer class='bg-gray-300 fixed bottom-0 left-0 right-0 p-10'> </footer>    
  
</body>
</html>