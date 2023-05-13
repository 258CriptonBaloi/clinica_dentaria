<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css');
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar');
      <!-- partial -->
        @include('admin.navbar');
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div align="center" style="padding-top:100px">
                <!--tabela-->
                <table class="table" align="center">
                <thead>
                    <tr>
                    <th scope="col">Nome do Medico</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Especialidade</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Apagar</th>
                    <th scope="col">Atualizar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $doctor)
                    <tr>
                    <td>{{$doctor->name}}</td>
                    <td>{{$doctor->gender}}</td>
                    <td>{{$doctor->phone}}</td>
                    <td>{{$doctor->email}}</td>
                    <td>{{$doctor->speciality}}</td>
                    <td><img height="100" width="100" src="doctorimage/{{$doctor->image}}"></td>
                    <td><a class="bt btn-danger" onclick="return confirm('Tem a certeza que deseja Remover?') " href="{{url('deletedoctor', $doctor->id)}}">Remover</a></td>
                    <td><a class="bt btn-primary" onclick="return confirm('Tem a certeza que deseja Atualizar?') " href="">Atualizar</a></td>
                    </tr>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script');
  </body>
</html>