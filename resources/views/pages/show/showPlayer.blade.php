@extends('template.main')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="card bg-dark text-white" style="width: 18rem;">
            <img src="{{ asset('storage/' . $show->photos->url) }}" class="card-img-top" alt="...">
            <div class="card-body">
                <div>
                    <h1 class="text-center card-title">{{ $show->teams->nom }}</h1>
                </div>
                <h5 class="card-title">Nom : {{ $show->lastname }}</h5>
                <h5 class="card-title">Prénom : {{ $show->firstname }}</h5>
                <h5 class="card-title">Age : {{ $show->age }}</h5>
                <h5 class="card-title">Téléphone : {{ $show->phone }}</h5>
                <h5 class="card-title">Email : {{ $show->mail }}</h5>
                <h5 class="card-title">Pays : {{ $show->country }}</h5>
                <p class="card-title">Genre : {{$show->genders->gender}}</p>
                <p class="card-title">Role : {{$show->roles->role}}</p>
                <div class="d-flex align-items-center">
                    <a href="#" class="btn btn-success">Edit</a>
                    <form action="" method="POST">
                        @method("DELETE")
                        @csrf
                        <button class="btn btn-danger m-1" type="submit">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
