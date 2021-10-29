@extends('layouts.app')

    @section('contenu')
    
    <div class="container"> 
        <div class="img">
            <img src="{{Storage::url($build->image->avatar)}}" alt="plage">
        </div>
        <div class="info">
            <h1 class="titleCard">Details</h1>
            <div class="titleGroup">
                <h3>Titre</h3>
                <h4>{{$build->title}}</h4>
            </div>
            <div class="desGroup">
                <h3>Descprition</h3>
                <h4>{{$build->Descprition}}</h4>
            </div>
            <div class="autGroup">
                <h3>Auteur</h3>
                <h4>{{$build->auteur}}</h4>
            </div>
        </div>
        
    </div>

    @extends('comment')
    @endsection
        
    
       

    
    
    
    
        
