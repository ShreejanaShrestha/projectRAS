<?php 
    include '../inc/session.php';
    include '../inc/template_header.php';
    include '../inc/navigation.php';
 ?>

<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <?php 
                include '../inc/alert.php'; 
                ?>
                <h1 class="page-header">
                    Dashboard
                    <small>Blog admin page</small>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="dashboard.php">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-file"></i> Admin panel
                    </li>
                </ol>
            </div>
        </div>
        <div>
            <h1 >Welcome to the dashboard</h1>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

<?php 
    include '../inc/template_footer.php';
 ?>