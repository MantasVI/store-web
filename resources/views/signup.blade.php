<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=account_circle,shopping_bag" />
       @vite(['resources/css/app.css', 'resources/js/mac.js'])
    <title>Document</title>
</head>
<body class='italic text-white font-bold'>
        <header class='flex justify-between items-center bg-[#292323] p-5'> 
        <div class=''>
            <a class='hover:text-blue-400 transition-transform duration-300' href='/#'>icon</a>
        </div>
        <div class=''>
            <a class='mr-5 hover:text-blue-400 transition-transform duration-300' href='/mac'>mac</a>
            <a class='ml-5 hover:text-blue-400 transition-transform duration-300' href='/iphone'>iphone</a>
        </div>
        <div class=''>
         
            @auth
             <span class="material-symbols-outlined mr-5 hover:text-blue-400 transition-transform duration-300">account_circle</span>


            @endauth
            <a class='ml-5 hover:text-blue-400 transition-transform duration-300' href='/cart'><span class="material-symbols-outlined">shopping_bag</span></a>


        </div>
    </header>

    <form method="POST" action="/signup">
        @csrf
        
      
    <div class='flex  justify-center items-center mt-40 text-black'>
        <div class='flex-col flex border p-20 gap-10 bg-gray-100 rounded-sm '>
            <div class='mb-10 text-center'>
                <p class='font-bold text-3xl'>Signup</p>
                 @foreach($errors->all() as $error)
                    <p class='text-center text-red-500 mt-5'>{{ $error }}</p>   
                @endforeach
            </div>
            <div>
                <p class='font-bold '>email</p>
                <input class=' p-1 outline-none border ' type="email" name="email" >
            </div>
            
            <div>
                <p class='font-bold '>password</p>
                <input class='p-1 outline-none border ' name="password" type="password">
            </div>
            <div class='flex justify-center items-center mt-5'>
                
                <button class='pr-5 pl-5 pt-2 pb-2 border rounded-sm hover:bg-black hover:text-white transition-all duration-300' type="submit">submit</button>

            </div>
       </div>
    </div> 
    </form>
    <a class='flex justify-center text-blue-600 underline' href="/login">already have an account?</a>



   

</body>
</html>