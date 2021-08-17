<?php

$json="{\"players\":[{\"name\":\"Ganguly\",\"age\":45,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Dravid\",\"age\":45,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Dhoni\",\"age\":37,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Virat\",\"age\":35,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Jadeja\",\"age\":35,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Jadeja\",\"age\":35,\"address\":{\"city\":\"Hyderabad\"}}]}";

$inputObject=json_decode($json);

function getNames($inputObject)
{
    $arrayNames = array();
    foreach ($inputObject as $players) {
        foreach ($players as $player) {
            array_push($arrayNames, $player->name);
        }
    }
    print_r($arrayNames);
}
function getAge($inputObject)
{
    $arrayAge = array();
    foreach ($inputObject as $players) {
        foreach ($players as $player) {
            array_push($arrayAge, $player->age);
        }
    }
    print_r($arrayAge);
}
function getAddress($inputObject)
{
    $arrayAddress = array();
    foreach ($inputObject as $players) {
        foreach ($players as $player) {
            array_push($arrayAddress, $player->address->city);
        }
    }
    print_r($arrayAddress);
}
function getUniqueNames($inputObject)
{
    $arrayUnique = array();
    foreach ($inputObject as $players) {
        foreach ($players as $player) {

            $arrayUnique[$player->name]=1;
        }
    }

    print_r(array_keys($arrayUnique));
}
function getMaxAge($inputObject)

{
    $max=0;
    foreach ($inputObject as $players) {
        foreach ($players as $player) {
            if( $player->age>$max){
                $max=$player->age;
            }
        }
    }
    $maxAge = array();
    foreach ($inputObject as $players) {
        foreach ($players as $player) {

            if($player->age==$max){
                array_push($maxAge,$player->name);
            }
        }
    }

    print_r($maxAge);
}

getNames($inputObject);
getAge($inputObject);
getAddress($inputObject);
getUniqueNames($inputObject);
getMaxAge($inputObject);