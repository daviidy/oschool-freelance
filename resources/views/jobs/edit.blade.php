@extends('layouts.app')
@section('title', "Modifier $woman->name" )
@section('main')

<div class="row justify-content-center">
  <div class="col-md-6">
    <h1 class="h4 text-uppercase">Modifier un job</h1>

    <div class="card">
      <div class="card-block">
        <h1 class="h3 pb-1">{{ $job->title }}</h1>
        <form enctype="multipart/form-data" action="{{ url('women', $woman) }}" method="post">
          {{ csrf_field() }}
          {{ method_field('patch') }}
          <div class="form-group">
            <label for="title">Nom</label>
            <input type="text" class="form-control" name="title" value="{{ $job->title }}">
          </div>
          <div class="form-group">
            <label for="type">Type:</label>
            <select class="selectpicker form-control" id="type">
              <option>A distance</option>
              <option>Au bureau</option>
            </select>
          </div>
          <div class="form-group">
            <label for="price">Prix proposé par le client</label>
            <input type="price" class="form-control" name="price" value="{{ $job->price }}">
          </div>
          <div class="form-group">
            <label for="prix">Description du job:</label>
            <textarea class="form-control" rows="5" id="description">
          </div>
          <button type="submit" class="btn btn-primary">
            Mettre à jour les infos du job
          </button>
        </form>
      </div>
    </div>
  </div>

</div>

@endsection
