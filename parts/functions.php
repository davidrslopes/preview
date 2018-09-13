<?php

//GET Folder contents
function getFolderContents($dir){
  $folders = scandir($dir);
  unset($folders[array_search('.', $folders, true)]);
  unset($folders[array_search('..', $folders, true)]);
  return $folders = array_values($folders);
}

//GET Campaign data from slug
function getCampaignDataFromSlug($campaign_slug){
  $campaign_slug_data = explode(' ',$campaign_slug);
  $campaign[date] = urldecode ( $campaign_slug_data[0] );
  $campaign[name] = urldecode ( strstr($campaign_slug,' ') );
  $campaign[folder] = urldecode ($campaign_slug);
  return $campaign;
}

//GET Campaigns for navbar
function getCampaignsNav($campaign){
  $folder = 'CAMPANHAS/'.$campaign[company].'/'.$campaign[client];
  $folder = getFolderContents($folder);

  foreach ($folder as $key => $value) {
    $folder[$key] = getCampaignDataFromSlug($value);
  }

  return array_slice(array_reverse($folder), 0, 10);
}

//GET Type of extension
function detectType($name){
  $ext= pathinfo($name, PATHINFO_EXTENSION);
  if(!$ext){
    $ext = "folder";
  }
  return $ext;
}

//TODO: NEW VERSION: GET Contents of current campaign
function getCampaign(){
  global $current;
  $folder = 'CAMPANHAS/'.$current[company].'/'.$current[client].'/'.$current[folder];

  //$ffs = scandir($folder);
  $fffs = glob($folder . '/*');
  foreach ($fffs as $ffkey => $ff) {
    $ffs[$ffkey][name] = substr(str_replace($folder,'',$ff),1);
    $ffs[$ffkey][link] = $ff;
    //SUBFOLDERS AND FILES
    $ffsubs = glob($ff . '/*');
    foreach ($ffsubs as $ffsubkey => $ffsub) {
      $ffs[$ffkey][subfolders][$ffsubkey][name] = substr(str_replace($ff,'',$ffsub),1);
      $ffs[$ffkey][subfolders][$ffsubkey][link] = '/'.$ffsub;
      $ffs[$ffkey][subfolders][$ffsubkey][type] = detectType(substr(str_replace($ff,'',$ffsub),1));
    }

  }

  // prevent empty ordered elements
  if (count($ffs) < 1)
      return;

  return $ffs;
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
      $client_count = 0;
      $campaign_count = 0;

      foreach ($clients as $clientKey => $client) {
        $all[companies][$companyKey][clients][$clientKey][name] = str_replace($company.'/','',$client);
        $all[companies][$companyKey][clients][$clientKey][link] = str_replace($baseFolder.'/','/',$client);
        $all[companies][$companyKey][clients][$clientKey][folder_path] = $client;

        //Count clients (w/out Showreel and Interno)
        if(str_replace($company.'/','',$client) === "Showreel" || str_replace($company.'/','',$client) === "Interno"){
          //Don't Count
        }else{
          $client_count++;
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
              $campaign_count++;
            }
          }
        }
        //END CAMPAIGNS

        //Count clients definition (w/out Showreel and Interno)
        $all[companies][$companyKey][client_count] = $client_count;
        $all[companies][$companyKey][campaign_count] = $campaign_count;
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
