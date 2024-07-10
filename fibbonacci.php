   <?php
   function fibonacci($n) {
       if ($n <= 0) {
           return 0;
       } elseif ($n == 1) {
           return 1;
       } else {
           return (fibonacci($n - 1) + fibonacci($n - 2));
       }
   }
   $num = 10;
   echo "Fibonacci series for $num numbers: ";
   for ($i = 0; $i < $num; $i++) {
       echo fibonacci($i) . " ";
   }
    ?>