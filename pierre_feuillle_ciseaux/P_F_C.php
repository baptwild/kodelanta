<?php

function pierreFeuilleCiseaux(string $coups)
{
    $array_coups = str_split($coups);
    $result='';
    foreach ($array_coups as $letter) {
        switch ($letter) {
            case 'P':
                $result=$result.'F';
                break;
            case 'F':
                $result=$result.'C';
                break;
            case 'C':
                $result=$result.'P';
                break;
            default:
                break;
        }
    }
    return $result;
}

function coupsRandom(int $numCoups){
    $listesCoups=['P','F','C'];
    $coups='';
    for ($i=0; $i < $numCoups; $i++) {
        $numRandom= rand(0,2);
        $coups=$coups.$listesCoups[$numRandom];
    }
    return $coups;
}

$coupsRandom=coupsRandom(10);
echo $coupsRandom;
echo '              ';
$results=pierreFeuilleCiseaux($coupsRandom);
echo $results;