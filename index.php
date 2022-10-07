<?php
error_reporting(E_ALL);
$tick=[];
$tick["bid"]=$_GET['bid'];
$tick["ask"]=$_GET['ask'];
$tick["vol"]=$_GET['vol'];
$tick["time"]=$_GET['time'];
$ret='none';
$history=[];
$history[]=$tick;
$t=time();    //1970 óta eltelt másodperc
$aktPerc=floor($t/60) ; //1970 óta eltelt perc lefelé kerekítve
$aktPercParam=[
    'min'=>1,
    'max'=>1,
    'vol'=>1,
    'average'=>1,
    'tick'=>1,  // hány elem összesítése
    'egyiranyMax'=>1,
    'egyiranyAtlag'=>1,
    'gyorsulMax'=>1,
    'lassulMax'=>1,
];


echo $ret;
print_R($tick) ;