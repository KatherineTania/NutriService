<!DOCTYPE html>
<html>
<head>
<title>Title of the document</title>
    <link rel="stylesheet" type="text/css" href="Common/css/bootstrap.min.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="Common/css/bootstrap-theme.min" media="screen" />
    <link rel="stylesheet" type="text/css" href="Common/css/tabpanels.css" media="screen" />
    
</head>
<body>
    <div class="row">
        <div class="col-sm-3">izq</div>
        <div class="col-sm-6">
            <div class="panel panel-primary">
            <div class="panel-heading">                
                <h1 class="panel-title">Acceso NutriService</h1>               
            </div>
            <div class="panel-body">
                <form class="form-signin" method="post" action="main.php">
                    <h2 class="form-signin-heading">Inicio de Sesion</h2>
                    <label for="inputEmail" class="sr-only">Usuario: </label>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Usuario" required autofocus>
                    <label for="inputPassword" class="sr-only">Clave: </label>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Clave" required>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" value="remember-me"> Remember me
                      </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
                </form>
            </div>
          </div>

        </div>
        <div class="col-sm-3">der</div>        
    </div>
</body>
<script src="Common/js/jquery-2.1.4.min.js"></script>
<script src="Common/js/bootstrap.min.js"></script>

</html>
