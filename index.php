<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>"Republica 616°"</title>
    <!-- Local CSS Stylesheet -->
    <link rel="stylesheet" href="styles.css">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <main>
        <!-- navbar -->
        <nav>
            <div class="nav-wrapper blue darken-3">
            <a class="brand-logo center">Republica 616°</a>
            </div>
        </nav>

        <!-- validacion -->
        <?php
            if (isset($_GET['mensaje'])) 
            {
                echo '<div id="mensaje" class="section center-align red lighten-2">
                <p style="display:inline">'.$_GET['mensaje'].'</p></div>';
            }
        ?>
        
        <!-- login -->
        <div class="section container">
            <div class="row">
                <form class="col s12" action="login.php" method="post">
                    <div class="row card-panel">
                        <input class="validate" required name="usuario" placeholder="Usuario">
                        <input class="validate" required name="clave" type="password" placeholder="Contraseña">
                        <input class="btn green col s12 buttons" type="submit" value="Ingresar" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </main>
    <!-- footer -->
    <footer class="page-footer blue darken-3">
        <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Escuela Republica 616</h5>
                <p class="grey-text text-lighten-4">escuela616republica@gmail.com</p>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
                <a class="grey-text text-lighten-4 right" href="">Patricio Straziuso</a>
            </div>
        </div>
    </footer>
</body>
</html>