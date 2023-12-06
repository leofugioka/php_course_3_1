<?php

function verificaFloat($number) {
  if (is_float($number)) {
    echo "It's a float!";
    echo "<br>";
  } else {
    echo "It's not a float!";
    echo "<br>";
  }
}


  $num_float1 = 1.12;
  $num_float2 = 3.14159748;
  $num_float3 = -7.6988;
  $num_float4 = $num_float2 % $num_float1;
  $quebra_linha = "<br>";


  echo $num_float1;
  echo $quebra_linha;
  echo $num_float2;
  echo $quebra_linha;
  echo $num_float3;
  echo $quebra_linha;

  verificaFloat($num_float1);
  verificaFloat($num_float2);
  verificaFloat($num_float3);
  verificaFloat($num_float4);
  echo $num_float4;


?>