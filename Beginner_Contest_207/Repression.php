<?php
	$value = trim(fgets(STDIN));
	$value_list = explode(" ", $value);

	// 降順に並び替える
	rsort($value_list);

	echo $value_list[0] + $value_list[1]; 
 ?>
