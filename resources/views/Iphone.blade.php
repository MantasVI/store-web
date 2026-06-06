<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=account_circle,shopping_bag,shopping_cart" />
    @vite(['resources/css/app.css', 'resources/js/iphone.js'])
    <title>Iphone telefonai</title>
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
            <a class='ml-5 hover:text-blue-400 transition-transform duration-300' href='/cart'><span class="material-symbols-outlined">shopping_bag</span></a>


        </div>
    </header>
   
        
    <div class='flex flex-row justify-center gap-10 p-5'>
            <div class='w-[15%] text-black mt-10  bg-white border-2 border-black rounded-lg self-start wrap'>
                
                <div class='flex ml-5  mt-5 flex-col '>
                    <p>Filters</p>
                    
                </div>

                 <hr class=" border ml-5 mt-5 mb-10 mr-5 border-black ">

                <div class='flex flex-col ml-5  mb-5 gap-y-5 '>
                    <p class='text-xl'>Kategorija</p>
                    @foreach($iphones->unique('kategorija')->sortByDesc('kategorija') as $iphone)
                    <div class='flex items-center gap-2'>
                    <input type='checkbox' class='checkbox-kategorija' value='{{$iphone->kategorija}}'><label>{{$iphone->kategorija}}  </label>     
                    </div>
                    @endforeach
                </div>
                 <div class='flex flex-col ml-5  mb-5 gap-y-5'>
                    <p>Screen Size</p>
                    @foreach($iphones->unique('screenSize') as $iphone)
                    <div class='flex items-center gap-2'>
                    <input type='checkbox' class='checkbox-screenSize'  value="{{$iphone->screenSize}}" ><label>{{$iphone->screenSize}}  </label>     
                    </div>
                    @endforeach
                </div>
                <div class='flex flex-col ml-5  mb-5 gap-y-5'>
                    <p>Talpa</p>
                    @foreach($iphones->unique('storage') as $iphone)
                    <div class='flex items-center gap-2'>
                    <input type='checkbox' class='checkbox-storage'  value='{{$iphone->storage}}'><label>{{$iphone->storage}}  </label>     
                    </div>
                    @endforeach
                </div>

                <div class='flex flex-col ml-5  mb-5 gap-y-5'>
                    <p>Spalva</p>
                    @foreach($iphones->unique('color')   as $iphone)
                    <div class='flex items-center gap-2'>
                    <input type='checkbox' class='checkbox-color'  value='{{$iphone->color}}'><label>{{$iphone->color}}  </label>     
                    </div>
                    @endforeach
                </div>

                <div class='flex flex-col ml-5  mb-5 gap-y-5'>
                    <p>Sandelyje</p>
                    @foreach($iphones->unique('arYra') as $iphone)
                    <div class='flex items-center gap-2'>
                    <input type='checkbox' class='checkbox-arYra'  value="{{$iphone->arYra ? 'Yes' : 'No'}}" ><label>{{$iphone->arYra ? 'Taip' : 'Ne'}}  </label>     
                    </div>
                    @endforeach
                </div>

            </div>
    
    



            
        <div class=' w-[60%] text-black mt-10   rounded-lg'>
            <div class='flex ml-5  mt-5  items-center'>
                <p class=''>Iphone</p>
            </div>

            <hr class=" border ml-5 mt-5 mb-10 mr-5 border-black ">

            <div class='flex ml-5  gap-5 mb-5 items-center'>
                <select class='tipas p-2 border border-gray-300 hover:border-black rounded-sm outline-none'>
                    <option value='Pigus'>Pigiausi</option>
                    <option value='Brangus'>Brangiausi</option>
                    <option value='default' selected>-</option>
                </select>
            

                <select class='quant p-2 border border-gray-300 hover:border-black  rounded-sm outline-none'>
                    <option value='12' >12</option>
                    <option value='24'>24</option>
                    <option value='36'>36</option>
                    <option value='all' selected>Visi</option>
                    
                </select>
            </div>

            <div class='grid  grid-cols-4 bg-white  gap-y-5 gap-x-5 mb-40'>
                @foreach($iphones as $iphone)
                 <a class='a' href='/iphone/{{$iphone->name}}'> 
                    <div class='h-full  border border-gray-300 hover:border-black  rounded-sm flex flex-col items-center p-5 mt-15'>
                    <img  class='h-[300px] w-[300px] 'src="{{$iphone->image}}">
                        <div class='mt-10'>
                            <div class='flex gap-2 justify-center flex-wrap'>
                                <p class='kategorija text-xl text-center'>{{$iphone->kategorija}}</p> 
                                <p class='storage text-xl text-center'>{{$iphone->storage}}</p>
                                <p class='color text-xl text-center'>{{$iphone->color}}</p> 
                                <p class='screenSize text-xl text-center'>{{$iphone->screenSize}}</p> 
                            </div>
                            <div>
                                <p class='status text-lg text-center' style='color: {{$iphone->arYra ? "green" : "red"}}'>{{$iphone->arYra ? 'Yes':'No'}}</p>
                                <p class='price text-xl text-center'>{{$iphone->price}} €</p>
                            </div>  
                        </div>
                        <div class='mt-15 '>
                            <button class='add bg-black hover:bg-blue-600 transition-colors duration-300 pl-10 pr-10 pt-5 pb-5 rounded-sm text-white'>
                                <span class="material-symbols-outlined ">shopping_cart</span>
                            </button>
                        </div>
                   
                </div> </a>
              @endforeach
            </div>
        </div>
    </div>
<footer class='bg-gray-300 absolute bottom-0 left-0 right-0 p-10 '> </footer>
</body>
</html>