@foreach ($comments as $com)
<div class="container">
    <div class="row">
        <div class="col-md-3">
            {{ $com->created_at }}

            {{ $com->username }}

        </div>
        <div class="col-md-8">
            {{$com->content}}
        </div>
        <div class="col-md-1">
            <form action="/com_plus" method="POST"><input type="hidden" name="com_id" value="{{$com->id}}"> <input
                    type="hidden" name="_token" value="{{ csrf_token() }}"><button type="submit"
                    class="btn btn-success">+</button></form>
            <h6>{{$com->score}}</h6>
            <form action="/com_minus" method="POST"><input type="hidden" name="com_id" value="{{$com->id}}"> <input
                    type="hidden" name="_token" value="{{ csrf_token() }}"><button type="submit"
                    class="btn btn-danger">-</button></form>
                    @if ( $bug[0]->fixed == 0 &&  Auth::user() != null && Auth::user() -> name == $bug[0] ->username)
                    <form action="/fixedbyuser" method="post">
                        <input type="hidden" name="userID" value="{{ $bug[0]->userID }}">
                        <input type="hidden" name="commentUsername" value="{{ $com->username }}">
                        <input type="hidden" name="commentID" value="{{ $com->id }}">
                        <input type="hidden" name="id" value="{{ $bug[0]->id }}">
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
                        <h4 style="background-color: green;">Ten komentarz naprawił to gówno</h4>
                    @endif

        </div>
    </div>
</div>
@endforeach
@guest
<p><a href="{{route('login')}}">Zaloguj się</a>, aby dodać komentarz</p>
@else
<form action="/commadd" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="username" value="{{ Auth::user()->name }}">
    <input type="hidden" name="bug_id" value="{{ $bug[0]->id }}">
    <textarea name="content" class="form-control" id="" rows="10"></textarea>
    <input type="submit" class="btn btn-primary">
</form>
@endguest
