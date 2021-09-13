<?php
$fruits = array("a" => "orange", "b" => "banana", "c" => "apple");


foreach ($fruits as $key => $value) {
    // $arr[3] will be updated with each value from $arr...
    echo "{$key}"."    and    ". "{$value} "."<br>";
    // print_r($arr);
}
