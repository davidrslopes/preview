<?php
//debug($campaign);

include('jumbotron.php');

$campaign_folders = getCampaign();
//debug($campaign_folders);
?>
<section class="campaign-content">
  <div class="container">
    <div class="row">
      <?php foreach ($campaign_folders as $campaign_folder): ?>
      <div class="col-12 col-md-6 col-lg-4 mt-4">
        <div class="list-group">
          <h5 class="list-group-item"><?php echo $campaign_folder[name] ?></h5>
          <?php foreach ($campaign_folder[subfolders] as $campaign_subfolder): ?>
              <?php
              if($campaign_subfolder['type']) {
                $campaign_subfolder[img] = '<img class="img-fluid" src="'.$campaign_subfolder[link].'" title="'.$campaign_subfolder[name].'">';
                switch ($campaign_subfolder[type]) {
                  case 'zip':
                    echo '<a class="list-group-item list-group-item-action align-items-center" href="'.$campaign_subfolder[link].'" target=_blank">';
                    echo '<div class="d-flex justify-content-between">'.$campaign_subfolder[name];
                    echo '<span class="fa-stack">';
                    echo '<i class="fas fa-file-archive fa-stack-2x text-primary"></i>';
                    echo '<i class="fas fa-download fa-stack-1x fa-inverse"></i>';
                    echo '</span></div>';
                    break;
                  case 'jpg':
                  case 'png':
                  case 'gif':
                    echo '<a class="list-group-item list-group-item-action align-items-center" href="'.$campaign_subfolder[link].'" target=_blank">';
                    echo '<div class="d-block mb-3 text-center">'.$campaign_subfolder[img].'</div>';
                    echo '<div class="d-flex justify-content-between">'.$campaign_subfolder[name];
                    echo '<span class="fa-stack">';
                    echo '<i class="fas fa-file-image fa-stack-2x text-primary"></i>';
                    echo '<i class="fas fa-download fa-stack-1x fa-inverse"></i>';
                    echo '</span></div>';
                    break;
                  case 'folder':
                    $dir = substr($campaign_subfolder[link],1).'/*';
                    $html = glob($dir."*.{html}", GLOB_BRACE);
                    if (!empty($html)) {
                        $campaign_subfolder[link] = '/'.$html[0];
                    }else{
                        $campaign_subfolder[link] = '?preview='.substr($campaign_subfolder[link],1);;
                    }
                    echo '<a class="list-group-item list-group-item-action align-items-center" href="'.$campaign_subfolder[link].'" target=_blank">';
                    //if($campaign_subfolder[img]){echo '<div class="d-block mb-3 text-center">'.$campaign_subfolder[img].'</div>';}
                    echo '<div class="d-flex justify-content-between">'.$campaign_subfolder[name];
                    echo '<span class="fa-stack">';
                    echo '<i class="fas fa-folder fa-stack-2x text-primary"></i>';
                    echo '<i class="fas fa-eye fa-stack-1x fa-inverse"></i>';
                    echo '</span></div>';
                    break;
                  default:
                    echo '<a class="list-group-item list-group-item-action align-items-center" href="'.$campaign_subfolder[link].'" target=_blank">';
                    echo '<div class="d-flex justify-content-between">'.$campaign_subfolder[name];
                    echo '<span class="fa-stack">';
                    echo '<i class="fas fa-file fa-stack-2x text-primary"></i>';
                    echo '<i class="fas fa-download fa-stack-1x fa-inverse"></i>';
                    echo '</span></div>';
                    break;
                }
              }
              ?>
            </a>
          <?php endforeach;?>
        </div>
      </div>
      <?php endforeach;?>
     </div>
   </div>
</section>
