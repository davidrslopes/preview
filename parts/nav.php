<?php $campaign_folders = getCampaignsNav($campaign); ?>
<!-- NAVIGATION ######################################## -->
<nav class="omnicp-navbar navbar navbar-expand-lg navbar-dark bg-primary fixed-top navbar-<?php echo strtolower ($campaign['company']);?>">
  <div class="container">
    <a class="navbar-brand" href="/<?php echo $campaign['company']; ?>">
      <div class="svg-brand">
        <?php
          if(!$campaign['company']){
            include('assets/img/OMG.SVG');
          }else{
            include('assets/img/'.strtoupper ($campaign['company']).'.SVG');
          }
          ?>
      </div>
      <?php if(!$campaign['company']): ?><div class="navbar-text d-none d-lg-none"> [Preview Projectos] <small>α</small></div><?php endif; ?>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#<?php echo strtolower ($campaign['company']);?>-navbar-collapse" aria-controls="<?php echo $campaign['company'];?>-navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"><i class="fa fa-navicon"></i></span>
    </button>

    <div class="collapse navbar-collapse" id="<?php echo strtolower ($campaign['company']);?>-navbar-collapse">
      <?php if($campaign[company]): ?>
      <ul class="navbar-nav ml-auto">
        <li>
          <a href="/" class="nav-link"><i class="fa fa-home"></i> HOME</a>
        </li>
        <li>
          <a href="<?php echo '/'.$campaign[company];?>" class="nav-link"><i class="fa fa-users"></i> CLIENTES</a>
        </li>
        <?php if($campaign[name]): ?>
        <li>
          <a href="<?php echo '/'.$campaign[company].'/'.$campaign[client];?>" class="nav-link"><i class="fa fa-undo"></i> Voltar</a>
        </li>
      <?php endif; ?>
      <?php if($campaign_folders): ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bars"></i> Campanhas</a>
          <div class="dropdown-menu dropdown-menu-right">
            <h6 class="dropdown-header text-uppercase">Últimas 10 Campanhas</h6>
            <?php foreach ($campaign_folders as $campaign_folder): ?>
              <a class="dropdown-item" href="<?php echo '/'.$campaign[company].'/'.$campaign[client].'/'.$campaign_folder[folder]; ?>">
                [<?php echo $campaign_folder[date]; ?>] <?php echo $campaign_folder[name]; ?>
              </a>
            <?php endforeach; ?>
            <?php if($campaign[name]): ?><a class="dropdown-header dropdown-item text-uppercase" href="<?php echo '/'.$campaign[company].'/'.$campaign[client];?>">Ver todas</a><?php endif; ?>
          </div>
        </li>
        <?php endif; ?>
      </ul>
      <?php endif; ?>
    </div>
  </div>
</nav>
<!-- //NAVIGATION ######################################## -->
