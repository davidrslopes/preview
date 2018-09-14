<?php
include('jumbotron.php');
$campaignItems = getCampaign();
?>
<!-- CAMPAIGN CONTENT ######################################## -->
<section class="omnicp-campaign-content">
  <div class="container">
    <div class="row">
    <?php foreach ($campaignItems as $campaignKeyItem => $campaignItem): ?>
      <div class="col-12 col-md-6 col-lg-4 mt-4">
        <div class="list-group">
        <?php
        if($campaignItem[type] === 'folder'){
          include('folder.php');
          foreach ($campaignItem[subItems] as $campaignSubItem){
            switch ($campaignSubItem[type]) {
              case 'zip':
                include('file-archive.php');
                break;
              case 'jpg':
              case 'png':
              case 'gif':
                include('file-image.php');
                break;
              case 'mp4':
              case 'webm':
                include('file-video.php');
                break;
              default:
                include('folder.php');
                break;
            }
          }
        }else{
          switch ($campaignItem[type]) {
            case 'zip':
              include('file-archive.php');
              break;
            case 'jpg':
            case 'png':
            case 'gif':
              include('file-image.php');
              break;
            case 'mp4':
            case 'webm':
              //Init Video Player
              include('file-video.php');
              break;
            default:
              include('error.php');
              break;
          }
        }
        ?>
        </div><!--//List Group-->
      </div>
    <?php endforeach; ?>
    </div>
  </div>
</section>
<!-- //CAMPAIGN CONTENT ######################################## -->
