@extends('layouts/app')

    @section('contenu')

    @include('partials.navbar')
    
    <h1 class="text-cyan-600">ImageShare</h1>
    @foreach($builds as $build)
        <h4>{{$build->title}}</h4>
        <h4>{{$build->Descprition}}</h4>
        <h4>{{$build->auteur}}</h4>
    @endforeach
    <a href=""><img src="" alt="" sizes="" srcset=""></a>
    @endsection
