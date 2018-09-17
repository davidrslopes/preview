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
        switch ($campaignItem[type]) {
          case 'jpg':
          case 'png':
          case 'gif':
            echo fileImageTemplate($campaignItem);
            break;
          case 'mp4':
            echo fileVideoTemplate($campaignItem);
            break;
          case 'zip':
            echo fileArchiveTemplate($campaignItem);
            break;
          default:
            // folder
            echo folderTemplate ($campaignItem);
            foreach ($campaignItem[subItems] as $campaignSubItemKey => $campaignSubItem) {
              switch ($campaignSubItem[type]) {
                case 'jpg':
                case 'jpeg':
                case 'png':
                case 'gif':
                  echo fileImageTemplate($campaignSubItem);
                  break;
                case 'mp4':
                case 'ogv':
                  echo fileVideoTemplate($campaignSubItem);
                  break;
                case 'zip':
                  echo fileArchiveTemplate($campaignSubItem);
                  break;
                default:
                  echo folderTemplate($campaignSubItem);
                  break;
              }
            }
            break;
        }
        ?>
        </div><!--//List Group-->
      </div>
    <?php endforeach; ?>
    </div>
  </div>
</section>
<!-- //CAMPAIGN CONTENT ######################################## -->
