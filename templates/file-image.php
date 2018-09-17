<?php
  $imageItem = "";
  $imageItem = $campaignItem;
  if($campaignSubItem){$imageItem = $campaignSubItem;}
?>
<a class="list-group-item list-group-item-action align-items-center" href="<?php echo $imageItem[src]; ?>" target="_blank">
  <div class="list-group-item-img"><img class="img-fluid" src="<?php echo $imageItem[src]; ?>" title="<?php echo $imageItem[name]; ?>"></div>
  <div class="d-flex justify-content-between">
    <?php echo $imageItem[name]; ?>
    <span class="fa-stack" title="Download <?php echo $imageItem[type];?>">
      <i class="fas fa-file-image fa-stack-2x text-primary"></i>
      <i class="fas fa-download fa-stack-1x fa-inverse"></i>
    </span>
  </div>
</a>
