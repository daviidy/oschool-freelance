@extends('layouts.app')
@section('title', "Modifier $job->title" )
@section('content')

<div class="row justify-content-center" style="padding: 50px;">
  <div class="col-md-6">
    <i><h1 class="h4 text-uppercase">Modifier le job: {{ $job->title }}</h1></i> 

        <form enctype="multipart/form-data" action="{{ url('jobs', $job) }}" method="post">
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
            <textarea class="form-control" rows="5" id="description"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">
            Mettre à jour les infos du job
          </button>
        </form>
  </div>

</div>

@endsection
