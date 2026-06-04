<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=account_circle,shopping_bag" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
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
   <div class="flex flex-col border  items-center justify-center">
      <div class='flex border p-5 rounded-sm gap-5 mt-20 text-2xl text-black'>
        <table class="border p-5 ">
            <tr>
                <th class="p-5">Nuotrauka</th>
                 <th class="p-5">Pavadinimas</th>
                <th class="p-5">Vieneto kaina</th>
                <th  class="p-5">Kiekis</th>
                <th class="p-5">Suma</th>
            </tr>
                <tbody class="p-5 border">
                    <tr>
                        
                        <td><img class="p-5 w-[500px] h-[300px] block" src='{{asset($item->image)}}'></td>
                        <td class="p-5 text-center">{{ $item->name }}</td>
                        <td class="p-5 text-center">{{$item->price}}Eur</td>
                        <td class="p-5 text-center">{{ $kiekis }}</td>
                        <td class="p-5 text-center">{{ $bendras }}Eur</td>
                    </tr>
                </tbody>
            
             
        </table>
        <div class="flex flex-col border p-10">
            <p>apzvalga</p>
            <div class="flex justify-between mt-5 mb-5">
                <p>suma: </p>
                <p>{{$bendras}}Eur</p>
            </div>
            <div class="flex justify-between  mt-5 mb-5">
                <p>Viso be Pvm:</p>
                <p></p>

            </div>
             <div class="flex justify-between  mt-5 mb-5">
                <p class="mr-5">Visa PVM suma: </p>
                <p>{{$bendras}}Eur</p>
            </div>
             <div  class="flex justify-center mt-5 mb-5">
                <button class="w-fit p-5 border ">Pirkti</button>
            </div>

        </div>
   </div>
    

</body>
</html>