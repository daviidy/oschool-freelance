@extends('layouts.app-dashboard')

@section('title', 'Mes jobs')

@section('content')

<body>
    <div class="wrapper">
        @include('layouts.sidebar-dashboard')
        <div class="main-panel">
            @include('layouts.navbar-dashboard')
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">Liste des jobs auxquels j'ai postulé</h4>
                                    <p class="card-category">Nous vous rappelons que vous ne pouvez postuler qu'une seule fois à un job</p>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th>Titre du job</th>
                                            <th>Prix</th>
                                            <th>Etat</th>
                                        </thead>
                                        <tbody>
                                          @foreach($proposals as $proposal)
                                            <tr>

                                                <td> {{ $proposal->job_title }} </td>
                                                <td> {{ $proposal->price }} FCFA</td>
                                                @if($proposal->status == "Accepté !")
                                                <td style="color:green;"> {{ $proposal->status }} </td>
                                                @elseif($proposal->status == "Refusé")
                                                <td style="color:red;"> {{ $proposal->status }} </td>
                                                @else
                                                <td style="color:orange;"> {{ $proposal->status }} </td>
                                                @endif
                                            </tr>
                                          @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
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

@endsection
