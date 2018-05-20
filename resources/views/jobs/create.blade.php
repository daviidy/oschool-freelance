@extends('layouts.app')
@section('title', 'Ajouter un job')
@section('content')

<div class="row justify-content-center">
  <div class="col-md-6">
    <h1 class="h4 text-uppercase">Ajouter un nouveau job</h1>

    <form enctype="multipart/form-data" class="card" action="{{ route('jobs.store') }}" method="post">
      <div class="card-block">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="title">Titre: </label>
          <input type="text" class="form-control" name="title" placeholder="Nom du job">
        </div>
        <div class="form-group">
          <label for="type">Type:</label>
          <select name="type" class="selectpicker form-control" id="type">
            <option>A distance</option>
            <option>Au bureau</option>
          </select>
        </div>
        <div class="form-group">
          <label for="price">Prix proposé par le client</label>
          <input type="text" class="form-control" name="price" placeholder="Prix">
        </div>
        <div class="form-group">
          <label for="prix">Description du job:</label>
          <textarea name="description" class="form-control" rows="5" id="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">
          Créer
        </button>
      </div>
    </form>
  </div>
</div>
@endsection
