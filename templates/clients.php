<?php
  $client_folders = getClients($campaign);
?>
<!-- CLIENT LIST ######################################## -->
<section class="omnicp-clients">
  <div class="container">
    <div class="list-group">
      <h5 class="list-group-item">Clientes <?php echo strtoupper ($campaign[company]); ?></h5>
      <?php foreach ($client_folders as $client_folder): ?>
      <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" href="<?php echo '/'.$campaign[company].'/'.$client_folder; ?>">
          <?php echo $client_folder; ?>
          <span class="badge badge-primary badge-pill"><?php echo count( getCampaignsFromClient( $campaign, $client_folder ) ); ?></span>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<!-- //CLIENT LIST ######################################## -->
