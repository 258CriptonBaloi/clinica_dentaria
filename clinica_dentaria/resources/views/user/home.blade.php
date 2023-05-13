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
@include('user.doctor');
@include('user.appointment');
