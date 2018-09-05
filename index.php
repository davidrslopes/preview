<?php
//GET URL
$url = trim( $_SERVER['REQUEST_URI'], '/');

//HEADER
include('parts/header.php');

//NAV
include('parts/nav.php');

//PAGES ROUTER
if(!empty($url)){
  //ROUTER
  include('pages/'.$url.'.php');
}else{
  //HOME
  include('pages/home.php');
}

//FOOTER
include('parts/footer.php');

?>
