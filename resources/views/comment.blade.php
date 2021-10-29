
<div class="formContainer">
    <form action="{{route('build.store')}}" method="post">
       @csrf
           <input type="hidden" name="build_id" value="{{$build->id}}">
           <label for="">Commentaire</label><br>
           <textarea name="commentaire" id="" cols="20" rows="5"></textarea>
           <button type="submit" class="bg-blue-600">Envoyer</button>
    </form>

</div>