<?php
$title = "Ajouter un bus";
$datas = "";
if (!empty($_GET['modif']) && ctype_digit($_GET['modif'])) {
  $title = "Modifier un bus";
  $datas = Manager::getData("bus", "id_bus", $_GET['modif'])['data'];
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
            <label for="intitule_bus">Numéro Plaque</label>
            <input value="<?= (is_array($datas) || is_object($datas))? $datas['numero_plaque'] : "" ?>" type="text" required class="form-control" id="numero_plaque" name="numero_plaque" placeholder="Numéro de la plaque">
          </div>
          <div class="form-group">
            <label for="marque">Marque</label>
            <input value="<?= (is_array($datas) || is_object($datas))? $datas['marque'] : "" ?>" type="text" required class="form-control" id="marque" name="marque" placeholder="marque">
          </div>
          <div class="form-group">
            <label for="theme">Chauffeur du Bus</label>
            <select class="form-control" id="chauffeur" name="chauffeur">
              <?php
              $data = Manager::getData('employes')['data'];
              if (is_array($data) || is_object($data)) {
                foreach ($data as $value) {


              ?>
                  <option <?= (is_array($datas) || is_object($datas))? ($value['id_employe']== $datas['employe'])? "selected" : "" : "" ?> value="<?= $value['id_employe'] ?>"><?= $value['nom'] ?></option>
              <?php
                }
              } else {
                Manager::messages('Aucune donnée trouvé', 'alert-warning');
              }
              ?>
            </select>
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