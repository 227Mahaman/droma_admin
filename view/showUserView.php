<?php
$title = "Utilisateurs";
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
                  <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 182.467px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Nom & Prénom</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 155.9px;" aria-label="Engine version: activate to sort column ascending">Matricule</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 110.883px;" aria-label="CSS grade: activate to sort column ascending">N° de téléphone</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 110.883px;" aria-label="CSS grade: activate to sort column ascending">Profile</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 110.883px;" aria-label="CSS grade: activate to sort column ascending">Rôle</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 110.883px;" aria-label="CSS grade: activate to sort column ascending">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $i = 0;
                $data = Manager::getData('users')['data'];
                if (is_array($data) || is_object($data)) {
                  foreach ($data as $value) {
                    $i++;
                    if ($i % 2 == 0) :
                      ?>

                <tr role="row" class="odd">
                  <td class="sorting_1"><?= $value['last_name'] . ' ' . $value['first_name'] ?></td>
                  <td><?= $value['matricule'] ?></td>
                  <td><?= $value['phone_number'] ?></td>
                  
                  <td><?= Manager::getData('type_agent', 'id', $value['type_agent'])['data']['label'] ?></td>
                  <td><?= Manager::getData('roles', 'id', $value['role'])['data']['name'] ?></td>
                  <td>
                    <a href="index.php?action=addUser&modif=<?= $value['id'] ?>" class="btn btn-primary">
                      <i class="fa fa-pencil"></i>
                    </a>
                  </td>
                </tr>
                <?php else : ?>
                <tr role="row" class="even">
                  <td class="sorting_1"><?= $value['last_name'] . ' ' . $value['first_name'] ?></td>
                  <td><?= $value['matricule'] ?></td>
                  <td><?= $value['phone_number'] ?></td>
                  
                  <td><?= Manager::getData('type_agent', 'id', $value['type_agent'])['data']['label'] ?></td>
                  <td><?= Manager::getData('roles', 'id', $value['role'])['data']['name'] ?></td>
                  <td>
                  <a href="index.php?action=addUser&modif=<?= $value['id'] ?>" class="btn btn-primary">
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
                  <th rowspan="1" colspan="1">Nom et Prénom</th>
                  <th rowspan="1" colspan="1">Matricule</th>
                  <th rowspan="1" colspan="1">N° de téléphone</th>
                  <th rowspan="1" colspan="1">Profile</th>
                  <th rowspan="1" colspan="1">Rôle</th>
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