@extends('layouts.app')
@section('title', 'Devenez freelance et faites le job de vos rêves !')
@section('description',
         'Bienvenue sur Oschool Freelance, la plateforme Ouest Africaine pour travailler en tant que freelance dans le domaine du Développement web, mobile, de logiciels, Marketing et Social Media. Choisis un job parmi des centaines.
         Postule et commence à travailler avec nous !')
@section('content')

<section class="section-slider"> <!--debut section 1-->

  <div class="container-fluid slider">

    <div class="row" style="margin-bottom: 4rem;">

      <div class="col-12 col-sm-12 col-md-12 col-lg-12">

        <h1 class="intro-heading">Les meilleurs jobs, pour vivre la vie de vos rêves</h1>

      </div>

      <div style="color: #fff;" class="col-12 col-sm-12 col-md-12 col-lg-12">

        <h5>Devenir <i class="italic-slider">freelance!</i>  est plus facile avec Oschool</h5>

      </div>
    </div>

    <div style="color: #fff;" class="row">

      <div class="col-12 col-sm-12 col-md-4 col-lg-4">

        <div class="espace-col">

          <img src="/img/choices.png" width="90" alt="">
          <p class="paragraphe-icon">Choisis un job parmi des centaines</p>

        </div>



      </div>

      <div class="col-12 col-sm-12 col-md-4 col-lg-4">

        <div class="espace-col">

          <img src="/img/list.png" width="90" alt="">
          <p class="paragraphe-icon">Postule à ce job</p>

        </div>

      </div>

      <div class="col-12 col-sm-12 col-md-4 col-lg-4">

        <div class="espace-col">

          <img src="/img/chatting.png" width="90" alt="">
          <p class="paragraphe-icon">Et commence à travailler avec nous !</p>

        </div>

      </div>

    </div>

  </div>

</section><!--fin section 1-->

<section class="job-categories"><!--debut section 2-->
  <div class="container-fluid">

    <div class="row">

      <div class="col-12 col-sm-12 col-md-12 col-lg-12">

        <h2 class="category-title" style="text-align:center!important;">Trouve le job qui te correspond le mieux</h2>

      </div>

    </div>

    <div class="row"><!--debut row des category-->

      <div class="border-category col-12 col-sm-12 col-md-4 col-lg-4">

        <div class="espace-col">

          <img src="/img/coding.png" width="90" alt="">
          <p class="paragraphe-icon" class="text-center">Développement web et mobile</p>

        </div>

      </div>

      <div class="border-category col-12 col-sm-12 col-md-4 col-lg-4">

        <div class="espace-col">

          <img src="/img/light-bulb.png" width="90" alt="">
          <p class="paragraphe-icon" class="text-center">Développement de logiciels</p>

        </div>

      </div>

      <div class="col-12 col-sm-12 col-md-4 col-lg-4">

        <div class="espace-col">

          <img src="/img/megaphone.png" width="90" alt="">
          <p class="paragraphe-icon" class="text-center">Marketing et Social media</p>

        </div>

      </div>



    </div> <!--fin row des category-->

    <div class="row">

      <div class="div-button">

        <a href="{{ route('jobs.index') }}">

          <button class="btn btn-outline-primary bouton-homepage">
            Voir les jobs
          </button>

        </a>

      </div>

    </div>

  </div>
</section><!--fin section 2-->


<section class="job-categories" style="background: #000; color: #fff; padding: 0;"><!--debut section 3-->
  <div class="container-fluid">

    <div class="row">

      <div class="col-12 col-sm-12 col-md-12 col-lg-12">

        <h2 style="color: #fff;" class="partner-title">En partenariat avec...</h2>

      </div>

    </div>

    <div class="row"><!--debut row des category-->

      <div class="col-12 col-sm-12 col-md-12 col-lg-3">

        <div class="">

          <img src="/img/rikudo tech2 blanc 200px.png" alt="">

        </div>

      </div>

      <div class="col-12 col-sm-12 col-md-12 col-lg-3">

        <div class="">

          <img src="/img/rikudo media blanc 200px.png" alt="">

        </div>

      </div>

      <div class="col-12 col-sm-12 col-md-12 col-lg-3">

        <div class="">

          <img src="/img/logo5.png" alt="">

        </div>

      </div>

      <div class="col-12 col-sm-12 col-md-12 col-lg-3">

        <div class="">

          <img src="/img/logo-oschool-partner.png" alt="">

        </div>

      </div>



    </div> <!--fin row des category-->
  </div>
</section><!--fin section 2-->

@endsection
