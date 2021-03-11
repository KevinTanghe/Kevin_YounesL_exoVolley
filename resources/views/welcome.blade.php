@extends('template.main')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($team as $item)
                <div class="col-4 text-white">
                    <div class="card bg-dark " style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->nom }}</h5>
                            <p class="card-text">{{ $item->city }}</p>
                            <p class="card-text">{{ $item->country }}</p>
                            <p class="card-text">{{ $item->numberMax }}</p>
                            <div class="d-flex">
                                <a href="/team/{{ $item->id }}" class="btn btn-primary m-1">Show</a>
                                <a href="/team/{{ $item->id }}/edit" class="btn btn-success m-1">Edit</a>
                                <form action="/team/{{ $item->id }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger m-1" type="submit">Delete</button>  
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @if ($loop->iteration % 3 == 0)
        </div>
        <div class="row">
            @endif
            @endforeach
        </div>
    </div>

@endsection
