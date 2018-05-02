

<!doctype html>

<html lang="en">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="stylesheet" href="style.css">



<head>



</head>

<body>



  <header>
  
    <img src="logohermes/logo.jpg" alt="paisaje" height="200">
  
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown link
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    
  </header>

<div id="uno">

    <div class="container">
    
      <div class="row">
        <div class="col">
          <h1> Datos </h1>
          
          <form action="recibeformulario.php">   <!-- esto es para mandar el formulario dende le digamos-->

                  <!-- nombre y apellidos-->
                  <div class="row">
                    <div class="col">
                      <input name="Nombre" type="text" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="col">
                      <input name="Apellidos" type="text" class="form-control" placeholder="Apellidos">
                    </div>
                  </div>

                  <br>

                  <!-- edad y ciudad  -->
                  <div class="row">
                    <div class="col-md-3">
                      <input name="Edad" type="number" class="form-control" placeholder="Edad">
                    </div>
                    <div class="col-md-9">
                        <!-- The second value will be selected initially -->
                      <select class="form-control" name="nacionalidad"> <!-- el name es muy importante-->
                          <option value="" selected>Selecciona...</option> <!-- que aparezca esto primero-->
                          <option value="espana">España</option> 
                          <option value="portugal" >Portugal</option>
                          <option value="holanda">Holanda</option>
                      </select>                    
                     <!-- <input name="Ciudad" type="text" class="form-control" placeholder="Pais"> -->
                    </div>
                  </div>
                  <br>

                  <!-- email y contraseña-->
                  <div class="row">
                    <div class="col">
                      <input name="Correo" type="email" class="form-control" placeholder="Correo">
                    </div>
                    <div class="col">
                      <input name="Codigo"type="password" class="form-control" placeholder="Codigo">
                    </div>
                  </div>
                  <br>
                  <div class="row">                
                    <div class="col-md-9">

                      <span id="titulo1">Intereses</span> <!-- esto es para poner en negrita en css -->                      
                      
                      <!-- checkbox de tres botones -->                      
                      <div class="form-check"> <!-- uno -->
                        <input class="form-check-input" name="Intereses[]" type="checkbox" value="Informática" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                          Informática
                        </label>
                      </div>
                      <div class="form-check"> <!-- dos -->
                        <input class="form-check-input" name="Intereses[]" type="checkbox" value="Matemáticas" id="defaultCheck2">
                        <label class="form-check-label" for="defaultCheck2">
                          Matemáticas
                        </label>
                      </div>
                      <div class="form-check"> <!-- tres -->
                        <input class="form-check-input" name="Intereses[]" type="checkbox" value="Ocio" id="defaultCheck3">
                        <label class="form-check-label" for="defaultCheck3">
                          Ocio
                        </label>
                      </div>

                    </div>
                    <div class="col-md-3">
                    Sexo
                      <div class="form-check"> 
                        <input class="form-check-input" type="radio" name="Sexo" id="exampleRadios1" value="Masculino"> 
                        <label class="form-check-label" for="exampleRadios1">
                          Masculino
                        </label>
                      </div>

                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="Sexo" id="exampleRadios1" value="Femenino">
                        <label class="form-check-label" for="exampleRadios1">
                          Femenino
                        </label>
                      </div>


                    </div>         
                  </div> 

                  <!-- boton-->
                  <br>
                    <div class="col">
                      <center>                 <!-- mx-auto btn btn... para centrar -->
                        <button type="submit" class="btn btn-outline-danger">Enviar</button>
                      </center>
                    </div>
          </form>
                <br>
        </div>

        <div class="col">
          <img src="logohermes/canarias.jpg" alt="paisaje" height="" width="100%">
        </div>
      </div>
    </div>


  <div id="dos">
    <img src="logohermes/imagen.jpg" alt="paisaje" height="" width="100%">
  </div>
  <br>
  <div id="tres">
    <div class="container">
            <div class="row">
              <div class="col">
                Información
              </div>
              <div class="col">
                Atención al Cliente
              </div>
              
            </div>
    </div>
  </div>

  <footer> 

    <div class="container">
      <div class="row">
        <div class="col">
          <p>Transmediterránea SL</p>
          <P> Avenida la guagua, 17<br>
              Isla de Tenerife<br>
              10001 - Islas Canarias
          </p>
        </div>
        <div class="col">
          <ul> <!-- para ordenar con numero seria <ol> -->
            <li><a href="https://www.holaislascanarias.com/el-hierro/"target="_blanck" >Hierro</a></li>
            <li><a href="https://www.holaislascanarias.com/la-gomera/"target="_blanck" >Gomera</a></li>
            <li><a href="https://www.holaislascanarias.com/la-palma/"target="_blanck" >La Palma</a></li>
            <li>Tenerife</li>
            <li>Gran Canaria</li>
            <li>Fuerteventura</li>
            <li>Lanzarote</li>
            

          </ul>
        
        </div>
        <div class="col">
          <p>
          Paga con tarjeta<br>
          Pasarela de pago 100% segura
        </p>
        </div>
        <div class="col">
          <p>
            Para más información busca en 
            <a href="https://www.google.es" target="_blanck"> Google </a>
            <a href="https://www.facebook.com/agenciaabreu/" target="_blank"><img alt="siguenos en facebook" height="32" src="http://2.bp.blogspot.com/-q_Tm1PpPfHo/UiXnJo5l-VI/AAAAAAAABzU/MKdrVYZjF0c/s1600/face.png" title="siguenos en facebook" width="32" /></a>

         <a href="URL-Twitter" target="_blank"><img alt="siguenos en Twitter" height="32" src="http://3.bp.blogspot.com/-wlwaJJG-eOY/UiXnHS2jLsI/AAAAAAAAByQ/I2tLyZDLNL4/s1600/Twitter+NEW.png" title="siguenos en Twitter" width="32" /></a>
          </p>
        </div>

      </div>
    </div>


  

  </footer>




<!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>










</body>

</html>