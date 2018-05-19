@extends('layouts.app-dashboard')

@section('title', 'Liste des jobs')

@section('content')

<body>
    <div class="wrapper">
        @include('layouts.sidebar-dashboard')
        <div class="main-panel">
            @include('layouts.navbar-dashboard')
            <div class="content">
                <div class="container-fluid">
                  <div class="row">
                      <div class="col-md-12 col-md-offset-1">
                          <div class="panel panel-default">
                              <div class="panel-heading">Liste des propositions par job</div>

                              <div class="panel-body">
                                  <table class="table">
                                      <tr>
                                          <th rowspan="2">Id</th>
                                          <th rowspan="2">Jobs</th>
                                          <th colspan="2">Propositions</th>
                                      </tr>
                                      <tr>
                                          <th>Freelancer</th>
                                          <th>Photo</th>
                                          <th>Description</th>
                                          <th>Prix</th>
                                          <th>Action</th>
                                      </tr>

                                      @foreach ($jobs as $job)
                                          @foreach ($job->proposals as $proposal)
                                              <tr>
                                                  <td>{{ $job->id }}</td>
                                                  <td>
                                                  @if ($loop->iteration == 1)
                                                      <b>{{ $job->title }}: {{ $job->proposals->count() }} proposition(s)</b>
                                                  @endif
                                                  </td>
                                                  <td>{{ $proposal->user->name }}</td>
                                                  <td> <img class="avatar border-gray" width="50" src="/img/usersPhotos/{{ $proposal->user->image }}" alt="..."> </td>
                                                  <td>{{ $proposal->text }}</td>
                                                  <td>{{ $proposal->price }} FCFA</td>
                                                  <td>
                                                    @if($proposal->status == "Accepté !")
                                                    <p style="color: green;">{{ $proposal->status }}</p>
                                                    @elseif($proposal->status == "Refusé")
                                                    <p style="color: red;">{{ $proposal->status }}</p>
                                                    @else
                                                    <p style="color: orange;">{{ $proposal->status }}</p>
                                                    @endif
                                                    <div class="dropdown">
                                                      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                        Action
                                                      </button>
                                                      <div class="dropdown-menu">
                                                        @if($proposal->status == "Accepté !")
                                                        <p class="dropdown-item" href="#">Accepter</p>
                                                        @else
                                                        <a class="dropdown-item" href="{{ route('status.accept', ['user' => $proposal->user->id, 'accept' => $proposal->id]) }}">Accepter</a>
                                                        @endif
                                                        @if($proposal->status == "Refusé")
                                                        <a class="dropdown-item" href="#">Refuser</a>
                                                        @else
                                                        <a class="dropdown-item" href="{{ route('proposal.reject', ['reject' => $proposal->job_id, 'user' => $proposal->user->id]) }}">Refuser</a>
                                                        @endif
                                                      </div>
                                                    </div>
                                                  </td>

                                              </tr>
                                          @endforeach
                                    @endforeach
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
