@extends('layouts.app')
@section('title', "$job->title" )
@section('description',
         'Bienvenue sur Oschool Freelance ! Voici un job que nous te proposons: $job->title . Tu penses être qualifié pour ce job ? Postule maintenant dans ce cas !')

@section('content')

<div class="big-bloc-jobs-parent">

    <div class="container">

      <div class="big-bloc-jobs">

        <div class="jobs-bloc">

          <div class="row">
            <!-- rangee d'un bloc -->

            <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
              <!--infos de gauche-->

              <div class="jobs-list jobs-list-details">

                <div class="job-title-single">

                <h1 class="job-title">{{ $job->title }}</h1>
                @if(Auth::check())
                    @if (Auth::user()->isAdmin())

                <div class="" style="display: flex;">
                  <a href="{{ route('jobs.edit', $job) }}"><button class="btn-link fa fa-pencil"></button></a>
                  <form action="{{ route('jobs.destroy', $job) }}" method="post">
                      {{ csrf_field() }}
                      {{ method_field('delete') }}
                      <button class="fa fa-trash btn-link text-danger" type="submit"></button>
                </form>

                </div>
                    @endif
                @endif
                <ul class="nav">
                  <li class="nav-item">
                    <p class="nav-link disabled jobs-details">{{ $job->type }}</p>
                  </li>
                  <li class="nav-item">
                    <p class="nav-link disabled jobs-details">{{ $job->number_proposals }} propositions</p>
                  </li>
                </ul>

                </div>

                <div class="job-description">

                  <h2>Description du job</h2>

                  <div class="description">

                    {{ $job->description }}

                  </div>



                </div>

                <div class="proposal job-description">

                  <h2>Ta propostion</h2>

                  <!--
                  on recupere le tableau des utilisateurs et
                  des propositions.
                  On verifie ensuite qu'il n'y a
                  pas de propositions ayant et le user id actuel et le
                  job id actuel.
                  Si il y en a pas, on affiche le formulaire.
                  Sinon, on dit a l'utilisateur qu'il a déjà postulé au job
                -->

                @guest


                  <div class="">

                    <a class="nav-link" href="{{ route('login') }}"><button class="btn bouton-shadow" type="button" name="button">

                        Connecte toi pour postuler
                    </button></a>

                  </div>

                  @else



                      @if($test && $test == $job->id)



                        <div class="">

                          <button class="btn btn-outline-primary bouton-autres-jobs" style="background-color: transparent; color: #000;" type="button" name="button">
                              T'as déjà postulé à ce job !
                          </button>

                        </div>

                      @else
                        <form enctype="multipart/form-data" action="{{ route('proposals.store') }}" method="post"> 
                            {{ csrf_field() }}



                            <select name="job_id" class="form-control" required style="display: none;">
                                    <option value="{{ $job->id }}">Titre du job: {{ $job->title }}</option>
                            </select>
                            <select name="job_title" class="form-control" required style="display: none;">
                                    <option value="{{ $job->title }}">Titre du job: {{ $job->title }}</option>
                            </select>
                            <select name="user_id" class="form-control" required style="display: none;">
                                    <option value="{{ Auth::user()->id }}">Ton nom: {{ Auth::user()->name }}</option>
                            </select>
                            <div class="form-group">
                              <textarea name="text" placeholder="Dites ce que vous pouvez apporter, quand et pourquoi vous pouvez faire le job" class="form-control" rows="5" id="text"></textarea>
                            </div>
                            <div class="form-group">
                              <input type="text" class="form-control" name="price" placeholder="Mets ton prix">
                            </div>
                            <div class="form-group">
                              <input type="file" class="form-control" name="file" placeholder="Mets ton prix">
                            </div>
                            <button id="test" type="submit" class="btn btn-outline-primary">
                              Postuler
                            </button>
                        </form>

                    @endif








                    @endguest





                </div> <!--fin job description -->





              </div>

            </div>

            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
              <!--infos de droite-->

              <div class="jobs-list job-price-section">

                <h1 class="job-price">{{ $job->price }}</h1><p>FCFA</p>




              </div>

            </div>

          </div>
          <!--fin rangee d'un bloc-->

        </div>
        <!--fin jobs-bloc -->

      </div> <!-- fin big-bloc-jobs -->



    </div><!--fin div container -->

  </div><!--fin big-bloc-jobs-parent -->
@endsection
