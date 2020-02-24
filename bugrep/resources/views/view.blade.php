@include('base_beg')

<div class="row">
    <div class="col-md-12">
        <h6>Nazwa: </h6>
        <h2>{{ $bug[0]->name }}</h2>
        <small>ID: {{ $bug[0]->id  }}</small>
        <p>Utworzone przez: {{ $bug[0] -> username }}</p>
        <p>Utworzono: {{$bug[0] -> created_at}}</p>
        @if ($bug[0]->fixed == 0)
            <h4 style="background-color: red;">Do naprawienia</h4>
            @if ( Auth::user() != null && Auth::user() -> name == $bug[0] ->username)
            <form action="/fixed" method="post">
                <input type="hidden" name="userID" value="{{ $bug[0]->userID }}">
                <input type="hidden" name="id" value="{{ $bug[0]->id }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-success">Naprawiono!</button>
            </form>
            @endif
        @else
        <h4 style="background-color: green;">Naprawiony {{ $bug[0] -> updated_at }}</h4>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
    <h6>Opis: </h6>
    <p>{{ $bug[0]->desc }}</p></div>
</div>

<div class="row">
    <h6>W sytuacji: </h6>
    <p>{{ $bug[0]->situation }}</p>
</div>

@include('comments')

@include('base_end')
