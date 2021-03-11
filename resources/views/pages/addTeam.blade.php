@extends('template.main')
@section('content')
<div class="container">
    <form>
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nom : </label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Ville : </label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Pays : </label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre de joueur Maximum : </label>
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <h1> Nombre maximum de joueur par roles</h1>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Avant : </label>
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Centraux : </label>
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Arriere : </label>
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Remplacant : </label>
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
    
@endsection