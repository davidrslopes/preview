<!-- JUMBOTRON ######################################## -->
<section class="omnicp-jumbotron jumbotron jumbotron-fluid">
  <div class="container">
    <div class="row">
      <div class="col-4">
        <div class="logo">
          <!--<img src="/<?php echo 'assets/img/'.strtoupper ($campaign['company']).'.SVG'; ?>" alt="<?php echo strtoupper ($campaign['company']); ?>" title="<?php echo strtoupper ($campaign['company']); ?>">-->
          <?php include('assets/img/'.strtoupper ($campaign['company']).'.SVG'); ?>
        </div>
      </div>
    </div>
    <div class="row align-text-bottom">
      <div class="col-md-6">
        <h1 class="text-primary">+<?php echo strtoupper ($campaign['client']) ;?></h1>
        <h2 class="text-primary"><?php echo strtoupper ($campaign['name']) ;?></h2>
        <?php if($campaign['desc']): ?>
          <h3 class="text-primary"><?php echo $campaign['desc'] ;?></h3>
        <?php endif;?>
      </div>
      <div class="col-md-6 text-right">
        <?php if($campaign['date']): ?>
        <p class="jumbotron-date text-primary">
          <i class="fas fa-calendar-check"></i> <?php echo strtolower ($campaign['date']) ;?>
        </p>
        <?php endif;?>
        <?php if($campaign[target_url]): ?>
          <a class="btn btn-primary" href="<?php echo $campaign[target_url] ;?>" target="_blank"> <i class="fas fa-link"></i> Destino da campanha</a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<!-- //JUMBOTRON ######################################## -->
