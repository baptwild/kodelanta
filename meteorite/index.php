<?php
$meteorites = ['2:5#24', '1:5#46', '3:0#12', '6:4#29', '7:0#24', '6:2#39', '0:5#47'];
$instructions = 'LLLBBTBTBRTBTBRLRTRRTBRBLTBTRLRTBR';
$posX = 3;
$posY = 2;
$energies = 0;

foreach(str_split($instructions) as $instruction){

    foreach($meteorites as $meteorite){
        $meteoX = explode(":", $meteorite)[0];
        $meteoY = explode(":", explode("#", $meteorite)[0])[1];
        $size = explode("#", $meteorite)[1];

        if(($posY == $meteoY and ($posX + 1 == $meteoX or $posX - 1 == $meteoX)) or ($posX == $meteoX and ($posY + 1 == $meteoY or $posY - 1 == $meteoY))){
            //passage à coté d'une meteorite
            //57 resutlats
            $energies += ceil($size / 5);
        }
    }

    switch ($instruction) {
        case 'R':
            $posX++;
            break;
        case 'L':
            $posX--;
            break;
        case 'T':
            $posY++;
            break;
        case 'B':
            $posY--;
            break;
    }

    $energies++;
}
echo $energies;
?>