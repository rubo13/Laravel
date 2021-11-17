<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <style type="text/css">
  
    #imagenes{border:2px solid }
    img {
        object-fit:cover;
       
        
      
    }
    #perros {width:50%;border:2px blue ;float:left;}
    
    #gatos {width:50%;border:2px blue;float:left;  }

     .gatos{ height: 400px;}

    </style>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gradient-to-r from-yellow-200 to-green-100 h-screen antialiased leading-none font-sans">
<div id="app">
    <header class="bg-blue-900 py-6">
        <div class="container mx-auto flex justify-between items-center px-6">
            <div>
               <!-- <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                    {{ config('app.name', 'Laravel') }}
                </a>
                -->
            </div>

            {{-- ADD THIS NAVIGATION OPTION --}}
            

            <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
            <div class="text-sm lg:flex-grow ml-3">
            <i class="bi bi-briefcase"></i>
            <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                    {{ __('Inicio') }}
                </a>
                </div>
                </div>
               
                <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
                    <div class="text-sm lg:flex-grow ml-3">
                       <a href="{{ url('adopcion/animales') }}" class="text-lg font-semibold text-gray-100 no-underline">
                            {{ __("Perros") }}
                        </a> 
                    </div>
                </div>

                <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
                    <div class="text-sm lg:flex-grow ml-3">
                       <a href="{{ url('adopcion/animales') }}" class="text-lg font-semibold text-gray-100 no-underline">
                            {{ __("Gatos") }}
                        </a> 
                    </div>
                </div>

                <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
                    <div class="text-sm lg:flex-grow ml-3">
                       <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                            {{ __("Contacto") }}
                        </a> 
                    </div>
                </div>
               

         
            {{-- END NAVIGATION OPTION --}}

            <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
                @guest
                    <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @if (Route::has('register'))
                        <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                    <a href="{{ url('projects.index') }}" class="text-lg font-semibold text-gray-100 no-underline">
                    {{ config('Inicio') }}
                </a>
                @else
                    <span>{{ Auth::user()->name }}</span>

                    <a href="{{ route('logout') }}"
                       class="no-underline hover:underline"
                       onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                @endguest
            </nav>
        </div>
    </header>

    @if(session("success"))
        <div class="container mx-auto mt-5">
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
                <div class="flex">
                    <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                    <div>
                        <p class="font-bold">{{ __("Nuevo mensaje") }}</p>
                        <p class="text-sm">{{ session("success") }}</p>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <div class="container mx-auto px-4">
        @yield('content')
    </div>
<div class=" flex justify-center   w-full h-full bg-gradient-to-r from-green-200 ">
        <div class="flex flex-col  w-2/5 m-4">
            <div class="flex h-14  w-full">
           
            <h1 class=" m-10 text-3xl">Bienvenidos adopcion-Oviedo</h1>
            
            </div>

            <div class="flex  m-12">
    

        </div>


    </div>
    

    
    </div>

 </div>
 <div class=" flex w-full h-1/2 content-center ">
 <div class="flex   w-full justify-center m-12">
 <p>
 <br>
 <div id="home-categories-container">
        <div id="home-categories-images">
          
                    <div id="perros">
                     <a href="{{url('adopcion/animales')}}">
                    <img src="images/perros.jpg" alt="Perros en adopción en Oviedo" class="perros" />
                    </a>   
                </div>

                    <div id="gatos">
                    <a href="{{url('adopcion/animales')}}">
                    <img src="images/gatos.jpg" alt="Gatos en adopción en Oviedo" class="gatos" />
                    </a>
                    </div>
              
                    
                    <div class="home-category-img-caption hidden-xs">
                        <br>
                        <br>

            
   <h1>¿Quiénes somos?</h1>
   <br>

 <strong>Adopcion-Oviedo</strong> dedicada a la recogida de animales perdidos o abandonados y nuestro objetivo es mejorar sus posibilidades de salud hasta su adopcion. <br>    



C/ Uria<br>
33003 - Oviedo<br><br>
<br>
<i class="far fa-clock"></i>
Horario:<br><br>
De lunes a sabado de 10:00 a 21:00 horas<br><br>


<i class="fas fa-phone-square-alt"></i>
985000000




</p>
 </div>
 <div class="flex  w-1/2 justify-center h-full">
<div class="flex  ">
 <img  src="{{ url('images/inicio.jpg') }}" alt="">
 </div>
 </div>

 </div>



 
    

    <footer class="mt-12">
<div class="max-w-full text-center bg-blue-900 text-white p-4">
    <div class="text-lg font-bold">Adopcion-Oviedo<!--<a class="hover:underline" href="https://prueba.com/" target="_blank">Ruben Suarez</a>--></div>
</div>
</footer> 

</div>
</body>
</html>