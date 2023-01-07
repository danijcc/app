  {{-- Contenido repetible en todas las plantillas en este caso traemos con
    @extends(layout) todo el contenido de la plantilla o vista layout --}}
    @extends('layouts.app')
    {{-- implementamos la directiva @yield("") aqui a travez de @section('content')
    este contenido sera unico para cada web y dinamico para la directiva en el archivo
    layout --}}
    @section('title','About')
    @section('content')
    <h1>{{ __('About')}}</h1>
    @endsection
