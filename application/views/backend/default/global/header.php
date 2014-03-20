<div id="header-surround"><header id="header">
    	<!-- Place your logo here -->
		<img src="<?=backend_img_url()?>/logo.png" alt="Grape" class="logo">
		
		<!-- Divider between info-button and the toolbar-icons -->
		<div class="divider-header divider-vertical"></div>
		
		<!-- Info-Button -->
		<a href="javascript:void(0);" onclick="$('#info-dialog').dialog({ modal: true });"><span class="btn-info"></span></a>
		
			<!-- Modal Box Content -->
			<div id="info-dialog" title="About" style="display: none;">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div> <!--! end of #info-dialog -->
		
		<!-- Begin from Toolbox -->
		<ul class="toolbox-header">
			<!-- First entry -->
			<li>
				<a rel="tooltip" title="Create a User" class="toolbox-action" href="javascript:void(0);"><span class="i-24-user-business"></span></a>
				<div class="toolbox-content">
					
					<!-- Box -->
					<div class="block-border">
						<div class="block-header small">
							<h1>Create a User</h1>
						</div>
						<form id="create-user-form" class="block-content form" action="" method="post">
							<div class="_100">
								<p><label for="username">Username</label><input id="username" name="username" class="required" type="text" value="" /></p>
							</div>
							<div class="_50">
								<p class="no-top-margin"><label for="firstname">Firstname</label><input id="firstname" name="firstname" class="required" type="text" value="" /></p>
							</div>
							<div class="_50">
								<p class="no-top-margin"><label for="lastname">Lastname</label><input id="lastname" name="lastname" class="required" type="text" value="" /></p>
							</div>
							<div class="clear"></div>
							
							<!-- Buttons with actionbar  -->
							<div class="block-actions">
								<ul class="actions-left">
									<li><a class="close-toolbox button red" id="reset" href="javascript:void(0);">Cancel</a></li>
								</ul>
								<ul class="actions-right">
									<li><input type="submit" class="button" value="Create the User"></li>
								</ul>
							</div> <!--! end of #block-actions -->
						</form>
					</div> <!--! end of box -->
					
				</div>
			</li> <!--! end of first entry -->
			
			<!-- Second entry -->
			<li>
				<a rel="tooltip" title="Write a Message" class="toolbox-action" href="javascript:void(0);"><span class="i-24-inbox-document"></span></a>
				<div class="toolbox-content">
					
					<!-- Box -->
					<div class="block-border">
						<div class="block-header small">
							<h1>Write a Message</h1>
						</div>
						<form id="write-message-form" class="block-content form" action="" method="post">							
							<p class="inline-mini-label">
								<label for="recipient">Recipient</label>
								<input type="text" name="recipient" class="required">
							</p>
							<p class="inline-mini-label">
								<label for="subject">Subject</label>
								<input type="text" name="subject">
							</p>
							<div class="_100">
								<p class="no-top-margin"><label for="message">Message</label><textarea id="message" name="message" class="required" rows="5" cols="40"></textarea></p>
							</div>
							
							<div class="clear"></div>
							
							<!-- Buttons with actionbar  -->
							<div class="block-actions">
								<ul class="actions-left">
									<li><a class="close-toolbox button red" id="reset2" href="javascript:void(0);">Cancel</a></li>
								</ul>
								<ul class="actions-right">
									<li><input type="submit" class="button" value="Send Message"></li>
								</ul>
							</div> <!--! end of #block-actions -->
						</form>
					</div> <!--! end of box -->
					
				</div>
			</li> <!--! end of second entry -->
			
			<!-- Third entry -->
			<li>
				<a rel="tooltip" title="Create a Folder" class="toolbox-action" href="javascript:void(0);"><span class="i-24-folder-horizontal-open"></span></a>
				<div class="toolbox-content">
					
					<!-- Box -->
					<div class="block-border">
						<div class="block-header small">
							<h1>Create a Folder</h1>
						</div>
						<form id="create-folder-form" class="block-content form" action="" method="post">
							<p class="inline-mini-label">
								<label for="folder-name">Name</label>
								<input type="text" name="folder-name" class="required">
							</p>
							
							<!-- Buttons with actionbar  -->
							<div class="block-actions">
								<ul class="actions-left">
									<li><a class="close-toolbox button red" id="reset3" href="javascript:void(0);">Cancel</a></li>
								</ul>
								<ul class="actions-right">
									<li><input type="submit" class="button" value="Create Folder"></li>
								</ul>
							</div> <!--! end of #block-actions -->
						</form>
					</div> <!--! end of box -->
					
				</div>
			</li> <!--! end of third entry -->
		</ul>
		
		<!-- Begin of #user-info -->
		<div id="user-info">
			<p>
				<span class="messages">Xin chào, <a href="javascript:void(0);"><?=$this->session->userdata('account_info')['full_name']?></a> ( <a href="javascript:void(0);"><img src="<?=backend_img_url()?>/icons/packs/fugue/16x16/mail.png" alt="Messages"> 1 tin mới</a> )</span>
				<a href="javascript:void(0)" class="toolbox-action button">Cài đặt</a> <a href="<?=base_url()?>backend/login/logout" class="button red">Thoát</a>
			</p>
		</div> <!--! end of #user-info -->
		
    </header></div> <!--! end of #header -->
    
    <div class="fix-shadow-bottom-height"></div>
	
	<!-- Begin of Sidebar -->
    <aside id="sidebar">
    	
    	<!-- Search -->
    	<div id="search-bar">
			<form id="search-form" name="search-form" action="search.php" method="post">
				<input type="text" id="query" name="query" value="" autocomplete="off" placeholder="Search">
			</form>
		</div> <!--! end of #search-bar -->
		
		<!-- Begin of #login-details -->
		<section id="login-details">
    		<img class="img-left framed" src="<?=backend_img_url()?>/misc/avatar_small.png" alt="Hello Admin">
    		<h3>Đăng nhập bởi :</h3>
    		<h2><a class="user-button" href="javascript:void(0);"><?=$this->session->userdata('account_info')['full_name']?>&nbsp;<span class="arrow-link-down"></span></a></h2>
    		<ul class="dropdown-username-menu">
    			<li><a href="#">Profile</a></li>
    			<li><a href="#">Settings</a></li>
    			<li><a href="#">Messages</a></li>
    			<li><a href="<?=base_url()?>backend/login/logout">Thoát</a></li>
    		</ul>
    		
    		<div class="clearfix"></div>
  		</section> <!--! end of #login-details -->
    	
    	<!-- Begin of Navigation -->
    	<nav id="nav">
	    	<ul class="menu collapsible shadow-bottom">
	    		<li><a href="dashboard.html"><img src="<?=backend_img_url()?>/icons/packs/fugue/16x16/dashboard.png">Dashboard<span class="badge">2</span></a></li>
	    		<li><a href="forms.html"><img src="<?=backend_img_url()?>/icons/packs/fugue/16x16/application-form.png">Forms</a></li>
	    		<li><a href="table.html"><img src="<?=backend_img_url()?>/icons/packs/fugue/16x16/table.png">Table</a></li>
	    		<li><a href="charts.html"><img src="<?=backend_img_url()?>/icons/packs/fugue/16x16/chart.png">Charts</a></li>
	    		<li class="expand">
	    			<a href="javascript:void(0);" class="current"><img src="<?=backend_img_url()?>/icons/packs/fugue/16x16/clipboard-list.png">Lists<span class="badge grey">3</span></a>
	    			<ul class="sub">
	    				<li><a href="list_block.html" class="current">Block Lists</a></li>
	    				<li><a href="list_shortcut.html">Shortcut List</a></li>
	    				<li><a href="list_contact.html">Contact List</a></li>
	    			</ul>
	    		</li>
	    		<li><a href="tabs.html"><img src="<?=backend_img_url()?>/icons/packs/fugue/16x16/ui-tab-content.png">Tabs</a></li>
	    		<li><a href="notifications.html"><img src="<?=backend_img_url()?>/icons/packs/fugue/16x16/application--exclamation.png">Notifications</a></li>
	    		<li><a href="alert_boxes.html"><img src="<?=backend_img_url()?>/icons/packs/fugue/16x16/balloons-box.png">Alert Boxes</a></li>
	    		<li><a href="tooltips.html"><img src="<?=backend_img_url()?>/icons/packs/fugue/16x16/ui-tooltip-balloon.png">Tooltips</a></li>
	    		<li><a href="404.html"><img src="<?=backend_img_url()?>/icons/packs/fugue/16x16/magnifier--exclamation.png">Error-Page (404)</a></li>
	    		<li><a href="login.html"><img src="<?=backend_img_url()?>/icons/packs/fugue/16x16/door-open-in.png">Login</a></li>
	    		<li>
	    			<a href="javascript:void(0);"><img src="<?=backend_img_url()?>/icons/packs/fugue/16x16/user-white.png">Example Submenu<span class="badge red">42</span></a>
	    			<ul class="sub">
	    				<li><a href="javascript:void(0);">Lorem ipsum #1</a></li>
	    				<li><a href="javascript:void(0);">Lorem ipsum #2</a></li>
	    				<li><a href="javascript:void(0);">Lorem ipsum #3</a></li>
	    			</ul>
	    		</li>
	    		<li>
	    			<a href="javascript:void(0);"><img src="<?=backend_img_url()?>/icons/packs/fugue/16x16/newspaper.png">Another Submenu</a>
	    			<ul class="sub">
	    				<li><a href="javascript:void(0);">Lorem ipsum</a></li>
	    				<li><a href="javascript:void(0);">Lorem ipsum</a></li>
	    				<li><a href="javascript:void(0);">Lorem ipsum</a></li>
	    				<li><a href="javascript:void(0);">Lorem ipsum</a></li>
	    				<li><a href="javascript:void(0);">Lorem ipsum</a></li>
	    			</ul>
	    		</li>
	    	</ul>
    	</nav> <!--! end of #nav -->
    	
    </aside> <!--! end of #sidebar -->