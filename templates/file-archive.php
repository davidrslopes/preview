<?php
  $archiveItem = "";
  $archiveItem = $campaignItem;
  if($campaignSubItem){$archiveItem = $campaignSubItem;}
?>
<a class="list-group-item list-group-item-action align-items-center" href="<?php echo $archiveItem[src]; ?>">
  <div class="d-flex justify-content-between">
    <?php echo $archiveItem[name]; ?>
    <span class="fa-stack" title="Download <?php echo $archiveItem[type];?>">
      <i class="fas fa-file-archive fa-stack-2x text-primary"></i>
      <i class="fas fa-download fa-stack-1x fa-inverse"></i>
    </span>
  </div>
</a>
