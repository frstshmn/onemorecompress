<?php 

	// function CheckBit($bit)
	// {
	// 	if($bit == 1){

	// 	}
	// }

	$string = "Hello world";
    $binary = [];
    $characters = str_split($string);
    foreach ($characters as $character) {
    	array_push($binary, decbin(ord($character)));
    }
 	
 	$binary = implode('', $binary);

 	// $count = 1;
 	// $digits = 0;

 	// for($i = 0; $i <= strlen($binary); $i++)
 	// {
 	// 	if($binary[$i] == $binary[$i-1])
	 // 	{
	 // 		$count = $count + 1;
	 // 	}
	 // 	else if($binary[$i] != $binary[$i-1])
	 // 	{
	 // 		$digits = $digits.$count;
	 // 		$count = 1;
	 // 	}
 	// }
	echo($binary);
	// echo "<br>";
 	// echo $digits;
?>