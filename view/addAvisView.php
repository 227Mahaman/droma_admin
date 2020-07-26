<?php
$title = "Ajouter un tèmoignage";
$datas = "";
$src = "";
if (!empty($_GET['modif']) && ctype_digit($_GET['modif'])) {
  $title = "Modifier un avis";
  $datas = Manager::getData("avis", "id_avis", $_GET['modif'])['data'];
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
            <label for="txt">Texte</label>
            <textarea type="text" required class="form-control" id="txt" name="txt" placeholder="Veuillez entrer le texte" value="<?= (!empty($_GET['modif'])) ? $datas['txt'] : "" ?>"></textarea>
          </div>
          <div class="form-group">
            <label for="url_v">Vidéo</label>
            <input value="<?= (is_array($datas) || is_object($datas))? $datas['url_v'] : "" ?>" type="text" required class="form-control" id="description" name="url_v" placeholder="Lien youtube de la vidéo">
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