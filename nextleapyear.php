<?php

for ($x = date("Y"); $x <= date("Y")+10; $x++) {
    if (($x % 4 == 0 && $x % 100 != 0) 
        || ($x % 400 == 0))
    echo "next leap year is: $x \n";
  }  
  ?>