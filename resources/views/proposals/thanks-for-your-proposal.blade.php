
@extends('layouts.app')
@section('title', "Merci !" )
@section('content')

<div class="container">

  <div class="big-bloc-jobs-parent">

    <div class="row">



    <div class="col-12 col-sm-12 col-md-4 offset-md-4 col-lg-4">

      <div class="card-thanks">

      <div class="">

        <h1>C'est fait !</h1>

      </div>

      <img src="/img/dave-reading.png" width="200" alt="">

      <div class="pargraph-thanks">

        <p>Votre proposition a été soumise. Vous serez contacté
        si vous avez été retenu(e) pour ce job :)</p>

      </div>

    </div>

    </div>

    </div> <!--fin row-->

    <div class="row">

    <div class="col-12 col-sm-12 col-md-4 offset-md-2 col-lg-4">

    <button class="bouton-autres-jobs" type="button" name="button">Voir les autres jobs</button>

    </div>

    <div class="col-12 col-sm-12 col-md-4 col-lg-4">

    <button class="btn btn-outline-primary bouton-autres-jobs" style="background-color: transparent; color: #000;" type="button" name="button">Allez à mon tableau de bord</button>

    </div>

    </div>

  </div>

</div>

@endsection
