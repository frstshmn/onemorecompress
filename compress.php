<?php 

	// function CheckBit($bit)
	// {
	// 	if($bit == 1){

	// 	}
	// }


	$string = "Hello";
	$characters = str_split($string);
 
    $binary = [];
    foreach ($characters as $character) {
        $data = unpack('H*', $character);
        $binary[] = base_convert($data[1], 16, 2);
    }
 	
 	$binary = implode('', $binary);

 	$count = 1;
 	$digits = 0;

 	for($i = 0; $i <= strlen($binary); $i++)
 	{
 		if($binary[$i] != $binary[0])
 		{
 			if($binary[$i] == $binary[$i-1])
	 		{
	 			$count = $count + 1;
	 		}
	 		else if($binary[$i] != $binary[$i-1])
	 		{
	 			$digits = $digits.$count;
	 			$count = 1;
	 		}
 		}
 		else{
 			continue;
 		}
 		

 	}
	echo $binary;
	echo "<br>";
   	echo $digits;
?>