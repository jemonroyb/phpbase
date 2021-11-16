<?php
include_once('utilities.php');
include_once('utildatabase_utilities.php');
$result= run_query();
$user=$result->fetch_assoc();
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Curso PHP |  Bienvenidos</title>
    <link rel="stylesheet" href="./css/foundation.css" />
    <script src="./js/vendor/modernizr.js"></script>
  </head>
  <body>
   
<div class="row">
      <div class="large-3 columns">
        <h1><img src="./img/logo.png"/></h1>
      </div>
      <div class="large-9 columns">
        <ul class="right button-group">
          <li><a href="./index.php" class="button">Inicio</a></li>
        </ul>
      </div>
    </div>

     
    <div class="row">
 
      <div class="large-9 columns">
        <h3>Manejo de base de datos</h3>
          <p>Listado</p>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <div class="row">
              </div>
              <table>
                <thead>
                  <tr>
                    <th width="200">ID</th>
                    <th>Correo</th>
                    <th width="150">Contraseña</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><?php echo $user['id']?></td>
                    <td>correo@correo.com</td>
                    <td>contraseña</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </section>
        </div>
      </div>
    

      <footer class="row">
      <div class="large-12 columns">
        <hr/>
        <div class="row">
          <div class="large-6 columns">
            <p>&copy; Copyright <?php echo say_year(); ?>.</p>
          </div>
          <div class="large-6 columns">
            <ul class="inline-list right">
              <li><a href="./index.php">Inicio</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <script>
      document.write('<script src=./js/vendor/' +
      ('__proto__' in {} ? 'zepto' : 'jquery') +
      '.js><\/script>')
    </script>
    <script src="./js/zepto.js"></script>
    <script src="./js/vendor/jquery.js"></script>
    <script src="./js/foundation.min.js"></script>
    <script>
        $(document).foundation();
    </script>
    <script src="./js/vendor/jquery.js"></script>
    <script src="./js/foundation/foundation.js"></script>
    <script>
          $(document).foundation();

          var doc = document.documentElement;
          doc.setAttribute('data-useragent', navigator.userAgent);
        </script>
  </body>
</html>