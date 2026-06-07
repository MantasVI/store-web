<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=account_circle,shopping_bag,shopping_cart" />
    @vite(['resources/css/app.css', 'resources/js/mac.js'])
    <title>Macbook laptopai</title>
</head>
<body class='italic text-white font-bold relative '>
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
   
       <div class='flex flex-row justify-center gap-10 p-5'>
            <div class='w-[15%] text-black mt-10  bg-white border-2 border-black rounded-lg self-start wrap'>
                
                <div class='flex ml-5  mt-5 flex-col '>
                    <p>Filters</p>
                    
                </div>

                 <hr class=" border ml-5 mt-5 mb-10 mr-5 border-black ">

                <div class='flex flex-col ml-5  mb-5 gap-y-5 '>
                    <p class='text-xl'>Kategorija</p>
                    @foreach($macbook->unique('kategorija')->sortByDesc('kategorija') as $mac)
                    <div class='flex items-center gap-2'>
                    <input type='checkbox' class='checkbox-kategorija' value='{{$mac->kategorija}}'><label>{{$mac->kategorija}}  </label>     
                    </div>
                    @endforeach
                </div>

                <div class='flex flex-col ml-5  mb-5 gap-y-5 '>
                    <p class='text-xl'>Screen Size</p>
                    @foreach($macbook->whereNotNull('screenSize')->unique('screenSize')->sortByDesc('screenSize') as $mac)
                    <div class='flex items-center gap-2'>
                    <input type='checkbox' class='checkbox-screenSize' value='{{$mac->screenSize}}' ><label>{{$mac->screenSize}}  </label>     
                    </div>
                    @endforeach
                </div>
                <div class='flex flex-col ml-5  mb-5 gap-y-5 '>
                    <p class='text-xl'>Screen Type</p>
                    @foreach($macbook->whereNotNull('screenType')->unique('screenType')->sortByDesc('screenType') as $mac)
                    <div class='flex items-center gap-2'>
                    <input type='checkbox' class='checkbox-screenType' value='{{$mac->screenType}}' ><label>{{$mac->screenType}}  </label>     
                    </div>
                    @endforeach
                </div>
                <div class='flex flex-col ml-5  mb-5 gap-y-5 '>
                    <p class='text-xl'>Cpu</p>
                    @foreach($macbook->unique('cpu')->sortByDesc('cpu') as $mac)
                    <div class='flex items-center gap-2'>
                    <input type='checkbox' class='checkbox-cpu' value='{{$mac->cpu}}' ><label>{{$mac->cpu}}  </label>     
                    </div>
                    @endforeach
                </div>
                <div class='flex flex-col ml-5  mb-5 gap-y-5 '>
                    <p class='text-xl'>Gpu</p>
                    @foreach($macbook->unique('gpu')->sortByDesc('gpu') as $mac)
                    <div class='flex items-center gap-2'>
                    <input type='checkbox' class='checkbox-gpu' value='{{$mac->gpu}}' ><label>{{$mac->gpu}}  </label>     
                    </div>
                    @endforeach
                </div>
                 <div class='flex flex-col ml-5  mb-5 gap-y-5 '>
                    <p class='text-xl'>Ram</p>
                    @foreach($macbook->unique('ram') as $mac)
                    <div class='flex items-center gap-2'>
                    <input type='checkbox' class='checkbox-ram' value='{{$mac->ram}}'><label>{{$mac->ram}}  </label>     
                    </div>
                    @endforeach
                </div>
                <div class='flex flex-col ml-5  mb-5 gap-y-5'>
                    <p>Storage</p>
                    @foreach($macbook->unique('storage') as $mac)
                    <div class='flex items-center gap-2'>
                    <input type='checkbox' class='checkbox-storage'  value='{{$mac->storage}}'> <label>{{$mac->storage}}  </label>     
                    </div>
                    @endforeach
                </div>

                <div class='flex flex-col ml-5  mb-5 gap-y-5'>
                    <p>Color</p>
                    @foreach($macbook->unique('color')->sortByDesc('color')   as $mac)
                    <div class='flex items-center gap-2'>
                    <input type='checkbox' class='checkbox-color'  value='{{$mac->color}}' ><label>{{$mac->color}}  </label>     
                    </div>
                    @endforeach
                </div>

                <div class='flex flex-col ml-5  mb-5 gap-y-5'>
                    <p>In Storage</p>
                    @foreach($macbook->unique('arYra') as $mac)
                    <div class='flex items-center gap-2'>
                    <input type='checkbox' class='checkbox-arYra'  value="{{$mac->arYra ? 'Yes' : 'No'}}"><label>{{$mac->arYra ? 'Yes' : 'No'}}  </label>     
                    </div>
                    @endforeach
                </div>

            </div>
    
    



            
        <div class=' w-[60%] text-black mt-10   rounded-lg'>
            <div class='flex ml-5  mt-5  items-center'>
                <p class=''>Macbook</p>
            </div>

            <hr class=" border ml-5 mt-5 mb-10 mr-5 border-black ">

            <div class='flex ml-5  gap-5 mb-5 items-center'>
                <select class=' tipas p-2 border border-gray-300 hover:border-black rounded-sm outline-none'>
                    <option value='Pigus'>Cheap</option>
                    <option value='Brangus'>Expensive</option>
                    <option value='default' selected>-</option>
                </select>
            

                <select class='quant p-2 border border-gray-300 hover:border-black  rounded-sm outline-none'>
                    <option value='12' >12</option>
                    <option value='24'>24</option>
                    <option value='36'>36</option>
                    <option value='all' selected>All</option>
                    
                </select>
            </div>

            <div class='grid  grid-cols-4 bg-white  gap-y-5 gap-x-5 mb-40'>
                @foreach($macbook as $mac)
                  
                    <div class='a h-full  border border-gray-300 hover:border-black  rounded-sm flex flex-col items-center p-5 mt-15'>
                    <a href='/mac/{{$mac->name}}'>
                        <img  class='h-[200px] w-[200px] 'src="{{$mac->image}}">
                    </a>
                        <div class='mt-5'>
                            <div class='flex gap-2 flex-wrap justify-center'>
                                <p class='kategorija text-md text-center'>{{$mac->kategorija}}</p>
                                <p class='screenSize text-md text-center'>{{$mac->screenSize}}</p> 
                                <p class='screenType text-md text-center'>{{$mac->screenType}}</p> 
                                <p class='storage text-md text-center'>{{$mac->storage}}</p>
                                <p class='color text-md text-center'>{{$mac->color}}</p> 
                                <p class='cpu text-md text-center'>{{$mac->cpu}}</p>
                                <p class='gpu text-md text-center'>{{$mac->gpu}}</p> 
                                <p class='ram text-md text-center'>{{$mac->ram}}</p>
                            </div>
                            <div>
                                <p class='status text-md text-center mt-5' style='color: {{$mac->arYra ? "green" : "red"}}'>{{$mac->arYra ? 'Yes':'No'}}</p>
                                <p class='price text-lg text-center'>{{$mac->price}} €</p>
                            </div>
                        </div>
                         <div class='mt-auto  '> 
                            @if($mac->arYra)
                            <form method="POST" action="/cart/add/mac/{{ $mac->id }}">
                                @csrf
                              
                                <input class='counter w-10 text-center outline-none ' type='hidden' name="kiekis" value='1'>
                                <button type='submit' class='add bg-black hover:bg-blue-600 transition-colors duration-300 pl-8 pr-8 pt-5 pb-5 rounded-sm text-white'>
                                    <span class="material-symbols-outlined ">shopping_cart</span>
                                </button>
                                @else
                                <a class='inline-block bg-black hover:bg-blue-600 transition-colors duration-300 pl-8 pr-8 pt-5 pb-5 rounded-sm text-white ' href='/mac/{{$mac->name}}'>View</a>
    
                               
                                @endif
                            </form>
                        </div>
                   
                </div>
              @endforeach
            </div>
        </div>
    </div>




  <footer class='bg-gray-300 absolute bottom-0 left-0 right-0 p-10  '> </footer>    

</body>
</html>