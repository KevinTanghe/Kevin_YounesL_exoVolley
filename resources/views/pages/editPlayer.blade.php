@extends('template.main')

<div class="container mt-5">
    <form>
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nom : </label>
          <input type="text" value="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Prenom : </label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
           
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Age : </label>
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Telephone : </label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            
          </div>
        
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email : </label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Genre : </label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">Homme</option>
                <option value="2">Femme</option>
            </select>
            
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Role :</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">Avant</option>
                <option value="2">Centraux</option>
                <option value="2">Arriere</option>
                <option value="2">Remplacant</option>
                
                
            </select>
            
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Genre</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                {{-- @foreach ($collection as $item)
                    
                @endforeach --}}
                <option value="1">Equipe 1</option>
                <option value="2">Equipe 2</option>
            </select>
            
          </div>

        
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>