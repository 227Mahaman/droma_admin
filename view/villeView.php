<?php
$title = "Gestion des villes";
if (!empty($_GET['modif']) && ctype_digit($_GET['modif'])) {
  $title = "Modifier la ville";
  $datas = Manager::getData("ville", "id_ville", $_GET['modif'])['data'];
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
            <label for="intitule">Intitulé</label>
            <input type="text" required class="form-control" id="intitule" name="intitule" value="<?= (!empty($_GET['modif'])) ? $datas['intitule'] : "" ?>" placeholder="Veuillez entrer l'intitulé de la ville">
          </div>
          <div class="form-group">
            <label>Pays</label>
            <select class="form-control" id="pays" name="pays">
              <?php
              $pays = new pays();
              $data = Manager::getDatas($pays)->all();
              if (is_array($data) || is_object($data)) {
                foreach ($data as $value) {


              ?>
                  <option <?= (!empty($_GET['modif']) && $datas['pays']==$value['id_pays']) ? "selected" : "" ?> value="<?= $value['id_pays'] ?>"><?= $value['nom'] ?></option>
              <?php
                }
              } else {
                Manager::messages('Aucune donnée trouvé', 'alert-warning');
              }
              ?>
            </select>
          </div>
          <div class="form-group">
            <label>Tarif</label>
            <select class="form-control" id="tarif" name="tarif">
              <?php
              $tarif = new tarif();
              $data = Manager::getDatas($tarif)->all();
              if (is_array($data) || is_object($data)) {
                foreach ($data as $value) {


              ?>
                  <option <?= (!empty($_GET['modif']) && $datas['tarif']==$value['id_tarif']) ? "selected" : "" ?> value="<?= $value['id_tarif'] ?>"><?= $value['code_tarif'] . ' - ' . $value['valeur']?> FCFA</option>
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
  <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title"><?=$title ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody><tr>
                  <th>Ville</th>
                  <th>Pays</th>
                  <th>Tarif</th>
                  <th>Action</th>
                </tr>
                <?php 
                  $ville = new ville();
                  $data = Manager::getDatas($ville)->all();
                  //print_r($data);
                  if ((is_array($data) || is_object($data)) && empty($data['message'])) {
                    foreach ($data as $value) {
                      
                   
                ?>
                <tr>
                  <td><?= $value['intitule'] ?></td>
                  <td><?= Manager::getDatas(new pays())->getId_pays($value['pays'])->getNom() ?></td>
                  <td><?= Manager::getDatas(new tarif())->getId_tarif($value['tarif'])->getCode_tarif() . ' - ' . Manager::getDatas(new tarif())->getId_tarif($value['tarif'])->getValeur() ?> FCFA</td>
                  <td>
                    <a href="index.php?action=ville&modif=<?= $value['id_ville'] ?>" class="btn btn-primary">
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