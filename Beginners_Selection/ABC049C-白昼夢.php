<?php
# 文字列の入力
fscanf(STDIN, "%s", $str);

for($i = 0; $i < 10000; $i++){

	if(strpos($str,'dreameraser') !== false){
  
		$str = str_replace('dreameraser', '', $str);
  
	}elseif(strpos($str,'dreamerase') !== false){
  
		$str = str_replace('dreamerase', '', $str);
  
	}elseif(strpos($str,'dreamer') !== false){
  
		$str = str_replace('dreamer', '', $str);
  
	}elseif(strpos($str,'dream') !== false){
  
		$str = str_replace('dream', '', $str);
  
	}elseif(strpos($str,'eraser') !== false){
  
		$str = str_replace('eraser', '', $str);
  
	}elseif(strpos($str,'erase') !== false){
  
		$str = str_replace('erase', '', $str);
  
	}else{
    	break;
    }

}

if(empty($str)){
	echo 'YES';
}else{
	echo 'NO';
}

?>
  
