<?php
//debug($campaign);
include('jumbotron.php');

$campaign_folders = getCampaigns($campaign);
//debug($campaign_folders);

?>
<div class="container">
  <div class="table-responsive">
    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th>Data</th>
          <th>Nome</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($campaign_folders as $campaign_folder): ?>
          <tr class="table-row" data-href="<?php echo '/'.$campaign[company].'/'.$campaign[client].'/'.$campaign_folder[folder]; ?>">
            <td><?php echo $campaign_folder[date]; ?></td>
            <td><?php echo $campaign_folder[name]; ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
