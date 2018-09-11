<?php
//GET DATA FROM URL
$testmode = true;

$url = trim( $_SERVER['REQUEST_URI'], '/' );
$url = explode('/',$url);

$colors[OMG] = '#004685';
$colors[OMD] = '#EE3425';
$colors[PHD] = '#3D1A52';
$colors[FUSE] = '#BE0620';

if($url){
  //COMPANY (This sets theme and folder orig)
  $campaign[company] = urldecode ( $url[0] );
  $campaign[company_color] = $colors[strtoupper ($campaign['company'])];

  //IF CLIENT
  if($url[1]){
    $campaign[client] = urldecode ( $url[1] );
  }

  //IF CAMPAIGN
  if($url[2]){
    $url_data = explode('%20',$url[2]);
    $campaign[date] = urldecode ( $url_data[0] );
    $campaign[name] = urldecode ( strstr($url[2],'%20') );
    $campaign[folder] = urldecode ( $url[2] );
    //$campaign[target_url] = "http://www.renault.pt/zoe"; //Dinamicly?
  }
}
