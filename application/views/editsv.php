<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>UET</title>
    <base href="<?php echo base_url(); ?>" />
    <!-- Tell the browser to be responsive to screen width -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.css">
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.js"></script>
    <!-- Bootstrap 3.3.4 -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->

            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>UET</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="width: 200px">
                            <center>
                                <span class="hidden-xs" ><b>Tài khoản: <?php echo $username; ?></b></span>
                            </center>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="user-header">

                                <h1>
                                    <?php echo '<h2 style="color: white;"><b>'.$username.'</b></h2><br><h4 style="color: white;" >Quyền: '.$quyen.'</h4>'; ?>

                                </h1>
                            </li>
                            <li class="user-footer">

                                <div class="pull-right">
                                    <form action="welcome/logout">
                                        <button  type="submit" class="btn btn-primary" name="logout">Sign out</button>
                                    </form>
                                </div>
                            </li>
                        </ul>
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

            <!-- search form -->

            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">Menu</li>

                <?php if($username=='admin') echo '
                <li class="treeview active">
                    <a href="#">
                        <i class="fa fa-edit"></i> <span>Quản lí tài khoản</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="Welcome/quyen"><i class="fa fa-circle-o"></i> Danh sách tài khoản</a></li>

                    </ul>
                </li>';
                ?>
                <?php if($quyen==7) echo'
                <li class="treeview active">
                    <a href="#">
                        <i class="fa fa-edit"></i> <span>Thêm dữ liệu</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li ><a href="Welcome/sv"><i class="fa fa-circle-o"></i> Thêm sinh viên</a></li>
                        <li class="active"><a href="Welcome/view"><i class="fa fa-circle-o"></i> Danh sách sinh viên</a></li>
                        <li ><a href="themnganh/view"><i class="fa fa-circle-o"></i> Danh sách ngành</a></li>
                        <li><a href="themkh/view"><i class="fa fa-circle-o"></i> Danh sách khóa học</a></li>
                    </ul>
                </li>';

                if($quyen==5) echo'
                <li class="treeview active">
                    <a href="#">
                        <i class="fa fa-edit"></i> <span>Thêm dữ liệu</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="Welcome/sv"><i class="fa fa-circle-o"></i> Thêm sinh viên</a></li>
                        <li class="active" ><a href="Welcome/view"><i class="fa fa-circle-o"></i> Danh sách sinh viên</a></li>
                        <li><a href="themnganh/view"><i class="fa fa-circle-o"></i> Danh sách ngành</a></li>

                    </ul>
                </li>';
                if($quyen==4) echo'
                <li class="treeview active">
                    <a href="#">
                        <i class="fa fa-edit"></i> <span>Thêm dữ liệu</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="Welcome/sv"><i class="fa fa-circle-o"></i> Thêm sinh viên</a></li>
                        <li class="active"><a href="Welcome/view"><i class="fa fa-circle-o"></i> Danh sách sinh viên</a></li>

                        <li><a href="themkh/view"><i class="fa fa-circle-o"></i> Danh sách khóa học</a></li>
                    </ul>
                </li>';

                if($quyen==1) echo'
                <li class="treeview active">
                    <a href="#">
                        <i class="fa fa-edit"></i> <span>Thêm dữ liệu</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="Welcome/sv"><i class="fa fa-circle-o"></i> Thêm sinh viên</a></li>
                        <li class="active"><a href="Welcome/view"><i class="fa fa-circle-o"></i> Danh sách sinh viên</a></li>
                    </ul>
                </li>';
                ?>



            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">


        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-8">
                    <!-- general form elements -->

                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">

                            <h2>Sửa dữ liệu sinh viên</h2>

                        </div>
                        <form method="POST" action="Welcome/edit">
                        <?php
                        for ($i=0; $i<count($idsv); $i++) {
                            echo '<input type="text" hidden="hidden" name="'.$idsv[$i].'" value="'.$idsv[$i].'"/>';
                            echo '

                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th width="23%"></th>
                                <th >Giá trị cũ</th>
                                <th >Giá trị mới</th>
                            </tr>
                            </thead>
                            <tbody>';

                            echo '<tr>
                                <td>Mã sinh viên</td>
                                <td>' . $masv[$i] . '</td>
                                <td>';?><input type="text" class="form-control" name="<?php echo $idsv[$i]; ?>masv"/><?php echo '</td>
                              </tr>';

                            echo '<tr>
                                <td>Họ tên</td>
                                <td>' . $tensv[$i] . '</td>
                                <td>';?><input type="text" class="form-control" name="<?php echo $idsv[$i]; ?>hoten"/><?php echo '</td>
                              </tr>';

                            echo '<tr>
                                <td>Khóa học</td>
                                <td>' . $khoahoc[$i] . '</td>
                                <td>';?><select class="form-control select2" name="<?php echo $idsv[$i]; ?>kh">
                                        <option class="selected"></option>
                                        <?php foreach ($kh as $k =>$val):
                                            echo '
                                        <option>'.$val->kh_ten.'</option>;';
                                        endforeach;?>
                                    </select>
                            <?php echo '</td>
                              </tr>';

                            echo '<tr>
                                <td>Khoa</td>
                                <td>' . $khoa[$i] . '</td>
                                <td>';?><input type="text" class="form-control" name="<?php echo $idsv[$i]; ?>khoa"/><?php echo '</td>
                              </tr>';

                            echo '<tr>
                                <td>Ngành</td>
                                <td>' . $nganh[$i] . '</td>
                                <td>';?><select class="form-control select2" name="<?php echo $idsv[$i]; ?>nganh">
                                            <option class="selected"></option>
                                            <?php foreach ($n as $k =>$val):
                                                echo '
                                                        <option>'.$val->n_ten.'</option>;';
                                            endforeach;?>
                            </select><?php echo '</td>
                              </tr>';

                            echo '
                            </tbody>
                            <tfoot>
                            <th colspan="3">

                            </th>
                            </tfoot>
                            </form>
                        </table>';
                        }
                        ?>
                            <input type="submit" class="btn btn-primary" name="save" align="left" style="float: right;" value="Save">
                            <input type="submit" class="btn btn-primary" name="back" align="left" style="float: right;" value="Back">
                    </div><!-- /.box -->

                </div>


        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->


    <!-- Control Sidebar -->


</div><!-- ./wrapper -->

<script src="assets/plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- DATA TABES SCRIPT -->


<!-- SlimScroll -->
<script src="assets/plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- DATA TABES SCRIPT -->
<script src="assets/plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="assets/plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
<!-- SlimScroll -->
<script src="assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<!-- FastClick -->
<script src="assets/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/app.min.js" type="text/javascript"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js" type="text/javascript"></script>
<!-- page script -->
<script type="text/javascript">
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });
</script>
</body>
</html>
