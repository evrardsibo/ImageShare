@extends('layouts.app')

    @section('contenu')
    @include('partials.navbar')
        <h1>Details</h1>
        <img src="{{Storage::url($build->image->avatar)}}" alt="plage">
        <h3>Titre</h3>
        <h4>{{$build->title}}</h4>
        <h3>Descprition</h3>
        <h4>{{$build->Descprition}}</h4>
        <h3>Auteur</h3>
        <h4>{{$build->auteur}}</h4>
        
        <hr>
      
        <form action="{{route('build.store')}}" method="post">
        @csrf
            <input type="hidden" name="image_id" value="{{$build->image->id}}">
            <label for="">commentaire</label><br>
            <textarea name="commentaire" id="" cols="20" rows="10"></textarea>
            <button type="submit" class="bg-blue-600">Envoyer</button>

           

        </form>
        
        
    @endsection