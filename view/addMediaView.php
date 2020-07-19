<?php
$title = "Ajouter un media";
$datas = "";
$src = "";
if (!empty($_GET['modif']) && ctype_digit($_GET['modif'])) {
  $title = "Modifier un post";
  $datas = Manager::getData("post", "id_post", $_GET['modif'])['data'];
  $src = Manager::getData("files", "id", $datas['file'])['data']['file_url'];
}

ob_start();
?>
<div class="row">
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title"><?= $title ?></h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
    
      <form role="form" method="post" enctype="multipart/form-data">
        <div class="box-body">
          <div class="form-group">
            <label for="intitule_post">Intitulé</label>
            <input value="<?= (is_array($datas) || is_object($datas))? $datas['intitule_post'] : "" ?>" type="text" required class="form-control" id="intitule_post" name="intitule_post" placeholder="Intitulé du post">
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <input value="<?= (is_array($datas) || is_object($datas))? $datas['description'] : "" ?>" type="text" required class="form-control" id="description" name="description" placeholder="Description">
          </div>
          <div class="form-group">
            <label for="theme">Thème</label>
            <input type="text" required class="form-control" id="theme" name="theme" placeholder="Veuillez entrer le theme" value="<?= (!empty($_GET['modif'])) ? $datas['theme'] : "" ?>">
          </div>
          <div class="form-group" style="text-align: center;">
            <img src="<?= ((is_array($datas) || is_object($datas)) && !empty($src) ? $src : "http://via.placeholder.com/150x150") ?>" id="profile_img" style="height: 100px; border-radius: 50%" alt="">
            <!-- hidden file input to trigger with JQuery  -->
            <input type="file" name="file" id="profile_input" value="" style="display: none;">
          </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Valider</button>
          <p></p>
          <?php
          if (!empty($_SESSION['messages'])) {
            if ($_SESSION['messages']['code'] == 1) {
              echo Manager::messages($_SESSION['messages']['message'], 'alert-success');
            } else {
              echo Manager::messages($_SESSION['messages']['message'], 'alert-danger');
            }
          }
          ?>
        </div>
      </form>
    </div>
  </div>
</div>
<?php
$content = ob_get_clean();
require('template.php');
?>