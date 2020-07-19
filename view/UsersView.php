<?php
$title = "Gestion un bureau";
ob_start();
?>
<div class="row">
<div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Rôles</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody><tr>
                  <th style="width: 10px">Nom du rôle</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
                <?php 
                  $roles = new roles();
                  $data = Manager::getDatas($roles)->all();
                  if (is_array($data) || is_object($data)) {
                    foreach ($data as $value) {
                      
                   
                ?>
                <tr>
                  <td><?= $value['name'] ?></td>
                  <td><?= $value['description'] ?></td>
                  <td>
                    <a href="index.php?action=users&role=<?= $value['id'] ?>" class="btn btn-primary">
                      <i class="fa fa-eye"></i> 
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