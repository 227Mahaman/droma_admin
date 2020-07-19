<?php 
    $title = "Agence";
    if (!empty($_GET['modif']) && ctype_digit($_GET['modif'])) {
      $title = "Modification de l'Agence";
      $datas = Manager::getData("agence", "id_agence", $rif_GET['modif'])['data'];
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
                  <label for="code_agence">Code</label>
                  <input type="text" required class="form-control" id="code_agence" name="code_agence" value="<?= (!empty($_GET['modif'])) ? $datas['code_agence'] : "" ?>" placeholder="Code de l'agence">
                </div>
                <div class="form-group">
                  <label for="nom_agence">Nom</label>
                  <input type="text" required class="form-control" id="nom_agence" name="nom_agence" value="<?= (!empty($_GET['modif'])) ? $datas['nom_agence'] : "" ?>" placeholder="Nom de l'agence">
                </div>
                <div class="form-group">
                <label>Ville</label>
                <select class="form-control" id="ville" name="ville">
                  <?php
                  $ville = new ville();
                  $data = Manager::getDatas($ville)->all();
                  if (is_array($data) || is_object($data)) {
                    foreach ($data as $value) {


                  ?>
                      <option <?= (!empty($_GET['modif']) && $datas['ville']==$value['id_ville']) ? "selected" : "" ?> value="<?= $value['id_ville'] ?>"><?= $value['intitule'] ?></option>
                  <?php
                    }
                  } else {
                    Manager::messages('Aucune donnée trouvé', 'alert-warning');
                  }
                  ?>
                </select>
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
                  <th>Nom</th>
                  <th>Ville</th>
                  <th>Action</th>
                </tr>
                <?php 
                $agence = new agence();
                $data = Manager::getDatas($agence)->all();
                  if (is_array($data) || is_object($data)) {
                    foreach ($data as $value) {
                      
                   
                ?>
                <tr>
                  <td><?= $value['code_agence'] ?></td>
                  <td><?= $value['nom_agence'] ?></td>
                  <td><?= Manager::getDatas(new ville())->getId_ville($value['ville'])->getIntitule() ?></td>
                  <td>
                    <a href="index.php?action=agence&modif=<?= $value['id_agence'] ?>" class="btn btn-primary">
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