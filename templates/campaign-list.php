<?php
include('jumbotron.php');
$campaignFolders = getClientCampaigns();
?>
<!-- CAMPAIGN LIST ######################################## -->
<section class="omnicp-campaign-list">
  <div class="container">
    <div class="table-responsive">
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <?php if($campaignFolders[0][date]):?><th>Data</th><?php endif; ?>
            <?php if($campaignFolders[0][name]):?><th>Nome</th><?php endif; ?>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($campaignFolders as $campaignFolder): ?>
            <tr class="table-row" data-href="<?php echo $campaignFolder[link]; ?>">
              <?php if($campaignFolder[date]):?><td><?php echo $campaignFolder[date]; ?></td><?php endif; ?>
              <?php if($campaignFolder[name]):?><td><?php echo $campaignFolder[name]; ?></td><?php endif; ?>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</section>
<!-- //CAMPAIGN LIST ######################################## -->
