@include ('base_beg')

<h4>Użytkownik: {{$user[0] -> name}}</h4>
<h5>E-Mail: {{$user[0] -> email}}</h5>

<br>

<h6>
    Twoje bugi:
</h6>
@foreach ($myBugs as $list_el)
                    <a href="/view/{{ $list_el->id }}">
                        <div class="row">
                        <div class="col-md-1">{{ $list_el->username}}</div>
                        <div class="col-md-2">{{ $list_el->name}}</div>
                        <div class="col-md-4">{{ $list_el->desc}}</div>
                        <div class="col-md-4">{{ $list_el->situation}}</div>
                        <div class="col-md-1">{{ $list_el->created_at}}</div>
                        </div></a>
 @endforeach
 {{ $myBugs->links() }}

 <h6>Twoje komentarze: </h6>

 @foreach ($uComm as $com)
 <div class="container">
     <div class="row">
         <div class="col-md-1">
             <p>Do buga: </p>
                <a href="/view/{{ $com->for_id }}">{{ $com->for_id }}</a>
         </div>
         <div class="col-md-2">
             {{ $com->created_at }}

             {{ $com->username }}

         </div>
         <div class="col-md-8">
             {{$com->content}}
         </div>
         <div class="col-md-1">
                     @if ( $myBugs[0]->fixed == 0 &&  Auth::user() != null && Auth::user() -> name == $myBugs[0] ->username)
                     <form action="/fixedbyuser" method="post">
                         <input type="hidden" name="userID" value="{{ $myBugs[0]->userID }}">
                         <input type="hidden" name="commentUsername" value="{{ $com->username }}">
                         <input type="hidden" name="commentID" value="{{ $com->id }}">
                         <input type="hidden" name="id" value="{{ $myBugs[0]->id }}">
                         <input type="hidden" name="_token" value="{{ csrf_token() }}">
                         <button type="submit" class="btn btn-success">Naprawiono!</button>
                     </form>
                     <form action="/comdel" method="post">
                        <input type="hidden" name="comID" value="{{ $com->id }}">
                        <input type="hidden" name="bugID" value="{{ $com->for_id }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-danger">Usuń!</button>
                    </form>
                     @elseif ($com -> fixes == 1)
                         <h4 style="background-color: green;">Ten komentarz naprawił</h4>
                     @endif

         </div>
     </div>
 </div>
 @endforeach

@include ('base_end')
