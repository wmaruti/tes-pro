<!DOCTYPE HTML>
<html>
<head>
<link rel="icon" href="images/bellezza.jpg">

<title>Technical Support Oriana </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--//skycons-icons-->
</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<div class="header-main">
					<div class="header-left">
							<div class="logo-name">
									 <a href="index.html"> <h1>Bellezza </h1> 
									<!--<img id="logo" src="" alt="Logo"/>--> 
								  </a> 								
							</div>
							<!--search-box-->
								
                            <!--//end-search-box-->
							<div class="clearfix"> </div>
						 </div>
						 <div class="header-right">
							<div class="profile_details_left">
                                <!--  -->
								<div class="clearfix"> </div>
							</div>
							<!--notification menu end -->
							<div class="profile_details">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="images/bellezzaprofile.jpg" alt=""> </span> 
												<div class="user-name">
													<p>Technical Supoort Team</p>
													<span>Administrator</span>
												</div>
												<!-- <i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i> -->
												<div class="clearfix"></div>	
											</div>	
										</a>
										<!-- <ul class="dropdown-menu drp-mnu">
											<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
											<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
											<li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul> -->
									</li>
								</ul>
							</div>
							<div class="clearfix"> </div>				
						</div>
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->


		
<!--inner block start here-->

<div class="inner-block">
    <div class="blank">
<table class="table table-striped table-bordered" style="width:100%">
	    <thead>
	        <tr>
	            <td>No</td>
	            <td>Bill id</td>
	            <td>User</td>
	            <td>Customer name</td>
	            <td>Tipe Tagihan</td>
	            <td>Refid</td>
                <td>Status</td>
	            <td>NoVaBCA</td>
	            <!-- <td>Billdescid</td> -->
	            <!-- <td>Billdescen</td> -->
	            <td>Bill Amount</td>
	            <td>Bill Number</td>
                <td>Entrydate</td>
                <td>entryuserid</td>
	            <td>billinfo</td>
	            <!-- <td>info1</td>
	            <td>subamount1</td>
	            <td>info2</td>
	            <td>subamount2</td>
                <td>info3</td>
	            <td>subamount3</td>
	            <td>info4</td>
	            <td>subamount4</td>
                <td>info5</td>
	            <td>subamount5</td> -->
	            <td>paymentdate</td>
	            <!-- <td>paymentrefnumber</td> -->
                <td>billdate</td>
	        </tr>
	    </thead>
	    <tbody>
	        <?php

		include 'config.php';
		require 'classPgSql.php';
		$pg = new PgSql();

		// $sql = "SELECT * FROM public.trx_bill limit 10 ";

            $sql = "SELECT * FROM public.trx_bill left join trx_invoiceitem on invoiceitemid= refid where (src='IPLSF' and invoiceitemid is null ) or billdate<202006 order by trx_bill.status limit 10";	 	
			// $sql = "SELECT * FROM public.trx_bill left join trx_invoiceitemdetail on invoiceitemdetailid = refid where ((src='LISTRIK' or src='AIR') and invoiceitemdetailid is null)  or billdate<202006 order by trx_bill.status limit 10";
			
			// $dewan1 = $config->prepare($sql);
			// $dewan1->execute();
			// $res1 = $dewan1->get_result();
			$no_urut = 1;
			foreach($pg->getRows($sql) as $row) {
				if ($pg->num_rows > 0) {
	                // while ($row = $res1->fetch_assoc()) {
	                    // $no_urut = $row['no_urut++'];
	                    // $billid = $row['billid'];
	                    // $userid = $row['userid'];
	                    // $customername = $row['customername'];
	                    // $src = $row['src'];
	                    // $refid = $row['refid'];
	        ?>
				
	            <tr>
				
					<td><?php echo $no_urut++;?></td>
	                <td><?php echo $row->billid ?></td>
					<td><?php echo $row->userid ?></td>
					<td><?php echo $row->customername ?></td>
					<td><?php echo $row->src ?></td>
					<td><?php echo $row->refid ?></td>
					<td><?php echo $row->status ?></td>
					<td><?php echo $row->novabca ?></td>
	            </tr> 
				
				
			<?php } }?>
	    </tbody>
	</table>

	</div>
</div>
<!--inner block end here-->




<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2021 Technical Support Oriana. All Rights Reserved | Design by  <a href="https://www.instagram.com/whymrtdj/" target="_blank">@whymartadjie</a> </p>
</div>	
<!--COPY rights end here-->
</div>
</div>
<!--slider menu-->
<div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
			  </a> </div>		  
		    <div class="menu">
		      <ul id="menu" >
				<a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
					<div class="d-flex w-100 justify-content-start align-items-center">
						<span class="fa fa-dashboard fa-fw mr-3"></span>
						<span class="menu-collapsed">Daily</span>
						<span class="submenu-icon ml-auto"></span>
					</div>
				</a>
				<!-- Submenu content -->
				<div id='submenu1' class="collapse sidebar-submenu">
					<li><a href="dailypush.php"><i class="fa fa-cog fa-spin fa-3x fa-fw"></i><span>Daily Push</span></a></li>

					<li id="menu-comunicacao" ><a href="#"><i class="fa fa-book nav_icon"></i><span>Pasca Create SI</span><span class="fa fa-angle-right" style="float: right"></span></a>
						<ul id="menu-comunicacao-sub" >
						  <li id="menu-mensagens" ><a href="cek_harus_hapus.php">List Billid IPLSF yang harus dihapus
						  </a>		              
						  </li>
						  <li id="menu-arquivos" ><a href="cekutilitieshapus.php">List billid Utilities yang harus dihapus</a></li>
						   <li id="menu-arquivos" ><a href="icons.html">Result 3</a></li>
						</ul>
					  </li>

					  <li id="menu-comunicacao" ><a href="#"><i class="fa fa-book nav_icon"></i><span>Cek Expired</span><span class="fa fa-angle-right" style="float: right"></span></a>
						<ul id="menu-comunicacao-sub" >
						  <li id="menu-mensagens" ><a href="listperpanjang.php">List yang perlu di perpanjang
						  </a>		              
						  </li>
						  <li id="menu-arquivos" ><a href="typography.html">Update tagihan expire bulan depan
						</a></li>
						 
						</ul>
					  </li>
					<li><a href="depositdouble.php"><i class="fa fa-credit-card" aria-hidden="true"></i> <span>Amount VABCA </span></a></li>
				  <li id="menu-academico" ><a href="#"><i class="fa fa-file-text"></i><span>Cek mst Bill assignment</span><span class="fa fa-angle-right" style="float: right"></span></a>
					<ul id="menu-academico-sub" >
						 <li id="menu-academico-boletim" ><a href="cek_data_owner.php">Cek Ada Owner</a></li>
					  <li id="menu-academico-avaliacoes" ><a href="cek_double_mstbillassingment.php">Cek Double</a></li>	
					  <li id="menu-academico-avaliacoes" ><a href="cek_data_penyewa.php">Cek Jumlah Penyewa</a></li>		           
					</ul>
					
				  </li>
				  
				  <li><a href="depositdouble.php"><i class="fa fa-clone"></i><span>Cek Deposit Double</span></a></li>
				</div>

  <!-- Monthly -->
				<a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
					<div class="d-flex w-100 justify-content-start align-items-center">
						<span class="fa fa-cog fa-spin fa-3x fa-fw"></span>
						<span class="menu-collapsed">Monthly</span>
						<span class="submenu-icon ml-auto"></span>
					</div>
				</a>
				<!-- Submenu content -->
				<div id='submenu2' class="collapse sidebar-submenu" >
					
				<li><a href="monthlypush.php"><i class="fa fa-cog fa-spin fa-3x fa-fw"></i><span>Monthly Push</span></a></li>
				
				<li id="menu-comunicacao" ><a href="#"><span>Cek Air Dan Listrik</span><span class="fa fa-angle-right" style="float: right"></span></a>
					<ul id="menu-comunicacao-sub" >
					  <li id="menu-mensagens" ><a href="listriklupainput.php">Listrik Lupa Diinput</a></li>
					  <li id="menu-arquivos" ><a href="airlupainput.php">Air Lupa Diinput</a></li>
					</ul>
				  </li>
				  <li id="menu-comunicacao" ><a href="#"><span>Tagihan IPLSF Berubah</span><span class="fa fa-angle-right" style="float: right"></span></a>
					<ul id="menu-comunicacao-sub" >
					  <li id="menu-mensagens" ><a href="iplsfberubah.php">Tagihan IPLSF Berubah
					  </a>		              
					  </li>
					  <li id="menu-arquivos" ><a href="detailiplsf.php">Detail Tagihan Berubah</a></li>
					</ul>
				  </li>

				 

				  <li id="menu-comunicacao" ><a href="#"><span>Materai OFFICE</span><span class="fa fa-angle-right" style="float: right"></span></a>
					<ul id="menu-comunicacao-sub" >
					  <li id="menu-mensagens" ><a href="officekenamaterai.php">OFFICE Wajib Materai</a></li>
					  <li id="menu-arquivos" ><a href="officetidakkenamaterai.php">OFFICE Tidak Pakai Materai</a></li>
					</ul>
				  </li>
				  <li><a href="vatenantbulanini.php"><span>Data VA Tenant Bulan Ini</span></a></li>
				  <li><a href="update_data_invoice.php"><span> Invoice yang Berubah Bulan Ini</span></a></li>
				</div>
   
				</ul>  
		    </div>
	 </div>
	<div class="clearfix"> </div>
</div>

<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>


                      
						
