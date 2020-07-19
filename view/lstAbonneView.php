<?php
$title = "Liste des mails abonnés";
ob_start();
?>
<div class="row">
  <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title"><?=$title ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody><tr>
                  <th>ID</th>
                  <th>Mail Abonné</th>
                </tr>
                <?php 
                  $news = new news();
                  $data = Manager::getDatas($news)->all();
                  //print_r($data);
                  if ((is_array($data) || is_object($data)) && empty($data['message'])) {
                    foreach ($data as $value) {
                      
                   
                ?>
                <tr>
                  <td><?= $value['id_news'] ?></td>
                  <td><?= $value['mail'] ?></td>
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