<?php include "include/koneksi.php";?>
<?php include "include/session.php"; ?>
<?php include "include/fungsi_indotgl.php";?>
<?php
$query=$koneksi->query("select * from regions where id_region ='$_GET[id_region]'");
$data=$query->fetch_assoc();
?>


<!DOCTYPE html>
<html lang="en">
  <?php include "include/head.php";?>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <?php include "include/header.php";?>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <?php include "include/sidebar.php";?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i>Tambah Data Region</h1>
          <p>Region</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Form Region</li>
          <li class="breadcrumb-item"><a href="#">Region</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Region</h3>
            <div class="tile-body">
              <form class="form-horizontal" method="post" action="p-add-region.php">
            
			
				<div class="form-group row">
                  <label class="control-label col-md-3">Nama Lengkap</label>
                  <div class="col-md-7">
                    <input class="form-control col-md-12" type="text" name="name" value="<?=$data['name'];?>">
                  </div>
                </div>
				
				<div class="form-group row">
                  <label class="control-label col-md-3">Ditulis Pada Tanggal</label>
                  <div class="col-md-7">
                    <input class="form-control col-md-12" type="datetime-local" name="create_at" value="<?=$data['name'];?>">
                  </div>
                </div>

            <div class="tile-footer">
              <div class="row">
                <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Tambah</button>
                </div>
              </div>
            </div>
                </form>
            </div>
            
          </div>
        </div>
        <div class="clearix"></div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>