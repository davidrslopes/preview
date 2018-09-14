<?php
  $videoItem = "";
  $videoItem = $campaignItem;
  if($campaignSubItem){$videoItem = $campaignSubItem;}
?>
<div class="embed-responsive embed-responsive-16by9">
  <video class="embed-responsive-item" controls>
    <source src="<?php echo $videoItem[src]; ?>" type="video/<?php echo $videoItem[type];?>">
      Your browser does not support the video tag.
  </video>
</div>
<a class="list-group-item list-group-item-action align-items-center" href="<?php echo $videoItem[src]; ?>">
  <div class="d-flex justify-content-between">
    <?php echo $videoItem[name]; ?>
    <span class="fa-stack" title="Download <?php echo $videoItem[type];?>">
      <i class="fas fa-file-video fa-stack-2x text-primary"></i>
      <i class="fas fa-download fa-stack-1x fa-inverse"></i>
    </span>
  </div>
</a>
