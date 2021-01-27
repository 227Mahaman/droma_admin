<?php
$title = "Profile";
ob_start();
?>
<div class="row">
  <div class="col-md-12">

    <!-- Profile Image -->
    <div class="box box-primary">
      <div class="box-body box-profile">
        <img class="profile-user-img img-responsive img-circle" src="<?= !empty($_SESSION['sonef']['photo']) ? $_SESSION['sonef']['photo'] : 'public/vendor/dist/img/avatar.png' ?>" alt="User profile picture">

        <h3 class="profile-username text-center"><?= $_SESSION['sonef']['first_name'] . ' ' . $_SESSION['sonef']['last_name'] . ' ('.$_SESSION['sonef']['role'] .')' ?></h3>

        <p class="text-muted text-center"><?= $_SESSION['sonef']['type_agent']  ?></p>

        <ul class="list-group list-group-unbordered">
          <li class="list-group-item">
            <b></b> <a class="pull-right"></a>
          </li>
          <li class="list-group-item">
            <b>Poste</b> <a class="pull-right"></a>
          </li>
        </ul>

        <!--<a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>-->
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->

    <!-- About Me Box -->
   
    <!-- /.box -->
  </div>
</div>
<?php
$content = ob_get_clean();
require('template.php');
?>