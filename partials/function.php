<?php 
         function randomGeneratorPassword()
         {
            $lettersNumbersRandom = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890()';
            $password = [];
            $lengthPassword = strlen($lettersNumbersRandom) - 1; 

            for ($i = 0; $i < $_GET['userInput']; $i++) {
               $n = random_int(0, $lengthPassword);
               $password[] = $lettersNumbersRandom[$n];
            }
               return implode($password); 
         };

?>