 
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="assets/icons/icono.png" />
    <script src="js/sweet-alert.min.js"></script>
    <link rel="stylesheet" href="css/sweet-alert.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css"/>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/main.js"></script>
</head>



<body class="full-cover-background" style="background-image:url(https://i.pinimg.com/originals/b8/8c/d6/b88cd67fef9b2f690667dcb86df35f5b.jpg);">

    <div class="form-container">

        <p class="text-center" style="margin-top: 17px;">

           <img src="assets/img/user01.png" width="100" height="100">
       </p>

       <h4 class="text-center all-tittles" style="margin-bottom: 30px;">inicia sesión</h4>

       <form action="validar.php" method="POST">

            <div class="group-material-login">
              <input type="text" class="material-login-control" name="mail" required="" maxlength="70">
              <span class="highlight-login"></span>
              <span class="bar-login"></span>
              <label><i class="zmdi zmdi-account"></i> &nbsp; Correos</label>
            </div><br>
            <div class="group-material-login">
              <input type="password" class="material-login-control" name="pass" required="" maxlength="70">
              <span class="highlight-login"></span>
              <span class="bar-login"></span>
              <label><i class="zmdi zmdi-lock"></i> &nbsp; Contraseña</label>
            </div>
            <div class="group-material">
                <select class="material-control-login" required >
                    <option value="" disabled="" selected="">Tipo de usuario</option>
                    <option value="Student">Estudiante</option>
                    <option value="Teacher">Docente</option>
                    <option value="Admin">Administrador</option>
                </select>
            </div>
            <button class="btn-login" type="submit">Ingresar &nbsp; <i class="zmdi zmdi-arrow-right"></i></button>
        </form>
          </form>
            <a href="registro.php">
            <button class="btn-login3" type="submit"><i class="zmdi zmdi-arrow-left"></i> &nbsp; Registrarse </button>
          </a>
    </div>  

</body>

</html>