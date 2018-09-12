<?php
//GET PATH VAR
$path = $_GET[path];

if($campaign){
  if($campaign[company]){
    //IF CAMPAIGN
    if($campaign[client]){
      if($campaign[name] || $campaign[date]){
        //IF FOLDER EXISTS : LOAD CAMPAIGN OR SHOW PREVIEW
        if(!empty($_GET[preview])){
          include('templates/folder-preview.php');
        }else{
          include('templates/campaign.php');
        }
      }else{
        //LOAD CLIENT CAMPAIGN LIST
        include('templates/campaign-list.php');
      }
    }else{
      //COMPANIES CLIENTS LIST
      include('templates/clients.php');
    }
  }else{
    //COMPANIES LIST
    include('templates/companies.php');
  }
}else{
  include('templates/error.php');
}
