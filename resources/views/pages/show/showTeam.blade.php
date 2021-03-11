@extends('template.main')
@section('content')
    <div class="container-fluid bg-dark text-white">
        <h1 class="text-center pt-5">{{ $show->nom }}</h1>
        <p>Ville : {{ $show->city }}</p>
        <p> Pays : {{ $show->country }}</p>
        <p>Nombre de personne max dans l'équipe : {{ $show->numberMax }}</p>
        <div class="row">
            <div class="col-3 d-flex flex-column align-items-center">
                <h2>Avant</h2>
                @foreach ($player as $item)
                    @if ($item->team_id == $show->id && $item->roles->role == 'Avant')
                        <div class="d-flex align-items-center mt-4">
                            <h5 class="mr-5">- {{ $item->firstname }}</h5>
                            <div class="d-flex">
                              <a class="btn btn-primary m-1" href="/player/{{$item->id}}">Show</a>
                          </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="col-3 d-flex flex-column align-items-center">
                <h2>Centraux</h2>
                @foreach ($player as $item)
                    @if ($item->team_id == $show->id && $item->roles->role == 'Centraux')
                        <div class="d-flex align-items-center mt-4">
                            <h5 class="mr-5">- {{ $item->firstname }}</h5>
                            <div class="d-flex">
                                <a class="btn btn-primary m-1" href="/player/{{$item->id}}">Show</a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="col-3 d-flex flex-column align-items-center">
                <h2>Arrière</h2>
                @foreach ($player as $item)
                    @if ($item->team_id == $show->id && $item->roles->role == 'Arrière')
                        <div class="d-flex align-items-center mt-4">
                            <h5 class="mr-5">- {{ $item->firstname }}</h5>
                            <div class="d-flex">
                              <a class="btn btn-primary m-1" href="/player/{{$item->id}}">Show</a>
                          </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="col-3 d-flex flex-column align-items-center">
                <h2>Remplacent</h2>
                @foreach ($player as $item)
                    @if ($item->team_id == $show->id && $item->roles->role == 'Remplacent')
                        <div class="d-flex align-items-center mt-4">
                            <h5 class="mr-5">- {{ $item->firstname }}</h5>
                            <div class="d-flex">
                              <a class="btn btn-primary m-1" href="/player/{{$item->id}}">Show</a>
                          </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
