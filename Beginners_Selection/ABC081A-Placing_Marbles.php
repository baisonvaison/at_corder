<?php

# スペース区切りの整数の入力
fscanf(STDIN, "%d", $value);

$num_list = str_split($value);

$count = count($num_list);

$total = 0;

for($i = 0; $i < $count; $i++){
  
  if($num_list[$i] == 1){
  	$total = $total + 1;
  }
  
}

echo $total;

?>
