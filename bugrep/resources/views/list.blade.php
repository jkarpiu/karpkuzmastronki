@include('base_beg')

<center> <h3>Lista nienaprawionych BUG-ów</h3> </center>

@foreach ($list as $list_el)
    <a href="/view/{{ $list_el->id }}">
    <div class="row">
    <div class="col-md-1">{{ $list_el->username}}</div>
    <div class="col-md-2">{{ $list_el->name}}</div>
    <div class="col-md-4">{{ $list_el->desc}}</div>
    <div class="col-md-4">{{ $list_el->situation}}</div>
    <div class="col-md-1">{{ $list_el->created_at}}</div>
    </div></a>
@endforeach

@include('base_end')
