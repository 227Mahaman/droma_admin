<?php
$title = "Liste de nos medias";
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
                  <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 10.883px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ID</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 155.9px;" aria-label="Engine version: activate to sort column ascending">Intitulé</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 200.467px;" aria-label="CSS grade: activate to sort column ascending">Description</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 110.883px;" aria-label="CSS grade: activate to sort column ascending">Thème</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 140.883px;" aria-label="CSS grade: activate to sort column ascending">Date</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 110.883px;" aria-label="CSS grade: activate to sort column ascending">Média</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 110.883px;" aria-label="CSS grade: activate to sort column ascending">Action</th>
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
                $data = Manager::getData('post')['data'];
                if (is_array($data) || is_object($data)) {
                  foreach ($data as $value) {
                    $i++;
                    if ($i % 2 == 0) :
                      ?>

                <tr role="row" class="odd">
                  <td class="sorting_1"><?= $value['id_post'] ?></td>
                  <td><?=$value['intitule_post'] ?></td>
                  <td><?= $value['description'] ?></td>
                  <td><?= $value['theme'] ?></td>
                  <td><?= $value['created_at'] ?></td>
                  <td><img width="50" src="<?= $target. Manager::getDatas(new files())->getId($value['file'])->getFile_url() ?>" class="img-circle" alt="Cinque Terre"></td>
                  <td>
                    <a href="index.php?action=addMedia&modif=<?= $value['id_post'] ?>" class="btn btn-primary">
                      <i class="fa fa-pencil"></i>
                    </a>
                  </td>
                </tr>
                <?php else : ?>
                <tr role="row" class="even">
                <td class="sorting_1"><?= $value['id_post'] ?></td>
                  <td><?=$value['intitule_post'] ?></td>
                  <td><?= $value['description'] ?></td>
                  <td><?= $value['theme'] ?></td>
                  <td><?= $value['created_at'] ?></td>
                  <td><img width="50" src="<?= $target. Manager::getDatas(new files())->getId($value['file'])->getFile_url() ?>" class="img-circle" alt="Cinque Terre"></td>
                  <td>
                  <a href="index.php?action=addMedia&modif=<?= $value['id_post'] ?>" class="btn btn-primary">
                      <i class="fa fa-pencil"></i>
                    </a>
                  </td>
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
                  <th rowspan="1" colspan="1">ID</th>
                  <th rowspan="1" colspan="1">Intitulé</th>
                  <th rowspan="1" colspan="1">Description</th>
                  <th rowspan="1" colspan="1">Thème</th>
                  <th rowspan="1" colspan="1">Date</th>
                  <th rowspan="1" colspan="1">Media</th>
                  <th rowspan="1" colspan="1">Action</th>
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