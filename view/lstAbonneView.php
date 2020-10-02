<?php
$title = "Liste des mails abonnés";
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
                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 155.9px;" aria-label="Engine version: activate to sort column ascending">ID</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 200.467px;" aria-label="CSS grade: activate to sort column ascending">Mail Abonné</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                    $news = new news();
                    $data = Manager::getDatas($news)->all();
                    //print_r($data);
                    if ((is_array($data) || is_object($data)) && empty($data['message'])) {
                      foreach ($data as $value) {
                        
                    
                  ?>
                  <tr role="row" class="odd">
                    <td class="sorting_1"><?= $value['id_news'] ?></td>
                    <td><?= $value['mail'] ?></td>
                  </tr>
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
                    <th rowspan="1" colspan="1">Mail Abonné</th>
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