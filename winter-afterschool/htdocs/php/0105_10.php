<?php

	$score=array(80,90,90,79,89);
	for($i=0;$i<=5;$i++){
		$sum+=$score[$i];
	}
	echo $sum."<br>";
	$eve=$sum/5;
	echo $eve;
 ?>