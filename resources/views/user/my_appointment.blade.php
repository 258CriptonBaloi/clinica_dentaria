<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dental Home - Mudando sorrisos, renovando vidas.</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/favicon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li><a class="nav-link scrollto " href="{{('/')}}">Inicio</a></li>
            <li class="dropdown"><a href="#"><span>A clínica</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                    <li><a href="{{('/doutores')}}">Doctores</a></li>
                    <li><a href="{{('/galeria')}}">Galeria</a></li>
                    <li><a href="#">Nosso Equipamento</a></li>
                    <li><a href="{{('/sobre')}}">Sobre nós</a></li>
                </ul>
            </li>
            <!-- <li><a class="nav-link scrollto" href="#about">Sobre nós</a></li> -->
            <li><a class="nav-link scrollto" href="{{('/servico')}}">Serviços</a></li>
            <!-- <li><a class="nav-link scrollto" href="#doctors">Doctores</a></li> -->                
            <li><a class="nav-link scrollto" href="{{url('/contacto')}}">Contacto</a></li>
            <li><a class="nav-link scrollto" style="background-colour:greenyelow; colour:white;" href="{{url('myappointment')}}">Minhas Marcacoes</a></li>
            <li class="nav-item">
                    <x-app-layout>
                    </x-app-layout>
            </li>
       </ul>
    </div>
  </div>
</nav>

<!--tabela-->
<table class="table" align="center">
  <thead>
    <tr>
      <th scope="col">Nome do Medico</th>
      <th scope="col">Data</th>
      <th scope="col">Mensagem</th>
      <th scope="col">Status</th>
      <th scope="col">Cancelar Marcacao</th>
    </tr>
  </thead>
  <tbody>
    @foreach($appoint as $appoints)
    <tr>
      <td scope="row">{{$appoints->doctor}}</td>
      <td>{{$appoints->date}}</td>
      <td>{{$appoints->message}}</td>
      <td>{{$appoints->status}}</td>
      <td><a class="bt btn-danger" onclick="return confirm('Tem a certeza que deseja cancelar?') " href="{{url('cancel_appoint', $appoints->id)}}">Cancelar</a></td>
    </tr>
    @endforeach
  </tbody>
</table>

</body>

</html>