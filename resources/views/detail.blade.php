@extends('layouts.app')

    @section('contenu')
    
    <div class="container"> 
        <div class="img">
            <img src="{{Storage::url($build->image->avatar)}}" alt="plage">
        </div>
        <div class="info">
            <h1>Details</h1>
            <h3>Titre</h3>
            <h4>{{$build->title}}</h4>
            <h3>Descprition</h3>
            <h4>{{$build->Descprition}}</h4>
            <h3>Auteur</h3>
            <h4>{{$build->auteur}}</h4>
        </div>
        
    </div>

    @endsection
        
    <div>
        <form action="{{route('build.store')}}" method="post">
        @csrf
            <input type="hidden" name="build_id" value="{{$build->id}}">
            <label for="">commentaire</label><br>
            <textarea name="commentaire" id="" cols="20" rows="10"></textarea>
            <button type="submit" class="bg-blue-600">Envoyer</button>
        </form>

    </div>
       

    
    
    
    
        
