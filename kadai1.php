<?php
  for ($i=1; $i<=100; $i++) {
    if (($i % 15) == 0) {
      echo "FizzBuzz<br>\n";
    } else if (($i % 3) == 0) {
      echo "Fizz<br>\n";
    } else if (($i % 5) == 0) {
      echo "Buzz<br>\n";
    } else {
      echo $i . "<br>\n";
    }
  }
?>
