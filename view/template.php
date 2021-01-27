<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $title ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="public/vendor/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="public/vendor/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="public/vendor/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="public/vendor/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="public/vendor/dist/css/skins/skin-yellow-light.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="public/vendor/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="public/vendor/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="public/vendor/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="public/vendor/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="public/vendor/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="public/vendor/style.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="public/vendor/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="public/vendor/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="public/vendor/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- Toggle -->
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <?php //print_r($_SESSION['sonef']); die;
  ?>
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="index.php" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>Sonef</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Sonef</b></span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->

            <!-- Notifications: style can be found in dropdown.less -->

            <!-- Tasks: style can be found in dropdown.less -->

            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="index.php?action=profile" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?= !empty($_SESSION['sonef']['photo']) ? $_SESSION['sonef']['photo'] : 'public/vendor/dist/img/avatar.png' ?>" class=" user-image" alt="User Image">
                <span class="hidden-xs"><?= $_SESSION['sonef']['first_name'] . ' ' . $_SESSION['sonef']['last_name'] ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="<?= !empty($_SESSION['sonef']['photo']) ? $_SESSION['sonef']['photo'] : 'public/vendor/dist/img/avatar.png' ?>" class="img-circle" alt="User Image">

                  <p>
                    <?= $_SESSION['sonef']['first_name'] . ' ' . $_SESSION['sonef']['last_name'] ?>
                    <small><?= $_SESSION['sonef']['type_agent']  ?></small>
                  </p>
                </li>
                <!-- Menu Body -->
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="index.php?action=profile" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="index.php?action=logout" class="btn btn-default btn-flat">Se deconnecter</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
              <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="<?= !empty($_SESSION['sonef']['photo']) ? $_SESSION['sonef']['photo'] : 'public/vendor/dist/img/avatar.png' ?>" class=" img-circle" alt="Photo d'utilisateur">
          </div>
          <div class="pull-left info">
            <p><?= $_SESSION['sonef']['first_name'] . ' ' . $_SESSION['sonef']['last_name'] ?></p>
            <a href="#"><i class="fa fa-circle text-success"></i> Connecté</a>
          </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Recherche...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
          </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">Menu</li>
          <?php
          $res = Manager::getData('module_role', 'role_id', $_SESSION['sonef']['roleId'], true);
          $res = $res['data'];
          // print_r($res);
          $thisSMenu = array();
          foreach ($res as $key => $value) {

            $name = Manager::getData('module', 'id', $value['module']);
            if (empty($name['data']['sub_module'])) {
              //echo ($value['module']);
              $name = $name['data'];
              $menu = new MenuManager($name['name']);
              $sMenu = getActions($name['id']);
              //print_r($sMenu); die;
              if (is_array($sMenu) || is_object($sMenu)) {
                foreach ($sMenu as $key => $smValue) {
                  if (haveAction($_SESSION['sonef']['roleId'], $smValue['id'])) {                    
                    $thisSMenu["index.php?action=" . $smValue['action_url']] = $smValue['name'];
                  }
              }
              }
              $menu->setmSousMenu($thisSMenu);
              echo $menu->getMenu($name['icon']);
              $thisSMenu = (array) null;
            }
          }
          
          ?>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          <?= $title ?>
          <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
          <li class="active"><?= $title ?></li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <?php echo $content ?>

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <!-- <b>Version</b> 2.4.13-->
      </div>
      <strong>Copyright &copy; 2020 <a href="#">Sonef</a>.</strong>

    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark" style="display: none;">
      <!-- Create the tabs -->
      <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
        <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
      </ul>
      <!-- Tab panes -->
      <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane" id="control-sidebar-home-tab">
          <h3 class="control-sidebar-heading">Recent Activity</h3>
          <ul class="control-sidebar-menu">
            <li>
              <a href="javascript:void(0)">
                <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                  <p>Will be 23 on April 24th</p>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <i class="menu-icon fa fa-user bg-yellow"></i>

                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                  <p>New phone +1(800)555-1234</p>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                  <p>nora@example.com</p>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <i class="menu-icon fa fa-file-code-o bg-green"></i>

                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                  <p>Execution time 5 seconds</p>
                </div>
              </a>
            </li>
          </ul>
          <!-- /.control-sidebar-menu -->

          <h3 class="control-sidebar-heading">Tasks Progress</h3>
          <ul class="control-sidebar-menu">
            <li>
              <a href="javascript:void(0)">
                <h4 class="control-sidebar-subheading">
                  Custom Template Design
                  <span class="label label-danger pull-right">70%</span>
                </h4>

                <div class="progress progress-xxs">
                  <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <h4 class="control-sidebar-subheading">
                  Update Resume
                  <span class="label label-success pull-right">95%</span>
                </h4>

                <div class="progress progress-xxs">
                  <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <h4 class="control-sidebar-subheading">
                  Laravel Integration
                  <span class="label label-warning pull-right">50%</span>
                </h4>

                <div class="progress progress-xxs">
                  <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <h4 class="control-sidebar-subheading">
                  Back End Framework
                  <span class="label label-primary pull-right">68%</span>
                </h4>

                <div class="progress progress-xxs">
                  <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                </div>
              </a>
            </li>
          </ul>
          <!-- /.control-sidebar-menu -->

        </div>
        <!-- /.tab-pane -->
        <!-- Stats tab content -->
        <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
        <!-- /.tab-pane -->
        <!-- Settings tab content -->
        <div class="tab-pane" id="control-sidebar-settings-tab">
          <form method="post">
            <h3 class="control-sidebar-heading">General Settings</h3>

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Report panel usage
                <input type="checkbox" class="pull-right" checked>
              </label>

              <p>
                Some information about this general settings option
              </p>
            </div>
            <!-- /.form-group -->

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Allow mail redirect
                <input type="checkbox" class="pull-right" checked>
              </label>

              <p>
                Other sets of options are available
              </p>
            </div>
            <!-- /.form-group -->

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Expose author name in posts
                <input type="checkbox" class="pull-right" checked>
              </label>

              <p>
                Allow the user to show his name in blog posts
              </p>
            </div>
            <!-- /.form-group -->

            <h3 class="control-sidebar-heading">Chat Settings</h3>

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Show me as online
                <input type="checkbox" class="pull-right" checked>
              </label>
            </div>
            <!-- /.form-group -->

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Turn off notifications
                <input type="checkbox" class="pull-right">
              </label>
            </div>
            <!-- /.form-group -->

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Delete chat history
                <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
              </label>
            </div>
            <!-- /.form-group -->
          </form>
        </div>
        <!-- /.tab-pane -->
      </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>

  <div class="modal modal-danger fade" id="modal-danger" style="display: none">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span></button>
          <h4 class="modal-title">Sonef</h4>
        </div>
        <div id="danger_content" class="modal-body">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline">Ok</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery 3 -->
  <script src="public/vendor/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="public/vendor/bower_components/jquery-ui/jquery-ui.min.js"></script>
  <script src="public/vendor/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="public/vendor/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>
  <!-- Bootstrap 3.3.7 -->
  <script src="public/vendor/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- Morris.js charts -->
  <script src="public/vendor/bower_components/raphael/raphael.min.js"></script>
  <script src="public/vendor/bower_components/morris.js/morris.min.js"></script>
  <!-- Sparkline -->
  <script src="public/vendor/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
  <!-- jvectormap -->
  <script src="public/vendor/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="public/vendor/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="public/vendor/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="public/vendor/bower_components/moment/min/moment.min.js"></script>
  <script src="public/vendor/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
  <!-- datepicker -->
  <script src="public/vendor/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="public/vendor/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  <!-- Toggle -->
  <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
  <!-- Slimscroll -->
  <script src="public/vendor/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="public/vendor/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="public/vendor/dist/js/adminlte.min.js"></script>
  <!-- ChartJS -->
  <script src="public/vendor/bower_components/Chart.js/Chart.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="public/vendor/dist/js/pages/dashboard2.js"></script>
  <script src="public/vendor/bower_components/ckeditor/ckeditor.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="public/vendor/dist/js/demo.js"></script>
  <script src="public/vendor/js/display_profile_image.js"></script>
  <script src="public/vendor/js/jquery.serializeObject.js"></script>
  <script src="public/vendor/js/moment-with-locales.min.js"></script>
  <script src="public/vendor/parsley/parsley.min.js"></script>
  <script src="public/vendor/parsley/i18n/fr.js"></script>
  <script src="public/js/script.js"></script>
  <script src="public/js/data_handler.js"></script>
  <script src="public/vendor/js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="public/vendor/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
  <script>
    //INITIALIZE SPARKLINE CHARTS
    $(".sparkline").each(function () {
      var $this = $(this);
      $this.sparkline('html', $this.data());
    });
    $(function() {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      CKEDITOR.replace('editor1')
      //bootstrap WYSIHTML5 - text editor
      $('.textarea').wysihtml5()
    });
    $(function() {
      $('#example1').DataTable({
        "language": {
          "emptyTable":     "Pas de données",
          "info":           "Recherche trouvé _START_ à _END_ ",
          "infoEmpty":      "Nombre à afficher",
          "lengthMenu": " Nombre de lot à afficher:_MENU_",
          "infoFiltered":   "",
          "search":         "Recherche:",
          "zeroRecords":    "Recherche introuvable",
          "paginate": {
              "first":      "Premier",
              "last":       "Dernier",
              "next":       "Suivant",
              "previous":   "Précédent"
              },
          "aria": {
              "sortAscending":  ": activer pour trier la colonne par ordre croissant",
              "sortDescending": ": activer pour trier la colonne par ordre décroissant"
              }
        }
      });
      $('#example2').DataTable({
        'paging': true,
        'lengthChange': false,
        'searching': false,
        'ordering': true,
        'info': true,
        'autoWidth': false,
        "language": {
          "emptyTable":     "Pas de données",
          "info":           "Recherche trouvé _START_ à _END_ ",
          "infoEmpty":      "Nombre à afficher",
          "lengthMenu": " Nombre de lot à afficher:_MENU_",
          "infoFiltered":   "",
          "search":         "Recherche:",
          "zeroRecords":    "Recherche introuvable",
          "paginate": {
              "first":      "Premier",
              "last":       "Dernier",
              "next":       "Suivant",
              "previous":   "Précédent"
              },
          "aria": {
              "sortAscending":  ": activer pour trier la colonne par ordre croissant",
              "sortDescending": ": activer pour trier la colonne par ordre décroissant"
              }
        }
      });
    });
  </script>
</body>

</html>