<!DOCTYPE html><html>
<?php

//PREREQS
$address = $_GET["address"];
$city = strtolower($_GET["city"]);
$pollcon = $_GET["pollcon"];
$outwater = $_GET["outwater"];
$inwater = $_GET["inwater"];
$buildwater = $_GET["buildwater"];
$fundver = $_GET["fundver"];
$minenper = $_GET["minenper"];
$buildenmeter = $_GET["buildenmeter"];
$fundrefman = $_GET["fundrefman"];
$recycle = $_GET["recycle"];
$iaq = $_GET["iaq"];
$tobacco = $_GET["tobacco"];
$a = 0;
//LOCATION AND TRANSPORT
$locs = 0;
$transit = $_GET["transit"];
$bicycle = $_GET["bicycle"];
$carpool = $_GET["carpool"];
$greenvehicle = $_GET["greenvehicle"];
//SUSTAINABLE SITES
$sus = 0;
$habitat = round($_GET[ "habitat"]/20);
$sus = $sus + $habitat;
$lightpollution = round($_GET[ "lightpollution"]/20);
$sus = $sus + $lightpollution;
//WATER EFFICIENCY
$h2o = 0;
$wateruse =  round($_GET[ "wateruse"]/20);
$h2o = $h2o+$wateruse;
//ENERGY AND ATMOSPHERE
$ens = 0;
if($_GET["energymetering"] == "yes"){
    $ens = $ens + 1;
}
$energyopt = round($_GET["energyopt"]/10);
$ens = $ens + $energyopt;
//MATERIAL AND RESOURCES
$mats = 0;
if($_GET["constructionwaste"] == "yes"){
    $mats = $mats + 2;
}
if($_GET["lifecycleimpact"] == "yes"){
    $mats = $mats + 5;
}
//INDOOR ENVIRONMENT QUALITY
$ins = 0;
if($_GET["emission"] == "yes"){
    $ins = $ins + 3;
}
if($_GET["thermal"] == "yes"){
    $ins = $ins + 1;
}
$ins = $ins + round($_GET["light"]/20);
if($_GET["watermetering"] == "yes"){
    $h2o = $h2o + 1;
}
 

if($_GET["rainwaterharv"] == "yes"){
    $sus = $sus + 3;
}

if($pollcon == "yes") {
     $pollcon = true;
     $a++;
}else{
    $pollcon = false;}

if($outwater == "yes") {
     $outwater = true;
     $a++;
}else{
    $outwater = false;
}
if($inwater == "yes") {
     $inwater = true;
     $a++;
}else{
    $inwater = false;
}
if($buildwater == "yes") {
     $buildwater = true;
     $a++;
}else{
    $buildwater = false;
    
}
if($fundver == "yes") {
     $fundver = true;
     $a++;
}else{
    $fundver = false;
}
if($minenper == "yes") {
     $minenper = true;
     $a++;
}else{
    $minenper = false;
}
if($buildenmeter == "yes") {
     $buildenmeter = true;
     $a++;
}else{
    $buildenmeter = false;
}
if($fundrefman == "yes") {
     $fundrefman = true;
     $a++;
}else{
    $fundrefman = false;
}
if($recycle == "yes") {
     $recycle = true;
     $a++;
}
else{
    $recycle = false;
    
}
if($iaq == "yes") {
     $iaq = true;
     $a++;
}else{
    $iaq = false;
}
if($tobacco == "yes") {
     $tobacco = true;
     $a++;
}else{
    $tobacco = false;
}





if($transit == "yes") {
    $locs = $locs  + 5;
    }
if($bicycle == "yes") {
    $locs = $locs + 1;
    }
if($carpool == "yes") {
    $locs = $locs + 1;
    }
if($greenvehicle == "yes") {
    $locs = $locs + 1;
    }
if($a == 11){
echo "<h3>Prereqs</h3><p>You have met all pre-requisites</p>";
}
else{
echo "<h3>Prereqs</h3><p>You have not met some or all of your pre-requisites</p>";
}
echo "<h3>Location and Transport</h3><p>Your score: ".$locs." out of 8";
echo "<h3>Sustainable sites</h3><p>Your score: ".$sus." out of 13";
echo "<h3>Water Efficiency</h3><p>Your score: ".$h2o." out of 6";
echo "<h3>Energy and Atmosphere</h3><p>Your score: ".$ens." out of 11";
echo "<h3>Materials and Resources</h3><p>Your score: ".$mats." out of 7";
echo "<h3>Indoor Environment Quality</h3><p>Your score: ".$ins." out of 9";
$total = $locs + $sus + $h2o + $ens + $mats + $ins;
if($total >= 41 && $a == 11){
    echo "<h5>Based on your self analysis you are eligible to be a LEEDS certified member</h5>";
}
elseif($total >= 41 && $a == 11){
    echo "<h5>Based on your self analysis you are eligible to be a LEEDS gold member</h5>";
}elseif($total >= 25 && $a == 11){
    echo "<h5>Based on your self analysis you are eligible to be a LEEDS silver member</h5>";
}elseif($total >= 20 && $a == 11){
    echo "<h5>Based on your self analysis you are eligible to be a LEEDS certified member</h5>";
}


?>
</html>

