<?php
function CHECK($num1,$num2,$num3)
{
  if ($num1 > $num2)
  {
    echo $num1."is the largest number";
  } 
  elseif($num1> $num3){
      echo $num1 ."  is the largest number ";
  }
  else {
       echo $num1 . " is the  smallest on ";
  }
  
  

} 
CHECK( 45,55,66);

?>
