<?php

$NAME = $_GET['origtemp'];
 function convert($value, $type){
    if($type== "f"){
       return (((9/5)*$value) +(32));
   }
    elseif ($type== "c"){
       return (($value - 32) * (5/9));
   }
}

$param = intval($NAME);

if ($param>0) {
  $newtemp = convert($param, "c");
  echo "$newtemp \n";
} else{
	shell_exec('sleep 10');
	echo "done";
}

?>
