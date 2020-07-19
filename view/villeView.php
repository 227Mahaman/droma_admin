<?php 
    $title = "regions";
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
                  <label for="nom_region">Nom de la region</label>
                  <input type="text" required class="form-control" id="nom_region" name="nom_region" placeholder="region">
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
                  <th>Type des agents</th>
                  <th>Action</th>
                </tr>
                <?php 
                $region = new region();
                $data = Manager::getDatas($region)->all();
                  if (is_array($data) || is_object($data)) {
                    foreach ($data as $value) {
                      
                   
                ?>
                <tr>
                  <td><?= $value['nom_region'] ?></td>
                  <td>
                    <a class="btn btn-primary">
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