                  

    @section('content')
    @extends('layouts.app')
  
    @section('title','Crear proyecto')
        <h1>Crear nuevo Proyecto</h1> 
        

        @include('partials.validation-errors')

        <form method="POST" action="{{ route('projects.store') }}">
            
            @include('projects._form',['btnText' => 'Guardar']) 

        </form>
     @endsection