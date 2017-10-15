  <body>
  <!-- container section start -->
  <section id="container" class="">
     
      
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="<?php echo base_url()."index.php/c_admin/" ?>" class="logo">Admin<span class="lite">Batik Indonesia</span></a>
            <!--logo end-->

            

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    

                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                          
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
                          <li><a class="" href="<?php echo base_url()."index.php/C_admin/tambahproduk" ?>">Tambah Produk</a></li>
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
                          <li><a class="" href="<?php echo base_url()."index.php/C_admin/dataproduk" ?>">Daftar Produk</a></li>
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
      <!--sidebar end-->
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-laptop"></i>Dashboard</li>						  	
					</ol>
				</div>
			</div>
              
            <div class="row">
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="info-box blue-bg">
						<i class="fa fa-edit"></i>
						<div class="count">Forms</div>						
					</div><!--/.info-box-->			
				</div><!--/.col-->
				
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="info-box brown-bg">
						<i class="fa fa-database"></i>
						<div class="count">Data</div>					
					</div><!--/.info-box-->			
				</div><!--/.col-->	
				
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="info-box dark-bg">
						<i class="fa fa-laptop"></i>
						<div class="count">Web</div>						
					</div><!--/.info-box-->			
				</div><!--/.col-->
				
			</div><!--/.row-->
		

          </section>
          <div class="text-right">
          <div class="credits">
                <!-- 
                    All the links in the footer should remain intact. 
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
                -->
               
            </div>
        </div>
      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->

    <!-- javascripts -->
    <script src="<?php echo base_url() ?>assets/jsadmin/jquery.js"></script>
	<script src="<?php echo base_url() ?>assets/jsadmin/jquery-ui-1.10.4.min.js"></script>
    <script src="<?php echo base_url() ?>assets/jsadmin/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="<?php echo base_url() ?>assets/jsadmin/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="<?php echo base_url() ?>assets/jsadmin/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url() ?>assets/jsadmin/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="<?php echo base_url() ?>assets/assetsadmin/jquery-knob/js/jquery.knob.js"></script>
    <script src="<?php echo base_url() ?>assets/jsadmin/jquery.sparkline.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/assetsadmin/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="<?php echo base_url() ?>assets/jsadmin/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="<?php echo base_url() ?>assets/jsadmin/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
	<script src="<?php echo base_url() ?>assets/assetsadmin/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="<?php echo base_url() ?>assets/jsadmin/calendar-custom.js"></script>
	<script src="<?php echo base_url() ?>assets/jsadmin/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="<?php echo base_url() ?>assets/jsadmin/jquery.customSelect.min.js" ></script>
	<script src="<?php echo base_url() ?>assets/assetsadmin/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="<?php echo base_url() ?>assets/jsadmin/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="<?php echo base_url() ?>assets/jsadmin/sparkline-chart.js"></script>
    <script src="<?php echo base_url() ?>assets/jsadmin/easy-pie-chart.js"></script>
	<script src="<?php echo base_url() ?>assets/jsadmin/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="<?php echo base_url() ?>assets/jsadmin/jquery-jvectormap-world-mill-en.js"></script>
	<script src="<?php echo base_url() ?>assets/jsadmin/xcharts.min.js"></script>
	<script src="<?php echo base_url() ?>assets/jsadmin/jquery.autosize.min.js"></script>
	<script src="<?php echo base_url() ?>assets/jsadmin/jquery.placeholder.min.js"></script>
	<script src="<?php echo base_url() ?>assets/jsadmin/gdp-data.js"></script>	
	<script src="<?php echo base_url() ?>assets/jsadmin/morris.min.js"></script>
	<script src="<?php echo base_url() ?>assets/jsadmin/sparklines.js"></script>	
	<script src="<?php echo base_url() ?>assets/jsadmin/charts.js"></script>
	<script src="<?php echo base_url() ?>assets/jsadmin/jquery.slimscroll.min.js"></script>
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
	  
	  /* ---------- Map ---------- */
	$(function(){
	  $('#map').vectorMap({
	    map: 'world_mill_en',
	    series: {
	      regions: [{
	        values: gdpData,
	        scale: ['#000', '#000'],
	        normalizeFunction: 'polynomial'
	      }]
	    },
		backgroundColor: '#eef3f7',
	    onLabelShow: function(e, el, code){
	      el.html(el.html()+' (GDP - '+gdpData[code]+')');
	    }
	  });
	});

  </script>

  </body>
</html>
