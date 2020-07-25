<?php
$title = "Dashboard";
ob_start();
?>
<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3><?= Manager::Count('agence','id_agence')['total']; ?></h3>

          <p>Agence</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <a href="index.php?action=agence" class="small-box-footer">Agences <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3><?= Manager::Count('pays','id_pays')['total']; ?></h3>

          <p>Pays</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="index.php?action=pays" class="small-box-footer">Listes <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3><?= Manager::Count('ville','id_ville')['total']; ?></h3>

          <p>Ville</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="index.php?action=ville" class="small-box-footer">Listes <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <!-- <div class="col-lg-3 col-xs-6">
      <div class="info-box">
        <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Equipe</span>
          <span class="info-box-number"><?//= Manager::CountEquipe()['data']['total']; ?></span>
        </div>
        <!-- /.info-box-content -->
      <!-- </div> -->
      <!-- /.info-box -->
    <!-- </div> --> 
    <!-- ./col -->
  </div>
  <!-- /.row -->
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Statisque</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <!-- <div class="btn-group">
              <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-wrench"></i></button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </div>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button> -->
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <p class="text-center">
                <strong>Tarif</strong>
              </p>

              <div class="chart">
                <!-- Sales Chart Canvas -->
                <canvas id="salesChart" style="height: 200px;"></canvas>
              </div>
              <!-- /.chart-responsive -->
            </div>
            <!-- /.col -->
            <!-- <div class="col-md-4">
              <p class="text-center">
                <strong>Total projet: <?//= Manager::Count('projet', 'id_projet')['total']?></strong>
              </p>
              <?php
                // $sql = "SELECT region.id_region, region.nom_region,
                // (SELECT COUNT(projet.id_projet) FROM projet, equipe WHERE equipe.region=region.id_region and equipe.id_equipe=projet.equipe) as nombre
                // FROM region";
                //   $data = Manager::getMultiplesRecords($sql);
                // //$data = Manager::CountVille();
                // if (is_array($data) || is_object($data)) {
                // foreach ($data as $key => $value){
              ?>
              <div class="progress-group">
                <span class="progress-text"><?//= $value['nom_region']?></span>
                <span class="progress-number"><b><?//= $value['nombre'];?></b></span>

                <div class="progress sm">
                  <div class="progress-bar progress-bar-<?//= ($value['nombre']==0) ? 'red' : 'green';?>" style="width: 100%"></div>
                </div>
              </div>
                  <?php 
                //} } ?>
              <!-- /.progress-group -->
              <!--<div class="progress-group">
                <span class="progress-text">Complete Purchase</span>
                <span class="progress-number"><b>310</b>/400</span>

                <div class="progress sm">
                  <div class="progress-bar progress-bar-red" style="width: 80%"></div>
                </div>
              </div>-->
              <!-- /.progress-group -->
              <!--<div class="progress-group">
                <span class="progress-text">Visit Premium Page</span>
                <span class="progress-number"><b>480</b>/800</span>

                <div class="progress sm">
                  <div class="progress-bar progress-bar-green" style="width: 80%"></div>
                </div>
              </div>-->
              <!-- /.progress-group -->
              <!--<div class="progress-group">
                <span class="progress-text">Send Inquiries</span>
                <span class="progress-number"><b>250</b>/500</span>

                <div class="progress sm">
                  <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
                </div>
              </div>-->
              <!-- /.progress-group -->
            <!-- </div> --> 
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- ./box-body -->
        <div class="box-footer">
          <div class="row">
            <!--<div class="col-sm-3 col-xs-6">
              <div class="description-block border-right">
                <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                <h5 class="description-header">$35,210.43</h5>
                <span class="description-text">TOTAL REVENUE</span>
              </div>-->
              <!-- /.description-block -->
            <!--</div>-->
            <!-- /.col -->
            <!--<div class="col-sm-3 col-xs-6">
              <div class="description-block border-right">
                <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                <h5 class="description-header">$10,390.90</h5>
                <span class="description-text">TOTAL COST</span>
              </div>-->
              <!-- /.description-block -->
            <!--</div>-->
            <!-- /.col -->
            <!--<div class="col-sm-3 col-xs-6">
              <div class="description-block border-right">
                <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                <h5 class="description-header">$24,813.53</h5>
                <span class="description-text">TOTAL PROFIT</span>
              </div>-->
              <!-- /.description-block -->
            <!--</div>-->
            <!-- /.col -->
            <!--<div class="col-sm-3 col-xs-6">
              <div class="description-block">
                <span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>
                <h5 class="description-header">1200</h5>
                <span class="description-text">GOAL COMPLETIONS</span>
              </div>-->
              <!-- /.description-block -->
            <!--</div>-->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-footer -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<?php
$content = ob_get_clean();
require('template.php');
?>