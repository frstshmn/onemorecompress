<?php 
	$string = "Hello";
	$characters = str_split($string);
 
    $binary = [];
    foreach ($characters as $character) {
        $data = unpack('H*', $character);
        $binary[] = base_convert($data[1], 16, 2);
    }
 	
 	$binary = implode('', $binary);
 	
    echo $binary;
?>