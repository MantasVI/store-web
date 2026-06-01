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
             <a class='mr-5 hover:text-blue-400 transition-transform duration-300' href='/userpage'><span class="material-symbols-outlined">
account_circle
</span></a>
            @endauth
            <a class='ml-5 hover:text-blue-400 transition-transform duration-300' href='#'><span class="material-symbols-outlined">
shopping_bag
</span></a>
        </div>
    </header>
    <main class='bg-gray-300 pl-20 pr-20'>
    <div class='flex justify-between items-center bg-[#292323] p-5'>
        <div class=''>
            <img src="/images/macbookneo.jpg">
            <a class='hover:text-blue-400 transition-transform duration-300' href='/#'>MacBook Neo</a>
        </div>

    </div>



    </main>



</body>
</html>