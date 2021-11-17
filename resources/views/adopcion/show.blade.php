@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
 footer{
    position:fixed;
   left:0px;
   margin-top:10px;
   bottom:0px;
   height:50px;
   width:100%;
}


    </style>
</head>
<body>
@section('title','Libros'.$libro)
@section('content')


    <br>

    <img src="<?php echo asset('images/' . $libro->imagen); ?>" alt="{{$libro->imagen}}">
    <br>
    <h1><strong>Libro: {{$libro->titulo}}</strong></h1>
    <br>
    <p><strong>Autor: {{$libro->autor}}</strong></p>
    <br>
    <p><strong>Tema: {{$libro->tema}}</strong></p>
    <br>
    <p><strong>Unidades: {{$libro->unidades}}</strong></p>
    <br>
    <table>
    <tr>
    <form action="{{ route('libros.edit',$libro) }}" >
                    <td><input type="submit" name="editar" value="editar" class="bg-blue-500 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded" ></td>
                    </form>

                    <form action="{{ route('libros.eliminar',$libro) }}" method="post">
                    @csrf
                    @method('delete')
                    <td><input type="submit" name="eliminar" value="borrar" class="bg-red-500 hover:bg-red-500 text-white font-bold py-2 px-4 rounded" ></td>
                    </form>
                    <tr>

                    </table>
                    <br>
       <button class="bg-green-500 hover:bg-green-500 text-white font-bold py-2 px-4 rounded" ><a href="{{route('listado.index')}}">Volver al listado </a></button>

                    @endsection

</body>
</html>