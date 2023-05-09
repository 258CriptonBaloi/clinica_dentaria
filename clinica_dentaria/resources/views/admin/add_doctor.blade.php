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
            <div class="container" align="center" st>
                <form>
                    <div>
                        <label>Nome:</label>
                        <input type="text" style="color:black;" name="name" placeholder="Nome do medico">
                    </div>
                </form>
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script');
  </body>
</html>