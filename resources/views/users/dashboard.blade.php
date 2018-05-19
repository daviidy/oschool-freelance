@extends('layouts.app-dashboard')

@section('title', 'Mon profil')

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
                                                    <input type="text" name="last_name" class="form-control" placeholder="Company" value="Mike">
                                                </div>
                                            </div>
                                            <div class="col-md-6 pl-1">
                                                <div class="form-group">
                                                    <label>Prénoms</label>
                                                    <input type="text" name="first_name" class="form-control" placeholder="Last Name" value="Andrew">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Numéro mobile</label>
                                                    <input type="text" name="number_tel" class="form-control" placeholder="Exemple: 58450600" value="">
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
                                                    <input type="text" name="linkedin" class="form-control" placeholder="Exemple: 58450600" value="">
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
                                                    <input type="text" name="facebook" class="form-control" placeholder="Exemple: 58450600" value="">
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
                                                    <input type="text" name="lien_cv" class="form-control" placeholder="Exemple: 58450600" value="">
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
                                                    <textarea name="description" rows="4" cols="80" class="form-control" placeholder="Parlez de vos compétences, votre expérience ou votre parcours...." value="Mike"></textarea>
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
                                            <img class="avatar border-gray" src="/assets/img/faces/default.png" alt="...">
                                            <h5 class="title">{{ Auth::user()->name }} Andrew</h5>
                                        </a>
                                        <p class="description">
                                            dave
                                        </p>
                                    </div>
                                    <p class="description text-center">
                                        "Lamborghini Mercy"

                                        <br> {{ $user->first_name }}
                                        <br> {{ $user->type }}
                                        <br> {{ $user->name }}

                                    </p>
                                </div>
                                <hr>
                                <div class="button-container mr-auto ml-auto">
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-facebook-square"></i>
                                    </button>
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
