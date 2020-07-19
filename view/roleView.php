<?php 
    $title = "Rôle";
    ob_start();
?>
    <div class="row">
    <div class="col-md-4">
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
                  <label for="name">Nom du role</label>
                  <input type="text" required class="form-control" id="name" name="name" placeholder="Le nom du rôle">
                </div>
                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea required class="form-control" id="description" name="description" placeholder="description du rôle"></textarea>
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

        <div class="col-md-8">
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
                    <a class="btn btn-primary">
                      <i class="fa fa-edit"></i>
                    </a>
                    <a href="index.php?action=module&role=<?= $value['id'] ?>" class="btn btn-primary">
                      <i class="fa fa-plus"></i> 
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