<?php 

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <div class="container" >

        <div class="container text-center">
            <div class="row align-items-start">
              <div class="col ">

            <img src="https://cadenaser.com/resizer/v2/https%3A%2F%2Fcloudfront-eu-central-1.images.arcpublishing.com%2Fprisaradio%2F4J7HEVZYENHTXPQTGWZJWDT5EU.jpg?auth=92af46f2f9de63925a00ff0e5261ea6671c6b009813292c8c2613726e1fe50c8&quality=70&width=736&height=414&smart=true" class="img-thumbnail border border-3" alt="Delfín">


              </div>
              <div class="col">
                <form method="POST" action="Comprobar.php">
                  <h3>Accede al panel administrador</h3>
                  <div class="mb-3">
                      <label for="username" class="form-label">Correo Electronico</label>
                      <input type="email" class="form-control" name="email" aria-describedby="usernameHelp" required>
                      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                  </div>
                  <div class="mb-5">
                      <label for="password" class="form-label">Contraseña</label>
                      <input type="password" class="form-control" name="password" aria-describedby="passwordHelp" required>
                  </div>
                  <button type="submit" class="btn btn-primary custom-width">Iniciar Sesión</button>
                  <input type="hidden" name="action" value="login">
              </form>
              </div>
            </div>
          </div>

    </div>

  </body>

