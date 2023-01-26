
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
      


   <form action="./index.php" method="GET">
      <label for="userInput">Inserisci la lungezza della nuova password</label>
      <input type="number" name="userInput">
      <button type="submit">Genera Password</button>

      <h1>
         <?php echo randomGeneratorPassword(); ?>
      </h1>
   </form>




   </body>
</html>