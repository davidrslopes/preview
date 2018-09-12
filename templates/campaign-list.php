<?php
include('jumbotron.php');
$campaign_folders = getCampaigns($campaign);
?>
<!-- CAMPAIGN LIST ######################################## -->
<section class="omnicp-campaign-list">
  <div class="container">
    <div class="table-responsive">
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <?php if($campaign_folder[date]):?><th>Data</th><?php endif; ?>
            <?php if($campaign_folder[name]):?><th>Nome</th><?php endif; ?>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($campaign_folders as $campaign_folder): ?>
            <tr class="table-row" data-href="<?php echo '/'.$campaign[company].'/'.$campaign[client].'/'.$campaign_folder[folder]; ?>">
              <?php if($campaign_folder[date]):?><td><?php echo $campaign_folder[date]; ?></td><?php endif; ?>
              <?php if($campaign_folder[name]):?><td><?php echo $campaign_folder[name]; ?></td><?php endif; ?>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</section>
<!-- //CAMPAIGN LIST ######################################## -->
