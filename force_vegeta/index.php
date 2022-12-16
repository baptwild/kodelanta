<?php
$ennemis=[256,851,899,1193];
$force_vegeta=165;
$niveau_vegeta=1;
foreach ($ennemis as $ennemi) {
    while ($force_vegeta*$niveau_vegeta<$ennemi) {
        $niveau_vegeta++;
    }
    $force_vegeta+=floor($ennemi*10/100);
}
echo "force vegeta = ". $force_vegeta*$niveau_vegeta.'     ';
echo "niveau vegeta = ". $niveau_vegeta;
?>


<?php
$sangoku = ['HP' => 10000, 'F' => 217, 'S' => 665];
$vegeta = ['HP' => 10000, 'F' => 121, 'S' => 552];

$nb_tour = 0;
$nb_special_sangoku = 0;
$nb_hp_sangoku = 0;
$nb_special_vegeta = 0;
$nb_hp_vegeta = 0;
while ($sangoku['HP'] > 0 && $vegeta['HP'] > 0) {
    if ($nb_hp_vegeta>1000 || $nb_hp_sangoku>1000) {
        if ($nb_hp_vegeta>1000) {
            $nb_hp_vegeta=0;
            $sangoku['HP']-=$vegeta['S'];
            $nb_tour++;
            $nb_special_vegeta++;
        }if ($nb_hp_sangoku>1000) {
            $nb_hp_sangoku=0;
            $vegeta['HP']-=$sangoku['S'];
            $nb_tour++;
            $nb_special_sangoku++;
        }
    } else {
        $sangoku['HP']-=$vegeta['F'];
        $nb_hp_sangoku +=$vegeta['F'];
        $vegeta['HP']-=$sangoku['F'];
        $nb_hp_vegeta +=$sangoku['F'];
        $nb_tour++;
    }
}
if ($sangoku['HP'] <= 0 && $vegeta['HP'] <= 0) {
    echo 'DRAW_'.$nb_tour;
}elseif ($sangoku['HP'] <= 0) {
    echo 'VEGETA_'.$nb_tour.'_'.$nb_special_vegeta;
}else{
    echo 'SANGOKU_'.$nb_tour.'_'.$nb_special_sangoku;
}
?>
