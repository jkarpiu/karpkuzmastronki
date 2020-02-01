@include('base_beg')

@foreach ($finded as $item)
<a href="/view/{{ $item->id }}">
    <div class="row">
    <div class="col-md-1">{{ $item->username}}</div>
    <div class="col-md-2">{{ $item->name}}</div>
    <div class="col-md-4">{{ $item->desc}}</div>
    <div class="col-md-4">{{ $item->situation}}</div>
    <div class="col-md-1">{{ $item->created_at}}</div>
    </div></a>
@endforeach

@include('base_end')
