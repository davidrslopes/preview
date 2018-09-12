<?php
  $company_folders = getCompanies($campaign);
?>
<!-- COMPANIES ######################################## -->
<section class="omnicp-companies">
  <div class="container">
    <div class="card-group">
  <?php foreach ($company_folders as $company_folder): ?>
    <div class="card">
      <a href="<?php echo '/'.$company_folder[name]; ?>">
        <img class="card-img-top" src="<?php echo 'assets/img/'.strtoupper ($company_folder[name]).'.SVG'; ?>" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title"><?php echo $company_folder[name];?></h5>
        </div>
        <ul class="list-group list-group-flush">
          <?php if($company_folder[campaings]):?><li class="list-group-item list-group-item-action disabled d-flex justify-content-between align-items-center">Campanhas:<span class="badge badge-primary badge-pill"><?php echo count($company_folder[campaings]);?></span></li><?php endif; ?>
          <?php if($company_folder[clients]):?><li class="list-group-item list-group-item-action disabled d-flex justify-content-between align-items-center">Clientes:<span class="badge badge-primary badge-pill"><?php echo count($company_folder[clients]);?></span></li><?php endif; ?>
        </ul>
      </a>
    </div>
  <?php endforeach; ?>
    </div>
  </div>
</section>
<!-- //COMPANIES ######################################## -->
