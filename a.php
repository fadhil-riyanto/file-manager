<?php

function series_sum($n) {
  $sum = 0;
  
  for ($i = 0; $i <= ($n - 1); $i++) {
    $sum += (1 / (1 + (3*$i)));
  }
  
  return number_format($sum, 2, '.', '');
}