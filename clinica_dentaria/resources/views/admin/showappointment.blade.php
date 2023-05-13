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
                    <th scope="col">Nome do Paciente</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Data</th>
                    <th scope="col">Mensagem</th>
                    <th scope="col">Medico</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aprovar</th>
                    <th scope="col">Cancelar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $appoint)
                    <tr>
                    <td>{{$appoint->name}}</td>
                    <td>{{$appoint->phone}}</td>
                    <td>{{$appoint->date}}</td>
                    <td>{{$appoint->message}}</td>
                    <td>{{$appoint->doctor}}</td>
                    <td>{{$appoint->status}}</td>
                    <td><a class="bt btn-success" onclick="return confirm('Tem a certeza que deseja Aprovar?') " href="">Aprovar</a></td>
                    <td><a class="bt btn-danger" onclick="return confirm('Tem a certeza que deseja Cancelar?') " href="">Cancelar</a></td>
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