<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=account_circle,shopping_bag" />
       @vite(['resources/css/app.css', 'resources/js/edit.js'])
    <title>EDIT PAGE</title>
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
 <div class="flex flex-col border  items-center justify-center ">
      <div class='flex  p-5 rounded-sm gap-5 mt-20 text-2xl text-black mb-40'>
    <form method="POST" action="/cart/update/{{$key}}">
        @csrf
        @method('PUT')
     <table >
            <tr class="border bg-gray-100">
                <th class="p-2">Product Image</th>
                 <th class="p-2">Product Name</th>
                <th  class="p-2">Change Quantity</th>
                 <th  class="p-2">Submit</th>
                  <th  class="p-2">Cancel</th>
            </tr>
                <tbody>
                    <tr> 
                        <td class='p-10'><img class="p-5 w-[300px] h-[300px] block" src="{{asset($product->image)}}"></td>
                        <td class="p-10 text-center">{{ $product->name }}</td>
                        <td class="p-10 text-center">
                            <div class='border rounded-sm'>
                                <button type='button' class='remove pl-10 pr-10 pt-5 pb-5  text-black'>-</button>
                                <input class='counter text-center  w-[50px] h-[50px] outline-none ' type='text' name="kiekis" value='{{ $quantity}}'>
                                <button type="button" class='add pl-10 pr-10 pt-5 pb-5  text-black'>+</button> 
                            </div>
                            </td>
                         <td class="p-10 text-center">
                            <button type='submit' href="/cart/update/{{$key}}" class='rounded-sm border pr-5 pl-5 pt-3 pb-3'>Update</button>
                        </td>
                         <td class="p-10 text-center">
                            <a href="/cart" class=' rounded-sm border pr-5 pl-5 pt-3 pb-3'>Cancel</a>
                        </td>
                    </tr>  
                </tbody>
            
             
        </table>
    </form>
</div>
</div>


   

</body>
</html>