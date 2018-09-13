<?php
  //debug($campaign,'$campaign');
  $clientFolders = getCompanyClients();
?>
<!-- CLIENT LIST ######################################## -->
<section class="omnicp-clients">
  <div class="container">
    <div class="list-group">
      <h5 class="list-group-item">Clientes <?php echo strtoupper($campaign[company]); ?></h5>
      <?php foreach ($clientFolders as $clientFolder): ?>
      <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" href="<?php echo $clientFolder[link]; ?>">
        <?php echo $clientFolder[name]; ?>
        <span class="badge badge-primary badge-pill"><?php echo $clientFolder[campaign_count]; ?></span>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<!-- //CLIENT LIST ######################################## -->
