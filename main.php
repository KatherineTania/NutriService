<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;  charset=UTF-8"/>
<title>Title of the document</title>
    <link rel="stylesheet" type="text/css" href="Common/css/bootstrap.min.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="Common/css/bootstrap-theme.min" media="screen" />
    <link rel="stylesheet" type="text/css" href="Common/css/tabpanels.css" media="screen" />
    
</head>
<body>
    <div class="row">
        <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">NutriService</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    </div>
    <div class="row">
        <div class="col-sm-1">izq</div>
        <div class="col-sm-10">
            <div class="row">
                <h3>SERVICIO DE NUTRICION</h3>
            </div>
            <div class="row">
                <div class="panel with-nav-tabs panel-primary">
                    <div class="panel-heading">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab1primary" data-toggle="tab">Inicio</a></li>
                                <li><a href="#tab2primary" data-toggle="tab">Usuario</a></li>
                                <li><a href="#tab3primary" data-toggle="tab">Paciente</a></li>
                                <li><a href="#tab4primary" data-toggle="tab">Historia</a></li>
                                <li><a href="#tab5primary" data-toggle="tab">Antropometrico</a></li>
                                <li><a href="#tab6primary" data-toggle="tab">Persona</a></li>
                                 <li><a href="#tab7primary" data-toggle="tab">Personal</a></li>

                            </ul>
                    </div>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab1primary">Primary 1</div>
                            <div class="tab-pane fade" id="tab2primary">
                             
                                
                             <form class="form-horizontal">
                                 <input name="procedimiento" type="text" value="GrabarUsuario" hidden="true" />
                                
                                 <div class="col-sm-6">
                                 
                                    <div class="form-group">
                                      <label for="inputEmail3" class="col-sm-2 control-label">Nombres: </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="Nombres">
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="inputEmail3" class="col-sm-2 control-label">Usuario: </label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" id="inputtext3" placeholder="Primer Apellido">
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="inputText3" class="col-sm-2 control-label">Contraseña </label>
                                      <div class="col-sm-10">
                                          <input type="password" class="form-control" id="inputtext3" placeholder="Segundo Apellido">
                                      </div>
                                    </div>
                                     
                                     <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Re contraseña </label>
                                      <div class="col-sm-10">
                                          <input type="password" class="form-control" id="inputPassword3" placeholder="Numero de documento">
                                      </div>
                                    </div>
                                     
                                         
                                 </div>
                              </form>
                                
                                
                                
                                
                                
                            </div>
                            <div class="tab-pane fade" id="tab3primary">
                                
                                
                                <form class="form-horizontal">
                                
                                 <div class="col-sm-6">
                                 
                                    <div class="form-group">
                                      <label for="inputEmail3" class="col-sm-2 control-label">Nombres: </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="Nombres">
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Cama: </label>
                                      <div class="col-sm-10">
                                         <select class="form-control">
                                            <option>101</option>
                                            <option>102</option>
                                            <option>103</option>
                                            <option>104</option>
                                            <option>105</option>
                                        </select>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Dieta: </label>
                                      <div class="col-sm-10">
                                       
                                        
                                        <select class="form-control">
                                            <option>Dieta líquida</option>
                                            <option>Dieta semilíquida</option>
                                            <option>Dieta blanda</option>
                                            <option>Dieta hipocalórica</option>
                                            <option>Dieta diabética</option>
                                            <option>Dieta hipoproteica</option>
                                            <option>Dieta hipolipídica</option>
                                            <option>Dieta astringente</option>
                                            <option>Dieta laxante o rica en residuos</option>
                                            
                                            
                                        </select>
                                        
                                      </div>
                                    </div>
                                     
                                     
                                     
                                     <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Historia Clinica: </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Historia Clinica">
                                      </div>
                                    </div>
                                     
                                      <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Padre: </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Padre">
                                      </div>
                                    </div>
                                     
                                   
                                     
                                     <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Madre </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Madre">
                                      </div>
                                    </div>
                                     
                                    
                                     
                                     
                                     
                                     
                                </div>
                                 <div class="col-sm-6">
                                 
                                    
                                     
                                                                           
                                    <div class="form-group">
                                      <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-default">Grabar</button>
                                        <button type="submit" class="btn btn-default">Salir</button>
                                      </div>
                                    </div>
                                     
                                 </div>
                              </form>

                                
                            </div>
                            <div class="tab-pane fade" id="tab4primary">
                                
                              <form class="form-horizontal">
                                
                                 <div class="col-sm-6">
                                 
                                    <div class="form-group">
                                      <label for="inputEmail3" class="col-sm-2 control-label">Codigo Paciente: </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="Codigo Paciente">
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Fecha Admision: </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Fecha Admision">
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Servicio: </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Servicio">
                                      </div>
                                    </div>
                                     
                                     <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Medico: </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Medico">
                                      </div>
                                    </div>
                                     
                                      <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Padre: </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Padre">
                                      </div>
                                    </div>
                                     
                                   
                                     
                                     <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Madre: </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Madre">
                                      </div>
                                    </div>
                                     
                                     <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Diagnostico de Alta: </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Diagnostico de Alta">
                                      </div>
                                    </div>
                                     
                                     <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Fecha de Alta: </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Fecha de Alta">
                                      </div>
                                    </div>
                                     
                                                        
                                     
                                     
                                     
                                </div>
                                 <div class="col-sm-6">
                                 
                                    <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Tipo de Seguro: </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Tipo de Seguro">
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Nro de Cama: </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Nro de Cama">
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Nro de piso: </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Nro de piso">
                                      </div>
                                    </div>      
                                     
                                      <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Diag. Med. Ingreso: </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Diagnostico Medico Ingreso">
                                      </div>
                                    </div> 
                                     
                                      <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Diag. Nutri. Ingreso: </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Diagnostico Nutricional Ingreso">
                                      </div>
                                    </div> 
                                     
                                      <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Operacion Realizada: </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Operacion Realizada">
                                      </div>
                                    </div> 
                                     
                                                                                                                
                                    <div class="form-group">
                                      <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-default">Grabar</button>
                                        <button type="submit" class="btn btn-default">Salir</button>
                                      </div>
                                    </div>
                                     
                                 </div>
                              </form>
                                
                                
                                
                                
                                
                            </div>
                            <div class="tab-pane fade" id="tab3primary">
                                
                                
                                <form class="form-horizontal">
                                
                                 <div class="col-sm-6">
                                 
                                    <div class="form-group">
                                      <label for="inputEmail3" class="col-sm-2 control-label">Nombres: </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="Nombres">
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Primer Ap: </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Primer Apellido">
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Segundo Ap: </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Segundo Apellido">
                                      </div>
                                    </div>
                                     
                                     <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Num. Doc: </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Numero de documento">
                                      </div>
                                    </div>
                                     
                                      <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Fecha Nacimiento: </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Fecha de nacimeinto">
                                      </div>
                                    </div>
                                     
                                   
                                     
                                     <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Lugar de Nacimiento </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Lugar de Nacimiento">
                                      </div>
                                    </div>
                                     
                                    
                                     
                                     
                                     
                                     
                                </div>
                                 <div class="col-sm-6">
                                 
                                    <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Telefono: </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Telefono">
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Email: </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Email">
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Direccion: </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Direccion">
                                      </div>
                                    </div>   
                                     
                                      <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Sexo: </label>
                                      <div class="col-sm-10">
                                          <input type="radio" name="idSexo"> Hombre
                                          <input type="radio" name="idSexo"> Mujer
                                          
                                      </div>
                                    </div>
                                     
                                      <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Ocupacion: </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Ocupacion">
                                      </div>
                                    </div> 
                                     
                                      <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">N° HCl: </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Nro de Historia Clinica">
                                      </div>
                                    </div> 
                                     
                                     
                                                                           
                                    <div class="form-group">
                                      <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-default">Grabar</button>
                                        <button type="submit" class="btn btn-default">Salir</button>
                                      </div>
                                    </div>
                                     
                                 </div>
                              </form>  
                                
                            </div>
                            <div class="tab-pane fade" id="tab5primary">
                                
                                 <form class="form-horizontal">
                                
                                 <div class="col-sm-6">
                                 
                                    <div class="form-group">
                                      <label for="inputEmail3" class="col-sm-2 control-label">Codigo Paciente: </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="Codigo Paciente">
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Fecha Registro: </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Fecha Registro">
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Circunferencia Muñeca (cm): </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Circunferencia Muñeca">
                                      </div>
                                    </div>
                                     
                                     <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Circunferencia Braquial(cm): </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Circunferencia Braquial(cm)">
                                      </div>
                                    </div>
                                     
                                      <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Circunferencia Cintura(cm): </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Circunferencia Cintura(cm)">
                                      </div>
                                    </div>
                                     
                                   
                                     
                                     <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Pliegue Tricipital(mm): </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Pliegue Tricipital(mm)">
                                      </div>
                                    </div>
                                     
                                      
                                     <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Pliegue Bicipital(mm): </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Pliegue Bicipital(mm)">
                                      </div>
                                    </div>
                                     
                                     <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Pliegue Subescapular(mm): </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Pliegue Subescapular(mm)">
                                      </div>
                                    </div>
                                     
                                     <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Pliegue Subprailiaco(mm): </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Pliegue Subprailiaco(mm)">
                                      </div>
                                    </div>
                                     
                                     <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Reserva Proteica: </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Reserva Proteica">
                                      </div>
                                    </div>
                                     
                                     <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Reserva Energetica: </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Reserva Energetica">
                                      </div>
                                    </div>
                                     
                                     <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Dagnostico IMC: </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Dagnostico IMC">
                                      </div>
                                    </div>
                                     
                                     <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Sum Pliegues: </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Sum Pliegues">
                                      </div>
                                    </div>
                                     
                                     
                                     
                                     
                                     
                                     
                                </div>
                                 <div class="col-sm-6">
                                     
                                     <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Peso: </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Peso">
                                      </div>
                                    </div>
                                     
                                     <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Talla: </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Talla">
                                      </div>
                                    </div>
                                     
                                     <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Edad: </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Edad">
                                      </div>
                                    </div>
                                 
                                     <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Sexo: </label>
                                      <div class="col-sm-10">
                                          <input type="radio" name="idSexo"> Hombre
                                          <input type="radio" name="idSexo"> Mujer
                                          
                                      </div>
                                    </div>
                                     
                                    <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">IMC: </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="IMC">
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">%Grasa: </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="%Grasa">
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Peso Ideal: </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Cargo">
                                      </div>
                                    </div>      
                                     
                                      <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">CMB(mm): </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Profesion">
                                      </div>
                                    </div> 
                                     
                                      <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">AMB(mm): </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="AMB(mm)">
                                      </div>
                                    </div> 
                                     
                                      <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">AGB(mm^2): </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="AGB(mm^2)">
                                      </div>
                                    </div> 
                                     
                                      <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">ABT(mm^2): </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="ABT(mm^2)">
                                      </div>
                                    </div> 
                                     
                                     <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Circunferencia Osteomuscular: </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Circunferencia Osteomuscular">
                                      </div>
                                    </div> 
                                                                           
                                    <div class="form-group">
                                      <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-default">Grabar</button>
                                        <button type="submit" class="btn btn-default">Salir</button>
                                      </div>
                                    </div>
                                     
                                 </div>
                              </form>
                                
                                
                            </div>
                            <div class="tab-pane fade" id="tab6primary">
                                
                                
                                <form class="form-horizontal" action="BusinessLogic/BLAdministracion.php" method="post">
                                    <input name="procedimiento" type="text" value="GrabarPersona" hidden="true" />
                                
                                 <div class="col-sm-6">
                                 
                                    <div class="form-group">
                                      <label for="inputEmail3" class="col-sm-2 control-label">Nombres: </label>
                                      <div class="col-sm-10">
                                          <input type="text" name="cNombres" class="form-control" id="inputEmail3" placeholder="Nombres">
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Primer Ap: </label>
                                      <div class="col-sm-10">
                                          <input type="text" name="cPaterno" class="form-control" id="inputPassword3" placeholder="Primer Apellido">
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Segundo Ap: </label>
                                      <div class="col-sm-10">
                                        <input type="text" name="cMaterno" class="form-control" id="inputPassword3" placeholder="Segundo Apellido">
                                      </div>
                                    </div>
                                     
                                     <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Num. Doc: </label>
                                      <div class="col-sm-10">
                                        <input type="text" name="cDocumento" class="form-control" id="inputPassword3" placeholder="Numero de documento">
                                      </div>
                                    </div>
                                     
                                      <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Fecha Nacimiento: </label>
                                      <div class="col-sm-10">
                                        <input type="text" name="dFechaNacimiento"  class="form-control" id="inputPassword3" placeholder="Fecha de nacimeinto">
                                      </div>
                                    </div>
                                          
                                </div>
                                 <div class="col-sm-6">
                                 
                                    <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Telefono: </label>
                                      <div class="col-sm-10">
                                        <input type="text" name="cTelefono" class="form-control" id="inputPassword3" placeholder="Telefono">
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Email: </label>
                                      <div class="col-sm-10">
                                        <input type="text" name="cEmail" class="form-control" id="inputPassword3" placeholder="Email">
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Direccion: </label>
                                      <div class="col-sm-10">
                                        <input type="text" name="cDireccion" class="form-control" id="inputPassword3" placeholder="Direccion">
                                      </div>
                                    </div>   
                                     
                                      <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Sexo: </label>
                                      <div class="col-sm-10">
                                          <input type="radio" name="idSexo"> Hombre
                                          <input type="radio" name="idSexo"> Mujer
                                          
                                      </div>
                                    </div>
                                     
                                      <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Ocupacion: </label>
                                      <div class="col-sm-10">
                                        <input type="text" name="cOcupacion" class="form-control" id="inputPassword3" placeholder="Ocupacion">
                                      </div>
                                    </div> 
                                                                      
                                    <div class="form-group">
                                      <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-default">Grabar</button>
                                        <button type="button" class="btn btn-default">Salir</button>
                                      </div>
                                    </div>
                                     
                                 </div>
                              </form>

                                
                            </div>
                            
                                                                               
                                 
                            
                            <div class="tab-pane fade" id="tab7primary">
                                                                                          
                                <div class="col-sm-6">                            
                                <form class="form-horizontal" action="BusinessLogic/BLAdministracion.php" method="post"> 
                                          <input name="procedimiento" type="text" value="GrabarPersonal" hidden="true" />
                                    
                                    <div class="form-group">
                                      <label for="inputEmail3" class="col-sm-2 control-label">Nombres: </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="Nombres">
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Cargo: </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Cargo">
                                      </div>
                                    </div>      
                                     
                                      <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Profesion: </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Profesion">
                                      </div>
                                    </div> 
                                     
                                      <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Grado Academico: </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Grado Academico">
                                      </div>
                                    </div> 
                                     
                                      <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Servicio: </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Servicio">
                                      </div>
                                    </div> 
                                     
                                      <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Fecha de Ingreso: </label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Fecha de Ingreso">
                                      </div>
                                    </div> 
                                                                           
                                    <div class="form-group">
                                      <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-default">Grabar</button>
                                        <button type="submit" class="btn btn-default">Salir</button>
                                      </div>
                                    </div>
                                     
                              </form>
                            </div>
                            <div class="col-sm-6"></div>
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-sm-1">der</div>        
    </div>
</body>
<script src="Common/js/jquery-2.1.4.min.js"></script>
<script src="Common/js/bootstrap.min.js"></script>
</html>



