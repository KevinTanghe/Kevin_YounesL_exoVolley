@extends('template.main')
@section('content')
    <div class="container mt-5">
        @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $item)
                    <li>{{$item}}</li>
                @endforeach
              </ul>
            </div>
        @endif
        <form action="/player" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nom : </label>
                <input type="text" name="lastname" value="{{old('lastname')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Prenom : </label>
                <input type="text" name="firstname" value="{{old('firstname')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Age : </label>
                <input type="number" name="age" value="{{old('age')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Telephone : </label>
                <input type="text" name="phone" value="{{old('phone')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email : </label>
                <input type="email" name="mail" value="{{old('mail')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Pays : </label>
                <input type="text" name="country" value="{{old('country')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Photo : </label>
                <input type="file" name="url" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Genre : </label>
                <select class="form-select" name="gender_id" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    @foreach ($genre as $item)
                        <option value="{{$item->id}}">{{$item->gender}}</option>
                    @endforeach
                </select>

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Role :</label>
                <select class="form-select" name="role_id" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    @foreach ($role as $item)
                      <option value="{{$item->id}}">{{$item->role}}</option>
                    @endforeach


                </select>

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Equipe</label>
                <select class="form-select" name="team_id" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    @foreach ($team as $item)
                      <option value="{{$item->id}}">{{$item->nom}}</option>
                    @endforeach
                </select>

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
