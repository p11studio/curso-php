<?php

$michis_felinos = true;
$michis_4_patas = true;
$michis_vuelan = false;
$michis_programan = false;


var_dump($michis_felinos && $michis_4_patas);
var_dump($michis_4_patas && $michis_vuelan);
var_dump($michis_4_patas || $michis_vuelan);


echo "\n";