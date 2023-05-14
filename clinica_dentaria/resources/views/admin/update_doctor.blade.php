<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">
    <style type="text/css">
      label{
        display:inline-block;
        width:200px;
      }
    </style>
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
            <div class="container" align="center" style="padding:100px">
                <form>
                    <div style="padding:15px">
                        <label>Nome do Medico</label>
                        <input type="text"  style="color:black" name="name" value="{{$data->name}}">
                    </div>
                    <div  style="padding:15px">
                        <label>Sexo</label>
                        <input type="text" style="color:black" name="gender" value="{{$data->gender}}">
                    </div>
                    <div  style="padding:15px">
                        <label>Especialidade</label>
                        <input type="text" style="color:black" name="speciality" value="{{$data->speciality}}">
                    </div>
                    <div  style="padding:15px">
                        <label>Telefone</label>
                        <input type="number" style="color:black" name="phone" value="{{$data->phone}}">
                    </div>
                    <div  style="padding:15px">
                        <label>Email</label>
                        <input type="text" style="color:black" name="email" value="{{$data->email}}">
                    </div>
                    <div  style="padding:15px">
                        <label>Foto</label>
                        <image heigth="150" width="150" src="doctorimage/{{$data->image}}">
                    </div>
                    <div  style="padding:15px">
                        <label>Alterar imagem</label>
                        <input type="file" name="file">
                    </div>
                    <div  style="padding:15px">
                        <input type="submit" class="bt btn-">
                    </div>
                </form>   
            </div> 
        
        
        
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script');
  </body>
</html>