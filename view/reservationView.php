<?php
$title = "Réservation";
ob_start();
?>
<div class="row">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title"><?= $title ?></h3>
    </div>
    <!-- /.box-header -->
    
    <div class="box-body">
      <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
        <div class="row">
          <div class="col-sm-12">
            <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
              <thead>
                <tr role="row">
                  <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 155.9px;" aria-label="Engine version: activate to sort column ascending">Client</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 200.467px;" aria-label="CSS grade: activate to sort column ascending">N° de Téléphone</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 140.883px;" aria-label="CSS grade: activate to sort column ascending">Date</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 110.883px;" aria-label="CSS grade: activate to sort column ascending">Place</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 110.883px;" aria-label="CSS grade: activate to sort column ascending">Montant</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 110.883px;" aria-label="CSS grade: activate to sort column ascending">Départ</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 110.883px;" aria-label="CSS grade: activate to sort column ascending">Destination</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $target = '';
                if ($_SERVER["SERVER_NAME"] == 'localhost') {
                    $target = "http://localhost/dromadaire/";
                } else {
                    $target = "http://sonef.net/admin/";
                }
                $i = 0;
                $sql = "SELECT nom, prenom, tel, date, heure, place, cout, v.intitule depart,
               v.intitule destination FROM reservation r, client c, billet b, ville v WHERE 
               r.client=c.id_client AND r.billet=b.id_billet AND( b.depart= v.id_ville OR 
               b.destination = v.id_ville)";
               $data = Manager::getMultiplesRecords($sql);
                if (is_array($data) || is_object($data)) {
                  foreach ($data as $value) {
                    $i++;
                    if ($i % 2 == 0) :
                      ?>

                <tr role="row" class="odd">
                  <td class="sorting_1"><?=$value['nom'] ." ".$value['prenom'] ?></td>
                  <td><?= $value['tel'] ?></td>
                  <td><?= $value['date']. " depart à ". $value['heure'] ?></td>
                  <td><?= $value['place'] ?></td>
                  <td><?= $value['cout'] ?></td>
                  <td><?= $value['depart'] ?></td>
                  <td><?= $value['destination'] ?></td>
                 
                </tr>
                <?php else : ?>
                <tr role="row" class="even">
                  <td class="sorting_1"><?=$value['nom'] ." ".$value['prenom'] ?></td>
                  <td><?= $value['tel'] ?></td>
                  <td><?= $value['date']. "depart à". $value['heure'] ?></td>
                  <td><?= $value['place'] ?></td>
                  <td><?= $value['cout'] ?></td>
                  <td><?= $value['depart'] ?></td>
                  <td><?= $value['destination'] ?></td>
                  
                </tr>
                <?php endif; ?>
                <?php
                  }
                } else {
                  Manager::messages('Aucune donnée trouvé', 'alert-warning');
                }
                ?>
              </tbody>
              <tfoot>
                <tr>
                  <th rowspan="1" colspan="1">Client</th>
                  <th rowspan="1" colspan="1">N° de Téléphone</th>
                  <th rowspan="1" colspan="1">Date</th>
                  <th rowspan="1" colspan="1">Place</th>
                  <th rowspan="1" colspan="1">Montant</th>
                  <th rowspan="1" colspan="1">Départ</th>
                  <th rowspan="1" colspan="1">Destination</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- /.box-body -->
  </div>
</div>
<?php
$content = ob_get_clean();
require('template.php');
?>