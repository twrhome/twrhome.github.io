<?php

// 有重複的，return false ，反之則true
function getResult($input_array)
{
	$temp_aray =[];
	$i = 0 ;
	for ($i=0;$i< count($input_array);$i++){
		if (in_array($i, $temp_aray)){
			return false;
			// break;
		}else{
			$temp_aray[]=$input_array[$i];
		}
	}

	return true;
}

$array = [1,3,3,4] ;
$result = getResult($array);
var_dump($result);