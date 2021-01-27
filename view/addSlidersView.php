<?php
$title = "Ajouter des images défilante";
$datas = "";
if (!empty($_GET['modif']) && ctype_digit($_GET['modif'])) {
  $title = "Modifier un slider";
  $datas = Manager::getData("employes", "id_employe", $_GET['modif'])['data'];
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
            <label for="img1">Image 1</label>
            <input value="<?= (is_array($datas) || is_object($datas))? $datas['img1'] : "" ?>" type="file" required class="form-control" id="img1" name="img1">
          </div>
          <div class="form-group">
            <label for="img2">Image 2</label>
            <input value="<?= (is_array($datas) || is_object($datas))? $datas['img2'] : "" ?>" type="file" required class="form-control" id="img2" name="img2" >
          </div>
          <div class="form-group">
            <label for="img3">Image 3</label>
            <input value="<?= (is_array($datas) || is_object($datas))? $datas['img3'] : "" ?>" type="file" required class="form-control" id="img3" name="img3">
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