<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>UET</title>
    <base href="<?php echo base_url(); ?>" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.css">
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.js"></script>
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
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
                        <li><a href="Welcome/sv"><i class="fa fa-circle-o"></i> Thêm sinh viên</a></li>
                        <li ><a href="Welcome/view"><i class="fa fa-circle-o"></i> Danh sách sinh viên</a></li>
                        <li><a href="themnganh/view"><i class="fa fa-circle-o"></i> Danh sách ngành</a></li>
                        <li  class="active"><a href="themkh/view"><i class="fa fa-circle-o"></i> Danh sách khóa học</a></li>
                    </ul>
                </li>';
                if($quyen==6) echo'
                <li class="treeview active">
                    <a href="#">
                        <i class="fa fa-edit"></i> <span>Thêm dữ liệu</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">

                        <li ><a href="themnganh/view"><i class="fa fa-circle-o"></i> Danh sách ngành</a></li>
                        <li  class="active"><a href="themkh/view"><i class="fa fa-circle-o"></i> Danh sách khóa học</a></li>
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
                        <li ><a href="Welcome/view"><i class="fa fa-circle-o"></i> Danh sách sinh viên</a></li>

                        <li  class="active"><a href="themkh/view"><i class="fa fa-circle-o"></i> Danh sách khóa học</a></li>
                    </ul>
                </li>';

                if($quyen==2) echo'
                <li class="treeview active">
                    <a href="#">
                        <i class="fa fa-edit"></i> <span>Thêm dữ liệu</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">

                        <li  class="active"><a href="themkh/view"><i class="fa fa-circle-o"></i> Danh sách khóa học</a></li>
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
                    <div class="box box-primary">
                        <div class="box-header with-border">

                            <h2>Danh sách khóa học</h2>

                        </div>

                        <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="33%">STT</th>
                                <th width="43%">Mã khóa học</th>

                            </tr>
                            </thead>
                            <tbody>
                            <form method="POST" action="themkh/export">
                            <?php $i=1;
                            foreach ($kh as $k =>$val):
                                echo '<tr>
                        <td>'.$i.'</td>
                        <td>'.$val->kh_ten.'</td>
                        <td>';?><input type="checkbox" name="chk_group[]" value="<?php echo $val->kh_id; ?>" /><?php echo '</td>
                      </tr>';
                                $i++;
                            endforeach;?>
                            </tbody>
                            <tfoot>
                            <th colspan="3">
                                <input type="submit" class="btn btn-primary" name="delete" align="left" style="float: right;" value="Delete">
                                <input type="submit" class="btn btn-primary" name="edit" align="left" style="float: right;" value="Edit">
                                <button type="button" class="btn btn-primary" style="float: right;" data-toggle="modal" data-target="#add" >Add</button>
                            </th>
                            </tfoot>
                            </form>
                        </table>
                    </div><!-- /.box -->

                </div>


        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->


    <!-- Control Sidebar -->
    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Thêm khóa học</h4>
                </div>
                <div class="modal-body">
                    <form role="form" method="post" action="themkh/add" enctype="multipart/form-data" >
                        <div class="box-body">
                            <div class="form-group">
                                <label >Nhập mã khóa học</label>
                                <input type="text" class="form-control" name="khoahoc" />
                            </div>
                        </div><!-- /.box-body -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="submit">Lưu</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div><!-- ./wrapper -->

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
