	<!-- Page loader -->
	<div id="preloader"></div>
<!-- header section start -->
<header class="header">
			<div class="container">
				<div class="row flexbox-center">
					<div class="col-lg-2 col-md-3 col-6">
						<div class="logo">
							<a href="<?php echo action("MainController@home"); ?>"><img src="assets/img/logo2.png" alt="logo" /></a>
						</div>
					</div>
					<div class="col-lg-10 col-md-9 col-6">
						<div class="responsive-menu"></div>
					    <div class="mainmenu">
                            <ul id="primary-menu">
                                <li><a class="nav-link active" href="<?php echo action("MainController@home"); ?>">Home</a></li>
                                <li><a class="nav-link" href="<?php echo action("MainController@valores"); ?>">valores</a></li>
                                <li><a class="nav-link" href="<?php echo action("MainController@about"); ?>">sobre</a></li>
                                <li><a class="nav-link" href="<?php echo action("MainController@contact"); ?>">Contact Us</a></li>
                                <li><a class="appao-btn" href="#">Download</a></li>
                            </ul>
					    </div>
					</div>
				</div>
			</div>
		</header>
  <!-- header section end -->