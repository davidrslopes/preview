<div class="container">
  <!-- #################### JUMBOTRON #################### -->
  <section class="jumbotron jumbotron-fluid">
    <div class="container">
      <div class="logo">
        <img src="/assets/img/<?php echo strtoupper ($campaign['company']) ;?>.SVG" alt="<?php echo strtoupper ($campaign['company']) ;?>">
      </div>
      <h1 class="text-primary">+<?php echo strtoupper ($campaign['client']) ;?></h1>
      <h2 class="text-primary"><?php echo strtoupper ($campaign['name']) ;?></h2>
      <h3 class="text-primary"><?php echo $campaign['desc'] ;?></h3>
      <p class="jumbotron-date text-primary">
        <i class="fas fa-calendar-check"></i> <?php echo strtolower ($campaign['date']) ;?>
      </p>
      <a class="btn btn-primary" href="<?php echo $campaign['landing_page_url'] ;?>" target="_blank"> <i class="fas fa-link"></i> Landing Page</a>
    </div>
  </section>
  <!-- #################### PREVIEW CONTENT #################### -->
  <section class="campaign-content">
    
  </section>
</div>
