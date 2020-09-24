<?php
$title = "Ajouter un employé";
$datas = "";
if (!empty($_GET['modif']) && ctype_digit($_GET['modif'])) {
  $title = "Modifier un employé";
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
            <label for="nom">Nom</label>
            <input value="<?= (is_array($datas) || is_object($datas))? $datas['nom'] : "" ?>" type="text" required class="form-control" id="nom" name="nom" placeholder="Nom de l'agent">
          </div>
          <div class="form-group">
            <label for="prénom">Prénom</label>
            <input value="<?= (is_array($datas) || is_object($datas))? $datas['prénom'] : "" ?>" type="text" required class="form-control" id="prénom" name="prénom" placeholder="Prénom de l'agent">
          </div>
          <div class="form-group">
            <label for="poste">Poste</label>
            <input value="<?= (is_array($datas) || is_object($datas))? $datas['poste'] : "" ?>" type="text" required class="form-control" id="poste" name="poste" placeholder="Poste de l'agent">
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