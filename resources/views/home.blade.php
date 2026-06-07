<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=account_circle,shopping_bag" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>home page</title>
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
            @guest
            <a class='mr-5 hover:text-blue-400 transition-transform duration-300' href='/login'>login</a>
            @endguest
            @auth
              <span class="material-symbols-outlined mr-5 hover:text-blue-400 transition-transform duration-300">account_circle</span>


            @endauth
            <a class='ml-5 hover:text-blue-400 transition-transform duration-300' href='/cart'><span class="material-symbols-outlined">shopping_bag</span></a>


        </div>
    </header>
    <main class='bg-green-500 flex justify-center items-center min-h-screen bg-gray-100 p-4'>
    <div class='bg-blue-400 rounded-lg shadow-lg overflow-hidden w-full max-w-4xl'>
        <div class='flex space-x-4'>
            <img 
            src="/images/mac.jpg"
            class='h-64 w-full object-cover'
            >
             <img 
            src="/images/mac.jpg"
            class='h-64 w-full object-cover'
            >
             <img 
            src="/images/mac.jpg"
            class='h-64 w-full object-cover'
            >
        </div>
        <div class='flex justify-center mt-4'>
            <button class='bg-gray-300 rounded-full h-4 w-4 mx-1'></button>
            <button class='bg-gray-300 rounded-full h-4 w-4 mx-1'></button>
            <button class='bg-gray-300 rounded-full h-4 w-4 mx-1'></button>
        </div>
        <div class='flex justify-between items-center mt-4 px-4'>
            <button class='bg-gray-300 rounded-full p-2'>Prev</button>
            <button class='bg-gray-300 rounded-full p-2'>Next</button>
           
        </div>
    </div>



    </main>


<footer class='bg-gray-300 fixed bottom-0 left-0 right-0 p-10'> </footer>
</body>
</html>