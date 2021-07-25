<?php
 $value = trim(fgets(STDIN));
 $value_list = explode(" ", $value);
 
 // 各値を変数に代入
 $a = $value_list[0];
 $b = $value_list[1];
 $c = $value_list[2];
 $d = $value_list[3];
 
 #達成不可能なとき
 if ($d*$c-$b <= 0){
     $n = -1;
 #達成可能なとき
    }else{
      
     if ($a%($d*$c-$b) == 0){
         $n = $a/($d*$c-$b);
     }else{
         $n = floor($a/($d*$c-$b)+1);
     }
    }
    echo $n;
                 
/*

n回目の水色の数：A + Bn
n回目の赤色の数：Cn
目標は水色が赤色のD倍以下 => A + Bn <= D × (C × n)
式変形すると
A <= CDn - Bn
A <= n(CD - B)
両辺をCD - B で割ると、
A/ ( CD - B ) <= n
つまり、nが A/( CD - B ) 以上の時、目標は達成できる。
CD - Bは0より大きくないと、nは負になってしまうので、
CD - B <= 0なら -1 を出力
CD - B > 0 の時、
A / ( CD - B )が割り切れるなら、 
n = A / ( CD - B ) を出力
A / ( CD - B )が割り切れないなら、
A / ( CD - B ) < n を満たすnは、
A / ( CD - B ) を切り上げたもの
つまり、A / ( CD - B ) の切り下げ + 1 を出力

*/

 ?>
