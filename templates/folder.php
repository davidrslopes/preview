<?php
  $folderItem = "";
  if($campaignSubItem):
    $folderItem = $campaignSubItem;
?>
<a class="list-group-item list-group-item-action align-items-center" href="<?php echo $folderItem[link]; ?>" target="_blank">
  <div class="d-flex justify-content-between">
    <?php echo $folderItem[name]; ?>
    <span class="fa-stack">
      <i class="fas fa-folder fa-stack-2x text-primary"></i>
      <i class="fas fa-eye fa-stack-1x fa-inverse"></i>
    </span>
  </div>
</a>
<?php
  else:
    $folderItem = $campaignItem;
?>
  <h5 class="list-group-item">
    <div class="d-flex justify-content-between">
      <?php echo $folderItem[name]; ?>
      <i class="fas fa-folder-open text-primary"></i>
    </div>
  </h5>
<?php endif; ?>
