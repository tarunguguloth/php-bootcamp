<?php


function flattenArray($array)
{
    $output = [];
    foreach ($array as $value) {
        if (is_array($value) == true) {
            foreach ($value as $subValue) {
                array_push($output, $subValue);
            }
        } else {
            array_push($output, $value);
        }
    }


    print_r($output);
}

$array = [1, 2, [4, 5], [6, 7], 8];
flattenArray($array);

//other war of solving

/*
<?php
$a = [2, 3, [4, 5], [6, 7], 8];
$b = [];
$it = new RecursiveIteratorIterator(new RecursiveArrayIterator($a));
foreach ($it as $v) {
    array_push($b, $v);
}
foreach ($b as $v) {
    echo $v . " ";
}*/


