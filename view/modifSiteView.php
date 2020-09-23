<?php
$title = "Modifier les informations du site";
$datas = "";
$src = "";
if (!empty($_GET['modif']) && ctype_digit($_GET['modif'])) {
  $title = "Modifier l'information";
  $datas = Manager::getData("information", "id_information", $_GET['modif'])['data'];
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
            <label for="txt">BP</label>
            <input type="text" required class="form-control" id="txt" name="bp" placeholder="Veuillez entrer la boite postale" value="<?= (!empty($_GET['modif'])) ? $datas['bp'] : "" ?>"/>
          </div>
          <div class="form-group">
            <label for="txt">EMAIL</label>
            <input type="text" required class="form-control" id="txt" name="email" placeholder="Veuillez entrer l'email" value="<?= (!empty($_GET['modif'])) ? $datas['email'] : "" ?>"/>
          </div>
          <div class="form-group">
            <label for="txt">TEL-1</label>
            <input type="text" required class="form-control" id="txt" name="tel1" placeholder="Veuillez entrer le tel1" value="<?= (!empty($_GET['modif'])) ? $datas['tel1'] : "" ?>"/>
          </div>
          <div class="form-group">
            <label for="txt">TEL-2</label>
            <input type="text" required class="form-control" id="txt" name="tel1" placeholder="Veuillez entrer le tel2" value="<?= (!empty($_GET['modif'])) ? $datas['tel2'] : "" ?>"/>
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