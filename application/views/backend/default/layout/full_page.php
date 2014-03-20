<?if(!$this->session->userdata('account_info')) redirect('backend/login','location')?>
<!DOCTYPE html>
<html lang="">
    <head>
        <?$this->load->block_view('global/head')?>
    </head>
    <body id="top"> 
	  	<div id="container">
	        <?$this->load->block_view('global/header')?>
	            <div id="main" role="main">
	            	<!-- Begin of titlebar/breadcrumbs -->
	        		<div id="title-bar">
	        			<ul id="breadcrumbs">
	        				<li><a href="dashboard.html" title="Home"><span id="bc-home"></span></a></li>
	        				<li><a href="list_block.html" title="Lists"><b>Trang chủ</b></a></li>
	        				<!-- <li class="no-hover">Block Lists</li> -->
	        			</ul>
	        		</div> <!--! end of #title-bar -->
	        		<div class="shadow-bottom shadow-titlebar"></div>
	        		<!-- Begin of #main-content -->
	        		<div id="main-content">
	        			<?=$backend_content?>
	        			<div class="clear height-fix"></div>
	        		</div>
	        	</div> <!--! end of #main-content -->
	        <?$this->load->block_view('global/footer')?>
	    </div>
    </body>
</html>