<?php

//GET Folder contents
function getFolderContents($dir){
  $folders = scandir($dir);
  unset($folders[array_search('.', $folders, true)]);
  unset($folders[array_search('..', $folders, true)]);
  return $folders = array_values($folders);
}

//GET Campaigns for navbar
function getCampaignsNav($campaign){
  $folderPath = 'CAMPANHAS/'.$campaign[company].'/'.$campaign[client];
  $folder = glob($folderPath . '/*');

  foreach ($folder as $key => $value) {
    $folderName = explode(' ',str_replace($folderPath.'/','',$value));
    $navigation[$key][name] = str_replace($folderName[0].' ','', str_replace($folderPath.'/','',$value) );
    $navigation[$key][date] = date('d/m/Y',strtotime($folderName[0]));
  }

  return array_slice(array_reverse($navigation), 0, 10);
}

//GET Type of extension
function getFileType($name){
  $ext= pathinfo($name, PATHINFO_EXTENSION);
  if(!$ext){
    $ext = "folder";
  }
  return $ext;
}
//GET File name w/out extention
function getFileName($file){
  if (defined('PATHINFO_FILENAME')) return pathinfo($file,PATHINFO_FILENAME);
  if (strstr($file, '.')) return substr($file,0,strrpos($file,'.'));
}

//GET Contents of current campaign
function getCampaign(){
  global $current;
  global $baseFolder;

  $campaignFolder = $baseFolder.'/'.$current[company].'/'.$current[client].'/'.$current[folder];

  $items = glob($campaignFolder . '/*');
  //FOLDERS / FILES
  foreach ($items as $itemKey => $item) {
    $type = getFileType(str_replace($campaignFolder.'/','',$item));
    if($type === 'folder'){
      //This is a folder
      $campaign[$itemKey][name] = str_replace($campaignFolder.'/','',$item);
      $campaign[$itemKey][link] = str_replace($baseFolder.'/','/',$item);
      $campaign[$itemKey][type] = getFileType(str_replace($campaignFolder.'/','',$item));
      $campaign[$itemKey][folderPath] = $item;

      //SUBFOLDERS / FILES
      $subItems = glob($item . '/*');
      foreach ($subItems as $subItemsKey => $subItem) {
        $subType = getFileType(str_replace($item.'/','',$subItem));
        if($subType === 'folder'){
          //This is a subfolder
          $campaign[$itemKey][subItems][$subItemsKey][name] = str_replace($item.'/','',$subItem);
          $campaign[$itemKey][subItems][$subItemsKey][link] = str_replace($baseFolder.'/','/',$subItem);
          $campaign[$itemKey][subItems][$subItemsKey][type] = getFileType(str_replace($item.'/','',$subItem));
          $campaign[$itemKey][subItems][$subItemsKey][folderPath] = $subItem;
        }else{
          //This is a subfile not a subfolder
          $campaign[$itemKey][subItems][$subItemsKey][name] = getFileName(str_replace($item.'/','',$subItem));
          $campaign[$itemKey][subItems][$subItemsKey][src] = '/'.$subItem;
          $campaign[$itemKey][subItems][$subItemsKey][type] = getFileType(str_replace($item.'/','',$subItem));
        }
      }
    }else{
      //This is a file not a folder
      $campaign[$itemKey][name] = getFileName(str_replace($campaignFolder.'/','',$item));
      $campaign[$itemKey][src] = '/'.$item;
      $campaign[$itemKey][type] = getFileType(str_replace($campaignFolder.'/','',$item));
    }
  }

  // prevent empty ordered elements
  if (count($campaign) < 1){return;}

  debug($campaign,'getCampaign()');
  return $campaign;
}

// NEW FUNCTIONS ====================

//GET ALL
function getAll(){
  global $baseFolder;

  $folders = glob($baseFolder.'/*', GLOB_ONLYDIR);
  //Count companies
  $all[company_count] = count($folders);

  foreach ($folders as $companyKey => $company) {
    $all[companies][$companyKey][name] = str_replace($baseFolder.'/','',$company);
    $all[companies][$companyKey][link] = str_replace($baseFolder.'/','/',$company);
    $all[companies][$companyKey][folder_path] = $company;

    //CLIENTS
    $clients = glob($company.'/*' , GLOB_ONLYDIR);
    if($clients){
      $clientCount = 0;
      $campaignCount = 0;

      foreach ($clients as $clientKey => $client) {
        $all[companies][$companyKey][clients][$clientKey][name] = str_replace($company.'/','',$client);
        $all[companies][$companyKey][clients][$clientKey][link] = str_replace($baseFolder.'/','/',$client);
        $all[companies][$companyKey][clients][$clientKey][folder_path] = $client;

        //Count clients (w/out Showreel and Interno)
        if(str_replace($company.'/','',$client) === "Showreel" || str_replace($company.'/','',$client) === "Interno"){
          //Don't Count
        }else{
          $clientCount++;
        }

        //CAMPAIGNS
        $campaigns = glob($client.'/*' , GLOB_ONLYDIR);
        if($campaigns){
          //Count campaigns
          $all[companies][$companyKey][clients][$clientKey][campaign_count] = count($campaigns);

          foreach ($campaigns as $campaignKey => $campaign) {
            //Get date from folder name
            $folderName = explode(' ',str_replace($client.'/','',$campaign));
            $campaignDate = date('d/m/Y',strtotime($folderName[0]));

            //Folder to name/date definition
            if(!empty($campaignDate)){
              $all[companies][$companyKey][clients][$clientKey][campaigns][$campaignKey][name] = str_replace($folderName[0].' ','', str_replace($client.'/','',$campaign) );
              $all[companies][$companyKey][clients][$clientKey][campaigns][$campaignKey][date] = $campaignDate;
            }else{
              $all[companies][$companyKey][clients][$clientKey][campaigns][$campaignKey][name] = str_replace($client.'/','',$campaign);
            }
            //Path and Folder Name
            $all[companies][$companyKey][clients][$clientKey][campaigns][$campaignKey][link] = str_replace($client.'/','/',$campaign);
            $all[companies][$companyKey][clients][$clientKey][campaigns][$campaignKey][folder_path] = $campaign;
            $all[companies][$companyKey][clients][$clientKey][campaigns][$campaignKey][folder_name] = str_replace($client.'/','',$campaign);

            //Count Campaigns
            if(str_replace($company.'/','',$client) === "Showreel" || str_replace($company.'/','',$client) === "Interno"){
              //Don't Count
            }else{
              $campaignCount++;
            }
          }
        }
        //END CAMPAIGNS

        //Count clients definition (w/out Showreel and Interno)
        $all[companies][$companyKey][client_count] = $clientCount;
        $all[companies][$companyKey][campaign_count] = $campaignCount;
      }
    }
    //END CLIENTS
  }
  //END COMPANIES
  //debug($all);
  return $all;
}

//GET COMPANIES ONLY
function getCompanies(){
  global $baseFolder;
  $companyFolders = glob($baseFolder.'/*', GLOB_ONLYDIR);

  foreach ($companyFolders as $companyKey => $company) {
    $companies[$companyKey][name] = str_replace($baseFolder.'/','',$company);
    $companies[$companyKey][link] = str_replace($baseFolder.'/','/',$company);
    $companies[$companyKey][folder_path] = $company;
  }
  //debug($companies,'getCompanies');
  return $companies;
}

//GET COMPANIES ONLY
function getCompanyClients($company = false){
  global $current, $baseFolder;
  if(!$company){
    $company = $current[company];
  }
  $companyPath = $baseFolder.'/'.$company;

  $clientFolders = glob($companyPath.'/*', GLOB_ONLYDIR);

  if($clientFolders){
    foreach ($clientFolders as $clientKey => $client) {
      $clients[$clientKey][name] = str_replace($companyPath.'/','',$client);
      $clients[$clientKey][link] = str_replace($baseFolder.'/','/',$client);
      $clients[$clientKey][campaign_count] = count(getClientCampaigns($company,str_replace($companyPath.'/','',$client)));
    }

    //debug($clients,'getCompanyClients');
    return $clients;
  }
  return false;
}

//GET CAMPAIGNS ONLY
function getClientCampaigns($company = false, $client = false){
  global $current, $baseFolder;
  if(!$client){
    $company = $current[company];
    $client = $current[client];
  }

  $clientPath = $baseFolder.'/'.$company.'/'.$client;

  $campaignFolders = glob($clientPath.'/*', GLOB_ONLYDIR);

  if($campaignFolders){

    foreach ($campaignFolders as $campaignKey => $campaign) {
      //Get date from folder name
      $folderName = explode(' ',str_replace($clientPath.'/','',$campaign));
      $campaignDate = date('d/m/Y',strtotime($folderName[0]));

      //Folder to name/date definition
      if(!empty($campaignDate)){
        $campaigns[$campaignKey][name] = str_replace($folderName[0].' ','', str_replace($clientPath.'/','',$campaign) );
        $campaigns[$campaignKey][date] = $campaignDate;
      }else{
        $campaigns[$campaignKey][name] = str_replace($clientPath.'/','',$campaign);
      }
      //Path and Folder Name
      $campaigns[$campaignKey][link] = str_replace($baseFolder.'/','/',$campaign);
      $campaigns[$campaignKey][folder_path] = $campaign;
      $campaigns[$campaignKey][folder_name] = str_replace($clientPath.'/','',$campaign);
    }

    //debug($campaigns,'getClientCampaigns');
    return array_reverse($campaigns);
  }
  return false;
}

//TODO GET NAVIGATION
//TODO CHECK IF FOLDER EXISTS FOR CURRENT PATH

//DEBUG
function debug($what, $the = ""){
  global $testmode;
  if($testmode === true): ?>
  <section class="debug mb-4">
    <div class="container-fluid">
      <div class="row">
        <div class="col-8 col-lg-5 bg-info text-light text-left"><small>DEBUG:</small> <?php echo $the; ?></div>
        <div class="col-4 offset-lg-5 col-lg-2 bg-secondary text-light text-right"><small>TEST MODE ENABLED!</small></div>
      </div>
      <div class="row">
        <pre class="col bg-dark text-light pt-1 pb-1 mb-0"><?php print_r($what); ?></pre>
      </div>
    </div>
  </section>
  <?php endif;
}
?>
