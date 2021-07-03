<?php

$count = trim(fgets(STDIN));
$value = trim(fgets(STDIN));

$value_list = explode(" ", $value);

$result = 0;

for($i = 0; $i < 10000; $i++){
  
	for($j = 0; $j < $count; $j++){
  
		if( $value_list[$j] % 2 == 0 ){
        	  	$value_list[$j] = $value_list[$j] / 2;
    		}else{
        		break 2;
        	}
	}
  
  	$result = $result + 1;
}

echo $result;

?>
