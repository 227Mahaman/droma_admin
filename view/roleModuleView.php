<?php
$title = "Permission";
$role = 1;
if (isset($_GET['role'])) extract($_GET);
ob_start();
?>
<div class="row">

  <div class="col-md-12">
    <div class="box">
      <div class="box-header with-border">
        <i class="fa  fa-key"></i>
        <h3 class="box-title"><b><?= Manager::getData('roles', 'id', $role)['name'] ?></b></h3>
        <a onclick="addTableRow()" style="float: right" class="btn btn-primary">
          <i class="fa fa-plus"></i>
        </a>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <form action="" id="add_permission">
          <table id="table_permission" class="table table-bordered">
            <thead>
              <tr>
                <th>Module</th>
                <th>Description</th>
                <th>Action</th>
              </tr>
            </thead>
            </tr>
            <?php
            $data = Manager::getData('module');
            if (is_array($data) || is_object($data)) {
              foreach ($data as $value) {


                ?>
                <tr>
                  <td><?= $value['name'] ?></td>
                  <td><?= $value['description'] ?></td>
                  <td>
                    <a class="btn btn-primary">
                      <i class="fa fa-edit"></i>
                    </a>
                    <a href="index.php?action=permission&module=<?= $value['id'] ?>" class="btn btn-primary">
                      <i class="fa fa-plus"></i>
                    </a>
                  </td>
                </tr>
            <?php
              }
            } else {
              Manager::messages('Aucune donnée trouvé', 'alert-warning');
            }
            ?>
            </tbody>
          </table>
        </form>
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