<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <!-- auparavant {{ config('app.name', 'Oschool Freelance') }} -->
  <title>Oschool Freelance | @yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('description')">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/png" href="/assets/img/icone-oschool.ico">

    <!-- Styles -->
    <!-- CSS Files -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/css/light-bootstrap-dashboard.css?v=2.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="/assets/css/demo.css" rel="stylesheet" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <style media="screen">

    .panel-default {
  border-color: rgb(211, 224, 233);
        }
.panel {
  margin-bottom: 22px;
  background-color: rgb(255, 255, 255);
  box-shadow: rgba(0, 0, 0, 0.05) 0px 1px 1px;
  border-width: 1px;
  border-style: solid;
  border-color: transparent;
  border-image: initial;
  border-radius: 4px;
}

.panel-default > .panel-heading {
    color: rgb(51, 51, 51);
    background-color: rgb(255, 255, 255);
    border-color: rgb(211, 224, 233);
}
.panel-heading {
    border-top-right-radius: 3px;
    border-top-left-radius: 3px;
    padding: 10px 15px;
    border-bottom: 1px solid transparent;
}
.panel-body {
    padding: 15px;
}
.table {
    width: 100%;
    margin-bottom: 22px;
}



    </style>
</head>

<!--on prepare un div qui va contenir les messages de succes -->

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    @yield('content')

</html>
