<?php
$title = "Envoi de mail aux abonnés";

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
            <label for="objet">Objet</label>
            <input type="text" required class="form-control" id="objet" name="objet" placeholder="Objet du Message">
          </div>
          <div class="form-group">
            <label for="message">Message à envoyer</label>
            <textarea type="text" required class="form-control" id="message" name="message" placeholder="Corps du Message"></textarea>
          </div>

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Envoyer</button>
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