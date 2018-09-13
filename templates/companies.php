<?php
  $companyFolders = getAll();
  $clientCount = 0;
  $clientCampaigns = 0;
?>
<!-- COMPANIES ######################################## -->
<section class="omnicp-companies">
  <div class="container">
    <div class="card-group">
    <?php foreach ($companyFolders[companies] as $companyFolder):
      $clientCount = $companyFolder[client_count];
      $clientCampaigns = $companyFolder[campaign_count];
    ?>
      <div class="card">
        <a href="<?php echo '/'.$companyFolder[name]; ?>">
          <img class="card-img-top" src="<?php echo 'assets/img/'.strtoupper ($companyFolder[name]).'.SVG'; ?>" alt="<?php echo strtoupper ($companyFolder[name]); ?> Logo">
          <div class="card-body">
            <h5 class="card-title"><?php echo $companyFolder[name];?></h5>
          </div>
          <ul class="list-group list-group-flush">
          <?php
          foreach ($companyFolder[clients] as $clientKey => $client) {
              if($client[name] === 'Showreel' || $client[name] === 'Interno' ){
                echo'<li class="list-group-item list-group-item-action disabled d-flex justify-content-between align-items-center">'.$client[name].'s:<span class="badge badge-primary badge-pill">'.$client[campaign_count].'</span></li>';
              }
          }
          ?>
          <?php if($clientCampaigns > 0):?>
            <li class="list-group-item list-group-item-action disabled d-flex justify-content-between align-items-center">Campanhas:<span class="badge badge-primary badge-pill"><?php echo $clientCampaigns;?></span></li>
          <?php endif; ?>
          <?php if($clientCount > 0):?>
            <li class="list-group-item list-group-item-action disabled d-flex justify-content-between align-items-center">Clientes:<span class="badge badge-primary badge-pill"><?php echo $clientCount;?></span></li>
          <?php endif; ?>
          </ul>
        </a>
      </div>
    <?php endforeach; ?>
    </div>
  </div>
</section>
<!-- //COMPANIES ######################################## -->
