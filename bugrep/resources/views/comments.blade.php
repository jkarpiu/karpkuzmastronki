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
