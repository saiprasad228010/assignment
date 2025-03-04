<?php
$str = "this,is,training";
$arr2=(explode(",",$str));
print_r($arr2);
$List = implode('*', $arr2);
print_r($List);

?>
