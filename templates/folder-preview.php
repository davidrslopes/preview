<?php
$dir = $_GET[preview].'/*';

// TODO: CHECK FOR FOLDERS INSIDE THIS ONE

// FOLDER PREVIEW: HTML ########################################
$htmls = glob($dir."*.{html,htm,php}", GLOB_BRACE);
$dir_parts = explode('/', $dir);
$folder_name = $dir_parts[5];
if (!empty($htmls) && count($htmls)):
?>
<!-- FOLDER PREVIEW: HTML ######################################## -->
<section class="omnicp-folder-preview">
  <div class="container-fluid">
    <div class="row">
      <div class="col pb-4 text-left">
        <h1 class="display-4">HTML: <?php echo $folder_name; ?></h1>
      </div>
      <div class="col pb-4 text-right">
        <a class="btn btn-primary" href="<?php echo strtok("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]",'?'); ?>">
          <i class="fa fa-times"></i> Fechar
        </a>
      </div>
    </div>
    <div class="row">
      <div class="col">
<?php
  foreach ($htmls as $html) {
    echo '<iframe src="/'.$html.'" frameBorder="0" class="omnicp-iframe"></iframe>';
  }
?>
      </div>
    </div>
  </div>
</section>
<!-- //FOLDER PREVIEW: HTML ######################################## -->
<?php else: ?>
<?php
// FOLDER PREVIEW: IMAGES ########################################
$imgs = glob($dir."*.{jpg,jpeg,png,gif}", GLOB_BRACE);
$dir_parts = explode('/', $dir);
$folder_name = $dir_parts[4].' - '.$dir_parts[5];

if (!empty($imgs) && count($imgs)):
?>
<!-- FOLDER PREVIEW: IMAGES ######################################## -->
<section class="omnicp-folder-preview">
  <div class="container">
    <div class="row">
      <div class="col pb-4 text-left">
        <h1 class="display-4">Imagens: <?php echo $folder_name; ?></h1>
      </div>
      <div class="col pb-4 text-right">
        <a class="btn btn-primary" href="<?php echo strtok("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]",'?'); ?>">
          <i class="fa fa-times"></i> Fechar
        </a>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="text-center">
          <?php
            foreach($imgs as $img):
              $image[name] = basename($img);
              $image[src] = $img;
              ?>
          <a class="preview-link" href="/<?php echo $image[src]; ?>">
            <img class="img-fluid" src="/<?php echo $image[src]; ?>" alt="<?php echo $image[name]; ?>" title="<?php echo $image[name]; ?>">
            <div class="bg-dark pt-3 pb-3 text-white"><?php echo $image[name]; ?> <i class="fas fa-download"></i></div>
          </a>
          <?php endforeach;?>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- //FOLDER PREVIEW: IMAGES ######################################## -->
<?php endif; ?>
<?php endif; //END HTML ELSE ?>
<?php
// FOLDER PREVIEW: ARQUIVES ########################################
$zips = glob($dir."*.{zip,rar}", GLOB_BRACE);
if (!empty($zips) && count($zips)):
?>
<!-- FOLDER PREVIEW: ARQUIVES ######################################## -->
<section class="omnicp-folder-preview">
  <div class="container">
    <div class="row">
      <div class="col pb-4 text-left">
        <h1 class="display-4">Arquivos: <?php echo $folder_name; ?></h1>
      </div>
      <div class="col pb-4 text-right">
        <a class="btn btn-primary" href="<?php echo strtok("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]",'?'); ?>">
          <i class="fa fa-times"></i> Fechar
        </a>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="list-group">
        <?php
          foreach($zips as $zip):
            $item[name] = basename($zip);
            $item[src] = $zip;
            ?>
          <a class="list-group-item list-group-item-action align-items-center d-flex justify-content-between" href="/<?php echo $item[src]; ?>" target="_blank">
            <?php echo $item[name]; ?> <i class="fas fa-download"></i>
          </a>
        <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- //FOLDER PREVIEW: ARQUIVES ######################################## -->
<?php endif; ?>

<?php if(empty($htmls) && empty($zips)){
  include('error.php');
} ?>
