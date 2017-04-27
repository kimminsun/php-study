<?php
 
 $money=3000;
 $price=800;
 $num=3;

 $exe=$money-($price*$num);

 echo "물건값 : ".$price."<br>";
 echo "구매갯수 : ".$num."<br>";
 echo "지불액 : ".$money."<br>";
 echo "거스름돈은 <b><font color=red size=6pt>".$exe."</font></b>원입니다.";

 ?>