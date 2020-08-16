<?php
  $b = "gato";
  echo "O $b e meu! <br>";

  $b = &$a;
  $b = "Mudou?";
  
  echo $b." valor de b <br>";
  echo $a." valor de a";








?>