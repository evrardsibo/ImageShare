@extends('layouts/app')

    @section('contenu')

    @include('partials.navbar')
    
    <h1 class="text-cyan-600">ImageShare</h1>
    @foreach($builds as $build)
        <h4><a href="{{ route('detail.detail',['id'=> $build->id])}}">{{$build->title}}</a></h4>
        
        
    @endforeach
    <a href=""><img src="" alt="" sizes="" srcset=""></a>
    @endsection
