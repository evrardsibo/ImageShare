            
            @extends('layouts.app')
            @section('contenu')
                <h1>Creer Image</h1>
                @if($errors->any())
                    @foreach($errors->all() as $error)
                    <h6 class="text-red-500">{{$error}}</h6>
                    @endforeach
                @endif
            <form action="{{route('build.store')}}" method="post" enctype="multipart/form-data">

            @csrf

                    <label for="">Titre</label><br>
                    <input type="text" name="title" id=""><br>
                    <label for="">Descprition</label><br>
                    <input type="text" name="Descprition" id=""><br>
                    <label for="">Auteur</label><br>
                    <input type="text" name="auteur" id=""><br><br>
                    <input type="file"id="avatar" name="avatar"accept="image/png, image/jpeg"><br><br>
                    <button type="submit" class="bg-blue-600">Envoyer</button>
                    
            </form>



            @endsection