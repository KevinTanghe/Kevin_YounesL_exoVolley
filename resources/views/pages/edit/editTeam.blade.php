@extends('template.main')
@section('content')
<div class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $item)
                    <li>{{$item}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/team/{{$edit->id}}" method="POST">
        @method('PATCH')
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom : </label>
            <input type="text" name="nom" value="{{ old('nom') ? old('nom') : $edit->nom}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Ville : </label>
            <input type="text" name="city" value="{{ old('city') ? old('city') : $edit->city}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Pays : </label>
            <input type="text" name="country" value="{{ old('country') ? old('country') : $edit->country}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre de joueur Maximum : </label>
            <input type="number" name="numberMax" value="{{ old('numberMax') ? old('numberMax') : $edit->numberMax}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection