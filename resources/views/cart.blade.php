<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=account_circle,shopping_bag" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
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
             <a class='mr-5 hover:text-blue-400 transition-transform duration-300' href='/userpage'><span class="material-symbols-outlined">account_circle</span></a>


            @endauth
            <a class='ml-5 hover:text-blue-400 transition-transform duration-300' href='#'><span class="material-symbols-outlined">shopping_bag</span></a>


        </div>
    </header>
   <div class="flex flex-col border  items-center justify-center ">
      <div class='flex border p-10 rounded-sm gap-5 mt-20 text-2xl text-black mb-40'>
        <table class="border p-5 ">
            <tr>
                <th class="p-5">Product Image</th>
                 <th class="p-5">Product Name</th>
                <th class="p-5">Singular Product Price</th>
                <th  class="p-5">Quantity</th>
                <th class="p-5">Sum</th>
                <th class="p-5"> Edit quantity</th>
                <th class="p-5">Remove item</th>
            </tr>
                <tbody class=" border"> @foreach($items as $item)
                    <tr>
                       
                        <td class='p-20'><img class="p-5 w-[300px] h-[300px] block" src="{{asset($item['product']->image)}}"></td>
                        <td class="p-20 text-center">{{ $item['product']->name }}</td>
                        <td class="p-20 text-center">{{$item['product']->price}} €</td>
                        <td class="p-10 text-center">{{ $item['quantity'] }}</td>
                        <td class="p-10 text-center">{{ $item['total'] }} €</td>
                        <td class="p-10 text-center"><button class='border p-5'>Edit</button></td>
                        <td class="p-10 text-center"><button class='border p-5'>Remove</button></td>
                    </tr>  @endforeach
                </tbody>
            
             
        </table>
        <div class="flex flex-col border p-20">
           
            <p class='mb-10'>apzvalga</p>
            <div class="flex justify-between mt-5 mb-5">
                <p>suma: </p>
                <p>{{ $item['total'] }} €</p>
            </div>
            <div class="flex justify-between  mt-5 mb-5">
                <p>Viso be Pvm:</p>
                <p>{{ $item['pvm'] }} €</p>

            </div>
             <div class="flex justify-between  mt-5 mb-5">
                <p class="mr-5">Visa suma su PVM: </p>
                <p>{{ $item['total'] }} €</p>
            </div>
             <div  class="flex justify-center mt-20 ">
                <button class="w-fit p-5 border ">Pirkti</button>
            </div>
            
        </div>
   </div>
    
<footer class='bg-gray-300 absolute  bottom-0 left-0 right-0 p-10'> </footer>
               
</body>
</html>