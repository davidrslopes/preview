<?php
//BASE FOLDER NAME
$baseFolder = "CAMPANHAS";

//DEBUG MODE
$testmode = true;

//GET DATA FROM URL
$url = trim( $_SERVER[REQUEST_URI], '/' );
$url = explode('/',$url);
$path = $_GET[path];

//COLORS
$colors[OMG] = '#004685';
$colors[OMD] = '#EE3425';
$colors[PHD] = '#3D1A52';
$colors[FUSE] = '#BE0620';

if($url){
  //IF COMPANY (This sets theme and folder orig)
  $current[company] = urldecode ($url[0]);
  $current[company_color] = $colors[strtoupper ($current[company])];

  //IF CLIENT
  if($url[1]){
    $current[client] = urldecode ($url[1]);
  }

  //IF CAMPAIGN
  if($url[2]){
    $url_data = explode('%20',$url[2]);
    $current[date] = urldecode ($url_data[0]);
    $current[name] = urldecode (strstr($url[2],'%20'));
    $current[folder] = urldecode ($url[2]);
    //$campaign[target_url] = "http://www.renault.pt/zoe"; //Dinamicly?
  }
}

//VERSIONING
$version[number] = "α";
$version[desc] = 'Versão Alpha<br><small class=\'text-danger\'>Reservado apenas para preview interno</small>';
