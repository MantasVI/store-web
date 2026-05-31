<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=account_circle,shopping_bag" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Iphone telefonai</title>
</head>
<body class='italic text-white font-bold'>
    <header class='flex justify-between items-center bg-[#292323] p-5'> 
        <div class=''>
            <a class='hover:text-blue-400 transition-transform duration-300' href='/#'>icon</a>
        </div>
        <div class=''>
            <a class='mr-5 hover:text-blue-400 transition-transform duration-300' href='/Mac'>mac</a>
            <a class='ml-5 hover:text-blue-400 transition-transform duration-300' href='/Iphone'>iphone</a>
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
   
        
    <div class='flex flex-row justify-center gap-10 p-5'>
            <div class='w-[15%] text-black mt-10  bg-white border-2 border-black rounded-lg self-start wrap'>
                
                <div class='flex ml-5  mt-5  items-center'>
                    <p>Filters</p>
                </div>

                 <hr class=" border ml-5 mt-5 mb-10 mr-5 border-black ">

                <div class='flex ml-5  mb-5  items-center'>
                    <p>Ekrano dydis</p>
                </div>

                <div class='flex ml-5  mb-5  items-center'>
                    <p>Talpa</p>
                </div>

                <div class='flex ml-5  mb-5  items-center'>
                    <p>Spalva</p>
                </div>

                <div class='flex ml-5  mb-5  items-center'>
                    <p>Sandelyje</p>
                </div>

            </div>
    
    
        <div class='bg-gray-300 w-[60%] text-black mt-10   rounded-lg'>
            <div class='flex ml-5  mt-5  items-center'>
                <p>Iphone</p>
            </div>

            <hr class=" border ml-5 mt-5 mb-10 mr-5 border-black ">

            <div class='flex ml-5  gap-5 mb-5 items-center'>
                <select class='p-2 border border-black rounded-sm'>
                    <option>Pigiausi</option>
                    <option>Seniausi</option>
                    <option>Naujausi</option>
                    <option>Brangiausi</option>
                    <option>Populiarus</option>
                </select>
            

                <select class='p-2 border border-black rounded-sm'>
                    <option>12</option>
                    <option>24</option>
                    <option>36</option>
                    <option>Visi</option>
                    
                </select>
            </div>

            <div class='grid grid-cols-4 bg-teal-200 p-5 gap-y-5 gap-x-5'>
                <div class='bg-orange-300 aspect-square'></div>
                <div class='bg-orange-300 aspect-square'></div>
                <div class='bg-orange-300 aspect-square'></div>
                <div class='bg-orange-300 aspect-square'></div>
                <div class='bg-orange-300 aspect-square'></div>
            </div>
        </div>
    </div>

        
  

    



</body>
</html>