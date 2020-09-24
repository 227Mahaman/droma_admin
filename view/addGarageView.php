<?php
$title = "Ajouter un garage";
$datas = "";
if (!empty($_GET['modif']) && ctype_digit($_GET['modif'])) {
  $title = "Modifier un garage";
  $datas = Manager::getData("garages", "id_garage", $_GET['modif'])['data'];
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
            <label for="intitule_gare">Nom</label>
            <input value="<?= (is_array($datas) || is_object($datas))? $datas['nom'] : "" ?>" type="text" required class="form-control" id="nom" name="nom" placeholder="Nom du garage">
          </div>
          <div class="form-group">
            <label for="tel">Adresse</label>
            <input value="<?= (is_array($datas) || is_object($datas))? $datas['adresse'] : "" ?>" type="text" required class="form-control" id="adresse" name="adresse" placeholder="adresse">
          </div>
          <div class="form-group">
            <label for="tel">Tél</label>
            <input value="<?= (is_array($datas) || is_object($datas))? $datas['tel'] : "" ?>" type="text" required class="form-control" id="tel" name="tel" placeholder="tel">
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