  <body>
  <!-- container section start -->
  <section id="container" class="">
      <!--header start-->
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

           <a href="<?php echo base_url()."index.php/c_admin/" ?>" class="logo">Admin<span class="lite">Batik Indonesia</span></a>

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">                    
                    <li>
                        <form class="navbar-form">
                            <input class="form-control" placeholder="Search" type="text">
                        </form>
                    </li>                    
                </ul>
                <!--  search form end -->                
            </div>

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    
                    <!-- task notificatoin start -->
                    
                    <!-- alert notification end-->
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="username"><?php echo $this->session->userdata('nama_admin') ?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="<?php echo base_url()."index.php/C_adminlogin/adminlogout" ?>"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="<?php echo base_url()."index.php/c_admin/index" ?>">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
          <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Forms</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="<?php echo base_url()."index.php/C_admin/tambahproduk" ?>">Tambah Product</a></li>
                          <li><a class="" href="<?php echo base_url()."index.php/C_adminlogin/masukRegister" ?>">Register Admin</a></li>                          
                          
                      </ul>
                  </li>          
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Tables</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="<?php echo base_url()."index.php/c_admin/dataproduk" ?>">Daftar Produk</a></li>
                          
                       
                      </ul>
                  </li>
                  
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Pages</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">                          
                          <li><a class="" href="<?php echo base_url()."index.php/C_user/" ?>">Website</a></li>
                          <li><a class="" href="<?php echo base_url()."index.php/C_adminlogin/adminlogout" ?>">Logout</a></li>
                      </ul>
                  </li>   
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-table"></i> Data Produk</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-table"></i>Table</li>
						<li><i class="fa fa-th-list"></i>Data Produk</li>
					</ol>
				</div>
			</div>
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Data Produk
                          </header>
                          <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th></th>
                                  <th>ID Produk</th>
                                  <th>Nama Produk</th>
                                  <th>Deskripsi</th>
                                  <th>Size</th>
                                  <th>Harga Produk</th>
                                  <th>Gambar Produk</th>
                                  <th></th>
                                </tr>
                              </thead>
                              <tbody>
                              <form method="post" action="<?php echo base_url().'index.php/C_admin/delproduk'?>">

                                <?php foreach ($data as $x) { ?>

                                <tr>
                                    <td><input type="checkbox" value="<?= $x['produk_id'] ?>" name="item[]"></td>
                                    <td><?= $x['produk_id'] ?></td>
                                    <td><?= $x['produk_nama'] ?></td>
                                    <td><?= $x['produk_deskripsi'] ?></td>
                                    <td><?= $x['produk_size'] ?></td>
                                    <td><?= $x['produk_harga'] ?></td>
                        
                                    <td style="width:10px, height:10px;"> <img src="<?php echo base_url().'/uploads/produk/'.$x['produk_image']; ?>" height="100" width="100"></td>

                                     <td align="center">
                                        <a href="<?php echo base_url()."index.php/C_admin/editproduk/".$x['produk_id'];?>">Edit</a> 
                                    </td> 
                                    <td align="center">
                                        <a href="<?php echo base_url()."index.php/c_admin/delproduk/".$x['produk_id'];?>">Delete</a>
                                    </td>
                                </tr>        

                                <?php } ?>

                            </tbody>
                            </table>
                          </div>
                      </section>
                  </div>
              </div>
             
            </form>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      <div class="text-right">
            <div class="credits">
                <!-- 
                    All the links in the footer should remain intact. 
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
                -->
                <h4>by Dhila</h4>
            </div>
        </div>
  </section>
  <!-- container section end -->
    <!-- javascripts -->
    <script src="<?php echo base_url() ?>assets/jsadmin/jquery.js"></script>
    <script src="<?php echo base_url() ?>assets/jsadmin/bootstrap.min.js"></script>
    <!-- nicescroll -->
    <script src="<?php echo base_url() ?>assets/jsadmin/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url() ?>assets/jsadmin/jquery.nicescroll.js" type="text/javascript"></script>
    <!--custome script for all page-->
    <script src="<?php echo base_url() ?>assets/jsadmin/scripts.js"></script>


  </body>
</html>
