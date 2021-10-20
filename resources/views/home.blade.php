@extends('layouts/app')

    @section('contenu')

    @include('partials.navbar')
    
    <h1 class="text-cyan-600">ImageShare</h1>
    @foreach($builds as $build)
        <a href="{{ route('detail.detail',['id'=> $build->id])}}"><img src="{{Storage::url($build->image->avatar)}}" alt="plage"></a>
        <h4>{{$build->Descprition}}</h4>
        
        
    @endforeach
    
    @endsection
