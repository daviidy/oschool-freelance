@extends('layouts.app-dashboard')

@section('title', 'Profil Utilisateur')
@section('description',
         'Bienvenue sur ton profil utilisateur. Ici tu pourras modifier ton profil, et voir les états de tes différentes propositions')

@section('content')

<body>
    <div class="wrapper">
        @include('layouts.sidebar-dashboard')
        <div class="main-panel">
        @include('layouts.navbar-dashboard')



            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Modiifer mon profil</h4>
                                </div>
                                <div class="card-body">

                                  <form enctype="multipart/form-data" action="{{ url('users', $user) }}" method="post">
                                  {{ csrf_field() }}
                                  {{ method_field('patch') }}

                                  @if ($errors->any())
                                      <div class="alert alert-danger">
                                          <ul>
                                              @foreach ($errors->all() as $error)
                                                  <li>{{ $error }}</li>
                                              @endforeach
                                          </ul>
                                      </div>
                                  @endif

                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Identifiant</label>
                                                    <input type="text" class="form-control" disabled="" placeholder="Company" value="{{ Auth::user()->name }}">
                                                </div>
                                            </div>

                                            <div class="col-md-6 pl-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Adresse Mail</label>
                                                    <input type="email" class="form-control" placeholder="Email" disabled value="{{ Auth::user()->email }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Nom</label>
                                                    <input type="text" name="last_name" class="form-control" placeholder="Last Name" value="{{$user->last_name}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6 pl-1">
                                                <div class="form-group">
                                                    <label>{{$user->first_name}}</label>
                                                    <input type="text" name="first_name" class="form-control" placeholder="First Name" value="{{$user->first_name}}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Numéro mobile</label>
                                                    <input type="text" name="number_tel" class="form-control" placeholder="Exemple: 58450600" value="{{$user->number_tel}}">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Titre</label>
                                                    <select name="job_title" class="form-control">
                                                            <option value="Développeur web et mobile">Développeur web</option>
                                                            <option value="Développeur de logiciels">Développeur de logiciels</option>
                                                            <option value="Community manager">Community manager</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Linkedin</label>
                                                    <input type="text" name="linkedin" class="form-control" placeholder="Linkedin" value="{{$user->linkedin}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6 pr-1" style="padding:35px; padding-left:0;">

                                              <button href="#" class="btn btn-simple btn-link btn-icon">
                                                  <i class="fa fa-linkedin-square" style="font-size: 25px"></i>
                                              </button>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Facebook</label>
                                                    <input type="text" name="facebook" class="form-control" placeholder="Facebook" value="{{$user->facebook}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6 pr-1" style="padding:35px; padding-left:0;">

                                              <button href="#" class="btn btn-simple btn-link btn-icon">
                                                  <i class="fa fa-facebook-square" style="font-size: 25px"></i>
                                              </button>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 pr-1">

                                                <div class="form-group">
                                                    <label>CV en ligne</label>
                                                    <input type="text" name="lien_cv" class="form-control" placeholder="CV en ligne" value="{{$user->lien_cv}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6 pr-1" style="padding:35px; padding-left:0;">

                                              <button href="#" class="btn btn-simple btn-link btn-icon">
                                                  <i class="fa fa-address-card-o" style="font-size: 25px"></i>
                                              </button>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <textarea name="description" rows="5" class="form-control" placeholder="">{{$user->description}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info btn-fill pull-right">Mettre à jour le profil</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-user">
                                <div class="card-image">
                                    <img src="/assets/img/default-cover.jpg" alt="...">
                                </div>
                                <div class="card-body">
                                    <div class="author">
                                        <a href="#">
                                            <img class="avatar border-gray" src="/img/usersPhotos/{{ Auth::user()->image }}" alt="...">
                                            <h5 class="title">{{ Auth::user()->name }}</h5>
                                        </a>
                                        <p class="description">
                                            <b>Freelancer</b>
                                        </p>
                                    </div>

                                    <div class="row text-center">
                                        <form class="" enctype="multipart/form-data" action="/profile" method="post">
                                          {{ csrf_field() }}
                                          <label for="">Envoyer une autre photo</label>
                                          <input class="col-md-6 col-12" type="file" name="image" value="" required>
                                          <button type="submit" class="btn btn-info col-md-4 col-12" name="button">Mettre à jour</button>
                                        </form>
                                    </div>


                                    <p class="description text-center">
                                      <a href="/mes-jobs">
                                        <br> {{ $user->proposals->count() }} proposition(s)
                                      </a>
                                    </p>
                                </div>
                                <hr>
                                <div class="button-container mr-auto ml-auto">
                                  @if($user->facebook)
                                    <button href="$user->facebook" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-facebook-square"></i>
                                    </button>
                                  @else
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-facebook-square"></i>
                                    </button>
                                  @endif
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-linkedin"></i>
                                    </button>
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-address-card-o"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </form>


                @include('layouts.footer-dashboard')
              </div>
            </div>



</body>
<!--   Core JS Files   -->
<script src="/assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="/assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="/assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="/assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="/assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="/assets/js/light-bootstrap-dashboard.js?v=2.0.1" type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="/assets/js/demo.js"></script>
<!--<script type="text/javascript">
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.showNotification();

    });
</script> -->

@endsection
