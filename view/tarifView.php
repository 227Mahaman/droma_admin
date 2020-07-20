<?php 
    $title = "Tarif";
    if (!empty($_GET['modif']) && ctype_digit($_GET['modif'])) {
      $title = "Modification du Tarif";
      $datas = Manager::getData("tarif", "id_tarif", $_GET['modif'])['data'];
    }
    ob_start();
?>
    <div class="row">
    <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><?=$title ?></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="code_tarif">Code Tarif</label>
                  <input type="text" required class="form-control" id="code_tarif" name="code_tarif" value="<?= (!empty($_GET['modif'])) ? $datas['code_tarif'] : "" ?>" placeholder="Code du tarif">
                </div>
                <div class="form-group">
                  <label for="valeur">Valeur</label>
                  <input type="text" required class="form-control" id="valeur" name="valeur" value="<?= (!empty($_GET['modif'])) ? $datas['valeur'] : "" ?>" placeholder="valeur">
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Valider</button>
                <p></p>
                <?php 
                if (!empty($_SESSION['messages'])) {
                  if ($_SESSION['messages']['code']==1) {
                    echo Manager::messages($_SESSION['messages']['message'], 'alert-success');
                  }else {
                    echo Manager::messages($_SESSION['messages']['message'], 'alert-danger');
                  }
                }
              ?>
              </div>
            </form>
          </div>
    </div>

    <div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title"><?=$title ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody><tr>
                  <th>Code</th>
                  <th>Valeur</th>
                  <th>Action</th>
                </tr>
                <?php 
                $tarif = new tarif();
                $data = Manager::getDatas($tarif)->all();
                  if (is_array($data) || is_object($data)) {
                    foreach ($data as $value) {
                      
                   
                ?>
                <tr>
                  <td><?= $value['code_tarif'] ?></td>
                  <td><?= $value['valeur'] ?> FCFA</td>
                  <td>
                    <a href="index.php?action=tarif&modif=<?= $value['id_tarif'] ?>" class="btn btn-primary">
                      <i class="fa fa-edit"></i>
                    </a>
                  </td>
                </tr>
                <?php 
                   }
                  }else {
                     Manager::messages('Aucune donnée trouvé', 'alert-warning');
                  }
                ?>
              </tbody>
            </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              </ul>
            </div>
          </div>
      </div>
    </div>
<?php 
    $content = ob_get_clean();
    require('template.php');
?>