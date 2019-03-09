<aside class="app-sidebar" style="background-color: #8b9dc3;">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="images/2014141550.jpg" width="40" height="40" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">ADMIN</p>
		  <p class="app-sidebar__user-name"><?=$_SESSION['email'];?></p>
        </div>
      </div>
	  
      <ul class="app-menu">
        
	  <li><a class="app-menu__item" href="index.php"><i class="app-menu__icon fa fa-home"></i><span class="app-menu__label">Home</span></a></li>
      
      <li><a class="app-menu__item" href="tambah-region.php"><i class="app-menu__icon fa fa-plus"></i><span class="app-menu__label" >Tambah Region</span></a></li>
	  
	  
	  
		<li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Region</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="region.php"><i class="icon fa fa-hand-o-right"></i>Data Region</a></li>
            <li><a class="treeview-item" href="tambah-region.php"><i class="icon fa fa-hand-o-right"></i>Tambah Region</a></li>            
          </ul>
        </li>

		<li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label" >Person</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="person.php"><i class="icon fa fa-hand-o-right"></i>Data Person</a></li>
            <li><a class="treeview-item" href="tambah-person.php"><i class="icon fa fa-hand-o-right"></i>Tambah Person</a></li>            
          </ul>
        </li>
		
		<li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-area-chart"></i><span class="app-menu__label" >Data Penduduk</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="semua-daerah.php"><i class="icon fa fa-hand-o-right"></i>Semua Penduduk</a></li>
            <li><a class="treeview-item" href="penduduk-perwilayah.php"><i class="icon fa fa-hand-o-right"></i>Penduduk Per Wilayah</a></li>            
          </ul>
        </li>
		
        <li><a class="app-menu__item" href="include/logout.php" onClick="return confirm('Yakin mau keluar ?')"><i class="app-menu__icon fa fa-sign-out"></i><span class="app-menu__label" >Keluar</span></a></li>          
      </ul>
    </aside>