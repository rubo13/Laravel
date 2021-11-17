    
<form class="w-full max-w-lg border-4 " method="POST" action="{{ route('adopcion.animales') }}" enctype="multipart/form-data">
    @csrf

     <h1 class="font-semibold py-5 text-blue mb-10 bg-blue-900 text-white px-5"> Formulario </h1>
    
    <div class="flex flex-wrap -mt-10">
        <div class="w-full px-5">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold my-5" for="tipo">
                {{ __("Tipo:") }}
            </label>
            <input name="tipo"  class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight
             focus:outline-none focus:bg-white focus:border-gray-500" id="tipo" type="text">
            @error("tipo")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    <div class="flex flex-wrap mt-3 ">
        <div class="w-full px-5">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold my-5" for="raza">
                {{ __("Raza:") }}
            </label>
            <input name="raza"  class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight
             focus:outline-none focus:bg-white focus:border-gray-500" id="raza" type="text">
            @error("raza")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    <div class="flex flex-wrap mt-3 ">
        <div class="w-full px-5">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold my-5" for="nombre">
                {{ __("Nombre:") }}
            </label>
            <input name="nombre"  class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight 
            focus:outline-none focus:bg-white focus:border-gray-500" id="nombre" type="text">
            @error("nombre")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    <div class="flex flex-wrap mt-3 ">
        <div class="w-full px-5">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold my-5" for="edad">
                {{ __("Edad:") }}
            </label>
            <input name="edad"  class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight
             focus:outline-none focus:bg-white focus:border-gray-500" id="edad" type="text">
            @error("edad")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    

    
    <div class="flex flex-wrap mt-3 ">
        <div class="w-full px-5">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold my-5" for="Nombre Cliente">
                {{ __("Nombre Cliente:") }}
            </label>
            <input name="Nombre Cliente"  class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight
             focus:outline-none focus:bg-white focus:border-gray-500" id="Nombre Cliente" type="text">
            @error("Nombre Cliente")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    
    <div class="flex flex-wrap mt-3 ">
        <div class="w-full px-5">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold my-5" for="apellidos">
                {{ __("Apellidos:") }}
            </label>
            <input name="apellidos"  class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight
             focus:outline-none focus:bg-white focus:border-gray-500" id="apellidos" type="text">
            @error("apellidos")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    
    <div class="flex flex-wrap mt-3 ">
        <div class="w-full px-5">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold my-5" for="direccion">
                {{ __("Direccion:") }}
            </label>
            <input name="direccion"  class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight
             focus:outline-none focus:bg-white focus:border-gray-500" id="direccion" type="text">
            @error("direccion")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
            </div>
            @enderror
        </div>

    </div>
    <div class="flex flex-wrap mt-3 ">
        <div class="w-full px-5">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold my-5" for="localidad">
                {{ __("Localidad:") }}
            </label>
            <input name="localidad"  class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight
             focus:outline-none focus:bg-white focus:border-gray-500" id="localidad" type="text">
            @error("localidad")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    <div class="flex flex-wrap mt-3 ">
        <div class="w-full px-5">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold my-5" for="telefono">
                {{ __("Telefono:") }}
            </label>
            <input name="telefono"  class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight
             focus:outline-none focus:bg-white focus:border-gray-500" id="telefono" type="text">
            @error("telefono")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    <div class="flex flex-wrap mt-3 ">
        <div class="w-full px-5">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold my-5" for="email">
                {{ __("Email:") }}
            </label>
            <input name="email"  class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight
             focus:outline-none focus:bg-white focus:border-gray-500" id="email" type="text">
            @error("email")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    <div class="flex flex-wrap mt-3 ">
        <div class="w-full px-5">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold my-5" for="Fecha_adopcion">
                {{ __("Fecha_adopcion:") }}
            </label>
            <input name="Fecha_adopcion"  class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight
             focus:outline-none focus:bg-white focus:border-gray-500" id="Fecha_adopcion" type="text">
            @error("Fecha_adopcion")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    <div class="flex flex-wrap mt-3 ">
        <div class="w-full px-5">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold my-5" for="Fecha_devolucion">
                {{ __("Fecha_devolucion:") }}
            </label>
            <input name="Fecha_devolucion"  class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight
             focus:outline-none focus:bg-white focus:border-gray-500" id="Fecha_devolucion" type="text">
            @error("Fecha_devolucion")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    <div class="flex flex-wrap mt-3 ">
        <div class="w-full px-5">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold my-5" for="observaciones">
                {{ __("Observaciones:") }}
            </label>
            <input name="observaciones"  class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight
             focus:outline-none focus:bg-white focus:border-gray-500" id="observaciones" type="text">
            @error("observaciones")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>

    <div class="md:flex md:items-center">
        <div class="md:w-1/3">
            <button class="shadow bg-teal-400 mt-5 hover:bg-teal-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                {{ 'Añadir' }}
            </button>
        </div>
    </div>
</form>
</div>