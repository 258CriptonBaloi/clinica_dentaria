<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css');
    <style type="text/css">
      label{
        display:inline-block;
        width:200px;
      }
    </style>
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
            <div class="container" align="center" style="padding-top:100px">
                <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                    <div style="padding:15px">
                        <label>Nome:</label>
                        <input type="text" style="color:black;" name="name" placeholder="Nome do medico">
                    </div>
                    <div style="padding:15px">
                        <label>Sexo:</label>
                        <select name="gender" style="color:black; width:200px;">
                            <option>--Select--</option>
                            <option value="M">Masculino</option>
                            <option value="F">Feminino</option>
                        </select>
                    </div>
                    <div style="padding:15px">
                        <label>Especialidade:</label>
                        <select name="speciality" style="color:black; width:200px;">
                            <option>--Select--</option>
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
                            <option value="1">4</option>
                            <option value="1">5</option>
                        </select>
                    </div>
                    <div style="padding:15px">
                        <label>Telefone:</label>
                        <input type="number" style="color:black;" name="phone" placeholder="Numero de telefone">
                    </div>
                    <div style="padding:15px">
                        <label>Email:</label>
                        <input type="text" style="color:black;" name="email" placeholder="Email do medico">
                    </div>
                    <div style="padding:15px">
                        <label>Foto:</label>
                        <input type="file" name="file">
                    </div>
                    <div style="padding:15px">
                        <input type="submit" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script');
  </body>
</html>