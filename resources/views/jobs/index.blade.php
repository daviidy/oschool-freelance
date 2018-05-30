@extends('layouts.app')
@section('title', 'Liste des Jobs Oschool')
@section('content')
    <h1 class="ml-1 text-center page-title">Tous les jobs Oschool</h1>
    <div class="big-bloc-jobs-parent">
        @foreach ($jobs as $job)
            <section class="col-md-12 pb-3">

              <div class="container">


                  <div class="big-bloc-jobs">


                    <div class="jobs-bloc">

                      <div class="row"> <!-- rangee d'un bloc -->

                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6"> <!--infos de gauche-->

                          <div class="jobs-list">

                            <p class="job-title">
                              <a href="{{ route('jobs.show', $job) }}">
                                {{ $job->title }}
                              </a>
                            </p>

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
                                <p class="nav-link disabled jobs-details">Propositions: {{ $job->number_proposals }}</p>
                              </li>
                            </ul>

                          </div>

                        </div>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6"><!--infos de droite-->

                          <div class="jobs-list job-price-section">

                            <h3 class="job-price">{{ $job->price }} FCFA</h1>

                            <a href="{{ route('jobs.show', $job) }}">
                            <button type="button" class="btn btn-outline-primary">Postuler</button>
                            </a>



                          </div>

                        </div>

                      </div> <!--fin rangee d'un bloc-->

                      </div><!--fin jobs-bloc -->

                  </div> <!--fin big-bloc-jobs-->






                  </div><!--fin div container -->

            </section>
        @endforeach


    </div>
    <div class="row justify-content-center">

      {{ $jobs->links() }}

    </div>


@endsection
