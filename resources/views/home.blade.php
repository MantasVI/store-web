<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=account_circle,shopping_bag,shopping_cart" />
    @vite(['resources/css/app.css', 'resources/js/scroll.js'])
    <title>home page</title>
</head>
<body class='italic text-white font-bold relative  '>
    <header class='flex justify-between items-center bg-[#292323] p-5'> 
        <div class=''>
            <a class='hover:text-blue-400 transition-transform duration-300' href='/home'>icon</a>
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
             <a href='/orders'> <span class="material-symbols-outlined mr-5 hover:text-blue-400 transition-transform duration-300">account_circle</span></a>


            @endauth
            <a class='ml-5 hover:text-blue-400 transition-transform duration-300' href='/cart'><span class="material-symbols-outlined">shopping_bag</span></a>


        </div>
    </header>
    <main class='flex flex-col justify-center items-center min-h-screen bg-gray-100 p-4 pr-30 pl-30'>

    
    
    <div class='flex  mt-20  items-stretch justify-center gap-x-2 text-black'>
            <a href="/mac" >
            <div class='flex flex-col bg-white  border border-gray-300 hover:border-black  rounded-sm  w-[1000px] h-[1009px] items-center justify-center gap-2'>
    
                    <p class="text-center text-4xl font-bold">For Absolute Professionals</p>
                       <p class="text-center mt-10">{{$big->price}}€</p>
                       <button class="cursor-pointer p-5 bg-black text-center text-white">Buy Now</button>
            
                <img  src="{{ $big->image }}" class='slide w-[600px] h-[600px] object-contain'>


                

            </div></a>

            <div class='flex flex-col  justify-center items-center gap-2'>
                
               <a href="/iphone" > 
                <div class='flex bg-white  border border-gray-300 hover:border-black  rounded-sm w-[1000px] h-[500px]  justify-between items-center px-5'>
                    
                     <div class="flex flex-col justify-center items-center gap-2">
                        <p class="text-center text-3xl font-bold w-[300px]">Swap To The New Iphone 17!</p>
                        <p class="text-center mt-10">{{$small1->price}}€</p>
                       <button class="cursor-pointer p-5 bg-black text-center text-white">Buy Now</button>
                    </div>
                    <img src="{{ $small1->image }}" class='slide  w-[300px] h-[300px] object-contain'>
                   
                
                </div>
                </a>

             <a href="/mac" >  <div class='flex bg-white  border border-gray-300 hover:border-black  rounded-sm  w-[1000px] h-[500px]  justify-between items-center px-5'>
                    
                      <div class="flex flex-col justify-center items-center gap-2">                
                        <p class="text-center text-3xl font-bold w-[300px]">Fast And Extremely Powerful Mac M2 Ultra</p>
                        <p class="text-center mt-10">{{$small2->price}}€</p>
                       <button class="cursor-pointer p-5 bg-black text-center text-white">Buy Now</button>
                    </div>   
                    <img src="{{ $small2->image }}" class='slide  w-[300px] h-[300px] object-contain'>
                   
                
                </div></a>

            </div>

            
    </div>


    <div class='flex mt-2  items-stretch justify-center gap-x-2 text-black'>
            <div class='flex flex-col justify-center items-center gap-2'>
                <a href="/iphone" >
                <div class='flex bg-white  border border-gray-300 hover:border-black  rounded-sm  w-[1000px] h-[500px]  justify-between items-center px-5'>
                    
                   <div class="flex flex-col justify-center items-center gap-2">
                        <p class="text-center text-3xl font-bold w-[300px]">Make the Switch Today</p>
                          <p class="text-center mt-10">{{$small3->price}}€</p>
                       <button class="cursor-pointer p-5 bg-black text-center text-white">Buy Now</button>
                    </div>
                    <img src="{{ $small3->image }}" class='slide  w-[300px] h-[300px] object-contain'>
                   
                
                </div></a>

               <a href="/mac" ><div class='flex bg-white  border border-gray-300 hover:border-black  rounded-sm w-[1000px] h-[500px]  justify-between items-center px-5'>
                    
                     <div class="flex flex-col justify-center items-center gap-2">
                        <p class="text-center text-3xl font-bold w-[300px]">Engineered for Excellence</p>
                          <p class="text-center mt-10">{{$small4->price}}€</p>
                       <button class="cursor-pointer p-5 bg-black text-center text-white">Buy Now</button>
                    </div>
                    <img src="{{ $small4->image }}" class='slide  w-[300px] h-[300px] object-contain'>
                   
                
                </div></a>
            </div> 
           

            <div class='flex flex-col justify-center items-center gap-2'>
                
                <a href="/iphone" ><div class='flex bg-white  border border-gray-300 hover:border-black  rounded-sm  w-[1000px] h-[500px]  justify-between items-center px-5'>
                    
                     <div class="flex flex-col justify-center items-center gap-2">
                        <p class="text-center text-3xl font-bold w-[300px]">Meet the Future.</p>
                          <p class="text-center mt-10">{{$small5->price}}€</p>
                       <button class="cursor-pointer p-5 bg-black text-center text-white">Buy Now</button>
                    </div>
                    <img src="{{ $small5->image }}" class='slide  w-[300px] h-[300px] object-contain'>
                   
                
                </div></a>

              <a href="/mac" ><div class='flex bg-white  border border-gray-300 hover:border-black  rounded-sm  w-[1000px] h-[500px]  justify-between items-center px-5'>
                    
                     <div class="flex flex-col justify-center items-center gap-2">
                        <p class="text-center text-3xl font-bold w-[300px]">Performance Without Limits</p>
                          <p class="text-center mt-10">{{$small5->price}}€</p>
                       <button class="cursor-pointer p-5 bg-black text-center text-white">Buy Now</button>
                    </div>
                    <img src="{{ $small6->image }}" class='slide  w-[300px] h-[300px] object-contain'>
                   
                
                </div></a>
            </div>

            
    </div>
       <div class='flex mb-10 mt-30 justify-center items-center'><p class='text-black text-4xl text-center'> Most Popular Iphones </p>  </div>
            
           <div class='flex relative text-black w-full bg-white items-center  gap-y-5 gap-x-5  mb-40 '>
              <button class='absolute -left-20 top-1/2 text-blue-600 text-4xl -translate-y-1/2 z-10  flex-shrink-0 Iback text-bold ml-5 text-2xl'> < </button>
            <div  class='iphone-scroll bg-gray-100  flex overflow-x-auto gap-5 scrollbar-thin scrollbar-track-gray-100 scrollbar-thumb-gray-500  flex-1'>    
   
      
                @foreach($iphones as $iphone)
                
                    <div class='a h-full w-[500px] overflow-hidden   border border-gray-300 hover:border-black  rounded-sm flex flex-col items-center p-5  shadow-md flex-shrink-0 '>
                     <a  href='/iphone/{{$iphone->name}}'> 
                        <img  class='h-[200px] w-[200px] 'src="{{$iphone->image}}">  
                    </a>
                        <div class='mt-10'>
                            <div class='flex gap-2 justify-center flex-wrap'>
                                <p class='kategorija text-md text-center'>{{$iphone->kategorija}}</p> 
                                <p class='storage text-md text-center'>{{$iphone->storage}}</p>
                                <p class='color text-md text-center'>{{$iphone->color}}</p> 
                                <p class='screenSize text-md text-center'>{{$iphone->screenSize}}</p> 
                            </div>
                  
                            <div class="mb-5 ">
                                <p class='status text-md text-center' style='color: {{$iphone->arYra ? "green" : "red"}}'>{{$iphone->arYra ? 'Yes':'No'}}</p>
                                <p class='price text-lg text-center'>{{$iphone->price}} €</p>
                            </div>  
                        </div>
                
                         <div class='mt-auto  '> 
                            @if($iphone->arYra)
                            <form method="POST" action="/cart/add/iphone/{{ $iphone->id }}">
                                @csrf
                              
                                <input class='counter w-10 text-center outline-none ' type='hidden' name="kiekis" value='1'>
                                <button type='submit' class='add cursor-pointer bg-black hover:bg-blue-600 transition-colors duration-300 pl-8 pr-8 pt-5 pb-5 rounded-sm text-white'>
                                    <span class="material-symbols-outlined ">shopping_cart</span>
                                </button>
                                @else
                                <a class='inline-block cursor-pointer bg-black hover:bg-blue-600 transition-colors duration-300 pl-8 pr-8 pt-5 pb-5 rounded-sm text-white ' href='/iphone/{{$iphone->name}}'>View</a>
    
                               
                                @endif
                            </form>
                        </div>
                   
                </div> 
              @endforeach
            </div>
             <button class='absolute -right-20 text-blue-600 text-4xl top-1/2 -translate-y-1/2 z-10  flex-shrink-0 Inext text-bold mr-5 text-2xl'> > </button>
            </div> 

            <div class='flex mb-10 justify-center items-center'><p class='text-black text-4xl text-center'> Most Popular Macbooks </p>  </div>
          
        <div class='flex bg-white relative w-full  text-black gap-y-5 gap-x-5 mb-40   items-center'>
            
                    <button class='absolute -left-20 top-1/2 text-blue-600 text-4xl -translate-y-1/2 z-10  flex-shrink-0 Mback text-bold ml-5 text-2xl'> < </button>

             <div class='mac-scroll flex overflow-x-auto gap-5  scrollbar-thin scrollbar-track-gray-100 scrollbar-thumb-gray-500 bg-gray-100  flex-1'>  
           
          
            @foreach($macbook as $mac)
                  
                    <div class='a h-full w-[500px] overflow-hidden border bg-gray-100  border-gray-300 hover:border-black  rounded-sm flex flex-col items-center p-5 shadow-md flex-shrink-0 '>
                    <a href='/mac/{{$mac->name}}'>
                        <img  class='h-[200px] w-[200px] 'src="{{$mac->image}}">
                    </a>
                        <div class='mt-5 '>
                            <div class='flex gap-2 flex-wrap justify-center '>
                                <p class='kategorija text-md text-center'>{{$mac->kategorija}}</p>
                                <p class='screenSize text-md text-center'>{{$mac->screenSize}}</p> 
                                <p class='screenType text-md text-center'>{{$mac->screenType}}</p> 
                                <p class='storage text-md text-center'>{{$mac->storage}}</p>
                                <p class='color text-md text-center'>{{$mac->color}}</p> 
                                <p class='cpu text-md text-center'>{{$mac->cpu}}</p>
                                <p class='gpu text-md text-center'>{{$mac->gpu}}</p> 
                                <p class='ram text-md text-center'>{{$mac->ram}}</p>
                            </div>
                            <div class="mb-5 ">
                                <p class='status text-md text-center mt-5' style='color: {{$mac->arYra ? "green" : "red"}}'>{{$mac->arYra ? 'Yes':'No'}}</p>
                                <p class='price text-lg text-center'>{{$mac->price}} €</p>
                            </div>
                        </div>
                         <div class='mt-auto  '> 
                            @if($mac->arYra)
                            <form method="POST" action="/cart/add/mac/{{ $mac->id }}">
                                @csrf
                              
                                <input class='counter w-10 text-center outline-none ' type='hidden' name="kiekis" value='1'>
                                <button type='submit' class='add cursor-pointer bg-black hover:bg-blue-600 transition-colors duration-300 pl-8 pr-8 pt-5 pb-5 rounded-sm text-white'>
                                    <span class="material-symbols-outlined ">shopping_cart</span>
                                </button>
                                @else
                                <a class='inline-block cursor-pointer bg-black hover:bg-blue-600 transition-colors duration-300 pl-8 pr-8 pt-5 pb-5 rounded-sm text-white ' href='/mac/{{$mac->name}}'>View</a>
    
                               
                                @endif
                            </form>
                        </div>
                   
                </div>
              @endforeach
               
            </div>
               <button class='absolute -right-20 top-1/2 text-4xl text-blue-600 -translate-y-1/2 z-10  flex-shrink-0 Mnext  mr-5 text-2xl'> > </button>
        </div>
    </main>
    

<footer class='bg-gray-300 absolute bottom-0 left-0 right-0 p-10'> </footer>
</body>
</html>