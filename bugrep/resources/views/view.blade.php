@include('base_beg')

<div class="row">
    <div class="col-md-12">
        {{-- <h2>{{ $bug->username }}</h2> //Z jakiegoś powodu tu nie działa, a w list działą --}}
        <h2>{{ $bug }}</h2>

    </div>
</div>


@include('base_end')
