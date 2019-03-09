<?php include "include/session.php"; ?>
<?php include "include/koneksi.php";?>
<?php include "include/fungsi_indotgl.php";?>
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
          <h1><i class="fa fa-th-list"></i> Data Penduduk</h1>
          <p>Menampilkan Data Penduduk</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Master Data</li>
          <li class="breadcrumb-item active"><a href="#">Data Penduduk</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
					<th>ID</th>
					<th>Nama Penduduk</th>
                    <th>Region</th>
                    <th><center>Aksi</center></th>
                  </tr>
                </thead>
                <tbody>
                <?php
                $query=$koneksi->query("select * from regions, person where regions.id_region=person.id_region");
				$no=1;
				while($data=$query->fetch_assoc()){
				?>
                  <tr>
				    <td><?=$data['id'];?></td>
				    <td><?=$data['name'];?></td>
					<td><?=$data['nama'];?></td>
                    <td><a href="data_penduduk_perwilayah.php?id_region=<?=$data['id_region'];?>"class="btn btn-info" >Lihat</a></td>
                  </tr>
                  <?php $no++; } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
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
    <!-- Data table plugin-->
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
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