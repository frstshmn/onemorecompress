<?php 

	// function CheckBit($bit)
	// {
	// 	if($bit == 1){

	// 	}
	// }

	$string = "s";

    $binary = [];
    $ascii = [];
    $characters = str_split($string);
    foreach ($characters as $character) {
    	array_push($binary, decbin(ord($character)));
    	array_push($ascii, ord($character));
    }
 	
 	
	echo('Input string: "'.$string.'", ASCII-code: '.implode('', $ascii).', Binary: '.implode('', $binary));
	$binary = implode('', $binary);
 	$count = 1;
 	$digits = null;

 	for($i = 0; $i <= strlen($binary); $i++)
 	{
 		//if($binary[$i-1] != null){
	 		if($binary[$i+1] == $binary[$i])
		 	{
		 		$count = $count + 1;
		 	}
		 	else if($binary[$i+1] != $binary[$i])
		 	{
		 		$digits = $digits.$count;
		 		$count = 1;
		 	}
		// }
		// else{
		// 	continue;
		// }
 	}
 	echo($binary);
	echo "<br>";
 	echo $digits;



 // 	$divide_count = 0;
 // 	while(strlen($digits)!= 20){
 // 		$digits = $digits / 2;
 // 		$divide_count++;
 // 	}
	// echo "<br>";
 // 	echo $digits;



 // 	for ($i=0; $i < $divide_count; $i++) { 
 // 		$digits = $digits*2;
 // 	}
 // 	echo "<br>";
 // 	$digits = rtrim(number_format($digits, 8, "", ""), 0);
 // 	echo $digits;



 	$digits = str_split($digits);
 	$decoded_bin = [];
 	$current_bin = '1';
 	foreach ($digits as $digit) {
 		$j = 1;
 		while($j <= (int)$digit)
 		{
 			array_push($decoded_bin, $current_bin);
 			$j++;
 		}
 		$current_bin = ($current_bin == '1')? '0':'1';
 		//echo($digit);
 	}
 	echo "<br>";
 	$decoded_bin = implode('',$decoded_bin);
 	echo $decoded_bin;



 	$decoded_ascii = [];
 	echo "<br>";
 	for ($i=0; $i < strlen($decoded_bin)+1; $i++) { 
 		array_push($decoded_ascii, $decoded_bin[$i]);
 		if(intdiv($i,8) == 0){

 			echo(chr(bindec(implode('',$decoded_ascii))));
 		}
 	}
 	echo "<br>";
 	echo strlen($decoded_bin);
?>