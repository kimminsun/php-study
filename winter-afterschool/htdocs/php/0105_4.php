<?php

	$height=169;
	$weight=65;

	$diet=$height-(100*0.9);

	if($diet<$weight){
		echo "다이어트가 필요합니다";
	}
	else{
		echo "정상입니다";
	}

 ?>