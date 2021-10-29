
<form action="{{route('build.store')}}" method="post">
           @csrf
               <input type="hidden" name="build_id" value="{{$build->id}}">
               <label for="">commentaire</label><br>
               <textarea name="commentaire" id="" cols="20" rows="10"></textarea>
               <button type="submit" class="bg-blue-600">Envoyer</button>
           </form>