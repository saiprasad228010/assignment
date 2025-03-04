<?php
    $array = array('name' => 'geek', 'age' => '22');

if (array_search('geek', $array) !== false) {
    echo 'Found the key';
} else {
    echo 'Key not found';
}

?>
