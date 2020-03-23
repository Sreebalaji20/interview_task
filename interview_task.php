<?php

for( $i=1; $i<=100; $i++ )

{
  $three = $i % 3;
  $five = $i % 5;
  $both = $i % 15;
  $three_res = 'Linio';
  $five_res = 'IT';
  $both_res = 'Linianos';
  $msg = '';

switch ($three) {
    case 0:
        $msg = $three_res;
        echo $msg;
        break;
  default:
    echo $i;
  break;
}
  
switch ($five) {
    case 0:
        $msg = $five_res;
        echo $msg;
        break;
}
  
switch ($both) {
    case 0:
        $msg = $both_res;
        echo $msg;
        break;
  
    
}

echo "<br>";

}

?>