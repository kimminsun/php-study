<?php

	$score=79;
	$drive=81;
	

	if($score>70 && $drive>80){
		echo "합격입니다<br>";
	if($score>90)
		echo "수";
	else if($score>80)
		echo "우";
	else if($score>70)
		echo "미";
	else if($score>60)
		echo "양";
	else
		echo "가";
	}

 ?>