<?php
//PATH MUST BE THE SAME AS AN EXISTING FOLDER

//OLD ROUTER
if($current){
  if($current[company]){
    //IF CAMPAIGN
    if($current[client]){
      if($current[name] || $current[date]){
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
