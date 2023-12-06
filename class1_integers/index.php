<?php

function verificaInteiro($numero) {
  if (is_int($numero)) {
    echo "É um inteiro<br>";
  } else {
    echo "Não é um inteiro<br>";
  }
}

  echo 5;
  echo "<br>";

  $num1 = 5;
  $num2 = 12;

  echo $num1 + $num2;

  $num3 = 13;

  echo "<br>";

  echo $num1 - $num3;

  echo "<br>";
  echo $num1;
  echo "<br>";
  echo $num2;
  echo "<br>";
  echo $num3;

  echo "<br>";
  echo is_int($num1);

  $num4 = 7.4;
  echo "<br>";
  echo is_int($num4);

  verificaInteiro($num2);
  verificaInteiro($num4);
  verificaInteiro($num1);



?>