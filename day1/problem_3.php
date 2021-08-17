<?php
$inputString=["snake_case", "camel_case"];
$arrayString=[];

foreach($inputString as $sub){
    $pos = strpos($sub, "_" );
    $char = ord($sub{$pos+1});
    $sub{$pos+1} = chr($char ^ 32);
    array_push($arrayString,str_replace('_', '', $sub));
}
print_r($arrayString);

/*
 * other way of doing it
    foreach($inputString as $sub){
    array_push($arrayString,lcfirst(str_replace(' ', '', ucwords(str_replace('_', ' ', $sub)))));
}
print_r($arrayString);*/