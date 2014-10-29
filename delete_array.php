<?php
$array = array("string1", "string2", "string3", "string4", "string3");
remove_string($array);
print_r($array);

function remove_string(&$array){
	$index = array_search('string3',$array);
	if($index !== FALSE){
		unset($array[$index]);
		remove_string($array);
	}
}
?>