<?php

require_once "modeli/zivotinje.php";
require_once "modeli/kopnena.php";
require_once "modeli/vodena.php";

$kopnenaZivotinja= new kopnena ();
$kopnenaZivotinja ->brojNogu =4;
$kopnenaZivotinja->tezina=2;
echo $kopnenaZivotinja->brojNogu;
echo $kopnenaZivotinja->tezina;

$vodenaZivotinja=new vodena ();
$vodenaZivotinja->vrstaVode="slana";
$vodenaZivotinja->tezina=9;
echo $vodenaZivotinja->vrstaVode;
echo $vodenaZivotinja->tezina;

require_once "modeli/pas.php";
require_once "modeli/kokoska.php";

 $pas = new pas();
 $pas->duzinaRepa = 20;
 $pas->tezina= 2;
 echo $pas->duzinaRepa;
 echo $pas->tezina;

 $kokoska = new kokoska ();
 $kokoska->bojaPerja ="bela";
 $kokoska->tezina= 3;
 echo $kokoska->bojaPerja;

 require_once "modeli/riba.php";
 require_once "modeli/meduza.php";

 $som =new riba ();
 $som->krljust=true;
 $som->tezina=2;
 $som->vrstaVode="slatka";
 echo $som->tezina;
 echo $som->vrstaVode;
 echo $som->krljust;

 $meduza = new meduza();
 $meduza->duzinaPipaka = 5;
 $meduza->tezina=10;
 echo $meduza->duzinaPipaka;
