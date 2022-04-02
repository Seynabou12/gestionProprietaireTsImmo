<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TASMIN IMMO</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" integrity="sha384-ejwKkLla8gPP8t2u0eQyL0Q/4ItcnyveF505U0NIobD/SMsNyXrLti6CWaD0L52l" crossorigin="anonymous">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">
</head>

@include('template.header');

@include('template.sidebar');

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6 text-center">
                <h1>ENREGISTRER UN PROPRIETAIRE</h1>
            </div>
        </div>
    </div>
</section>

<div class="container-fluid">

    <form action="{{ route('proprietaire.store')}}" class="mt-4" enctype="multipart/form-data" method="post">

        @csrf
          <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title text-center">Formulaire d'ajout de Proprietaires</h3>
            </div>

        </div>

        <div class="card mt-4">

            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="nom_proprietaire">Nom Propriétaire</label>
                        <input type="text" name="nom_proprietaire" class="form-control" required>
                    </div>
                     <div class="form-group col-md-6">
                        <label for="prenom_proprietaire">Prenom Proprietaire</label>
                        <input type="text" name="prenom_proprietaire" class="form-control" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="">Adresse</label>
                        <input type="text" name="adresse" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="disponibilite">Telephone</label>
                        <input type="text" name="telephone" class="form-control" required>
                    </div>
                </div>
                <div class="row">
                     <div class="form-group col-md-6">
                        <label for="">Date de Naissance</label>
                        <input type="date" name="date_naissance" class="form-control" required>
                    </div>
                  <div class="form-group col-md-6">
                        <label for="sexe">Sexe</label>
                        <input type="text" name="sexe" class="form-control" required>
                    </div>
                </div>
                <div class="row">
                
                     <div class="form-group col-md-6">
                        <label for="">Lieu de Naissance</label>
                        <input type="text" name="lieu_naissance" class="form-control" required>
                    </div>
                       <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                </div>
            
                <div class="form-group mt-4">
                    <input type="submit" value="Enregistrer" class="btn btn-primary" name="add">
                </div>
            </div>
        </div>
    </form>


</div>

@include('template.footer');
 <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('dist/js/pages/dashboard.js')}}"></script>


</body>
</html>


