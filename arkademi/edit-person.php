<?php include "include/session.php"; ?>
<?php include "include/koneksi.php";?>
<?php include "include/fungsi_indotgl.php";?>
<?php
$query=$koneksi->query("select * from person where id='$_GET[id]'");
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
          <h1><i class="fa fa-edit"></i> Form Edit Biodata</h1>
          <p>Biodata Person</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Form Biodata</li>
          <li class="breadcrumb-item"><a href="#">Biodata Person</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Edit Biodata Person</h3>
            <div class="tile-body">
              <form class="form-horizontal" method="post" action="update-person.php">

			   				<div class="form-group row">
                  <label class="control-label col-md-3">ID Person</label>
                  <div class="col-md-7">
                    <input class="form-control col-md-12" type="text" readonly name="id_region" value="<?=$data['id'];?>">
                  </div>
                </div>
				
                <div class="form-group row">
                  <label class="control-label col-md-3">Nama Lengkap</label>
                  <div class="col-md-7">
                    <input class="form-control col-md-12" type="text" name="name" value="<?=$data['name'];?>">
                  </div>
                </div>
				
				<div class="form-group row">
                  <label class="control-label col-md-3">Income</label>
                  <div class="col-md-7">
                    <input class="form-control col-md-12" type="text" name="income" value="<?=$data['income'];?>">
                  </div>
                </div>
				
				<div class="form-group row">
                  <label class="control-label col-md-3">Region</label>
                  <div class="col-md-7">
                    <select class="form-control col-md-6" name="id_region">
					<?php
					$query2=$koneksi->query("select * from regions");
				
				while($data2=$query2->fetch_assoc()){
					?>
					<option value="<?=$data2['id_region']?>"><?=$data2['name']?></option>
				<?php } ?>
					</select>
                  </div>
                </div>
				
				<div class="form-group row">
                  <label class="control-label col-md-3">Alamat</label>
                  <div class="col-md-7">
                    <textarea class="form-control" rows="4" name="address"><?=$data['address'];?></textarea>
                  </div>
                </div>
				
				<div class="form-group row">
                  <label class="control-label col-md-3">Tanggal Penulisan</label>
                  <div class="col-md-7">
                    <input class="form-control col-md-12" type="text" name="create_at" value="<?=$data['create_at'];?>">
                  </div>
				</div>
				
				<div class="tile-footer">
				  <div class="row">
					<div class="col-md-8 col-md-offset-3">
					  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update</button>
					  <input type="hidden" name="id" value="<?=$data['id'];?>">
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