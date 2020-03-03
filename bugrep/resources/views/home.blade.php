@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>


                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Twoje Bugi:
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

            </div>
            {{ $myBugs->links() }}
        </div>
    </div>
</div>
@endsection
