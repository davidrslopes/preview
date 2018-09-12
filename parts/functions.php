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

//GET Contents of current company and client
function getCampaigns($campaign){
  $folder = 'CAMPANHAS/'.$campaign[company].'/'.$campaign[client];
  $folder = getFolderContents($folder);

  foreach ($folder as $key => $value) {
    $folder[$key] = getCampaignDataFromSlug($value);
  }

  return array_reverse($folder);
}

//GET Campaigns from client
function getCampaignsFromClient($campaign, $client){
  if(!$client){$client = $campaign[client];};
  $folder = 'CAMPANHAS/'.$campaign[company].'/'.$client;
  $folder = getFolderContents($folder);

  foreach ($folder as $key => $value) {
    $folder[$key] = getCampaignDataFromSlug($value);
  }

  return array_reverse($folder);
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

//GET Contents of clients folder
function getClients($campaign){
  $folder = 'CAMPANHAS/'.$campaign[company];
  $folder = getFolderContents($folder);
  return $folder;
}

//LIST Folder files
function listFolderFiles($dir){
    $ffs = scandir($dir);

    unset($ffs[array_search('.', $ffs, true)]);
    unset($ffs[array_search('..', $ffs, true)]);

    // prevent empty ordered elements
    if (count($ffs) < 1)
        return;

    //echo '<ol>';
    foreach($ffs as $ff){
        //echo '<li>'.$ff;
        //if(is_dir($dir.'/'.$ff)) listFolderFiles($dir.'/'.$ff);
        //echo '</li>';
    }
    echo '</ol>';
}

//GET Type of extension
function detectType($name){
  $ext= pathinfo($name, PATHINFO_EXTENSION);
  if(!$ext){
    $ext = "folder";
  }
  return $ext;
}

//GET Contents of current campaign
function getCampaign(){
  global $campaign;
  $folder = 'CAMPANHAS/'.$campaign[company].'/'.$campaign[client].'/'.$campaign[folder];

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

//GET Stats
/*function getCampaignStats($company){
  $campaignstats = 1;
  $campaigns = count( glob('CAMPANHAS/'.$company.'/*' , GLOB_ONLYDIR);
  foreach ($campaigns as $key => $campaign) {
    $campaignstats .= count($value);
  }
  return $campaignstats;
}*/

//GET Companies
function getCompanies($company){
  $folder = 'CAMPANHAS';
  $folder = getFolderContents($folder);
  foreach ($folder as $companyKey => $company) {
    $companies[$companyKey][name] = $company;
    $companies[$companyKey][clients] = glob('CAMPANHAS/'.$company.'/*' , GLOB_ONLYDIR);
    /*$companies[$companyKey][campaings] .= getCampaignStats($company);*/
  }
  return $companies;
}

//DEBUG
function debug($what){
  global $testmode;
  if($testmode === true){
    echo '<pre class="bg-dark text-light mb-0"><span class="bg-primary text-light text-left d-inline-block"> DEBUG AREA </span><span class="bg-danger text-light text-right d-inline-block"> TEST MODE ENABLED! </span><br>';
    print_r($what);
    echo '</pre>';
  }
}
