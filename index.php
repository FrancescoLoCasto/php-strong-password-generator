
<?php include_once __DIR__ . '/partials/function.php'?>


<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Strong Password Generator</title>
      <!-- Link bootstrap -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   </head>
      <body>
            
         <div class="container">
            <div class="row">
               <div class="col-12 text-center">
                  <form action="./index.php" method="GET">
                     <label for="userInput">Inserisci la lungezza della nuova password</label>
                     <input type="number" name="userInput" class="m-2">
                     <button type="submit" class="btn btn-primary">Genera Password</button>
                     <h1>
                        <?php echo randomGeneratorPassword(); ?>
                     </h1>
                  </form>
               </div>
            </div>
         </div>
      </body>
</html>