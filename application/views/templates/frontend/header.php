<header>
	<div id="header3" class="header3-area">
		<div class="header-top-area">
			<div class="container">
				<div class="top-bar-border">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="header-top-left">
								<ul>
									<li><i class="fa fa-phone" aria-hidden="true"></i><a href="Tel:+1234567890"> + 123
											456 78910 </a></li>
									<li><i class="fa fa-envelope" aria-hidden="true"></i><a
											href="#">info@academics.com</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="header-top-right">
								<ul>
									<li>
										<a class="login-btn-area" href="#" id="login-button"><i class="fa fa-lock"
												aria-hidden="true"></i> Login</a>
										<div class="login-form" id="login-form" style="display: none;">
											<div class="title-default-left-bold">Login</div>
											<form action="<?php echo base_url('Login/do_login'); ?>" method="POST">
												<label>Username or email address *</label>
												<input type="text" name="username" class="form-control" required
													placeholder="username" />
												<label>Password *</label>
												<input type="password" name="password" class="form-control" required
													placeholder="Password" />
												<label class="check">Lost your password?</label>
												<span><input type="checkbox" name="remember" />Remember Me</span>
												<button class="default-big-btn" type="submit"
													value="Login">Login</button>
												<button class="default-big-btn" type="submit" value="">Cancel</button>
											</form>
										</div>
									</li>
									<li>
										<div class="apply-btn-area">
											<a href="<?= base_url('pendaftaran/Registrasi') ?>"
												class="apply-now-btn">Registration</a>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="main-menu-area" id="sticker">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-sm-3">
						<div class="logo-area">
							<a href="index.html"><img class="img-responsive"
									src="<?= base_url() ?>assets/frontend/img/situbel.png" alt="logo"></a>
						</div>
					</div>
					<div class="col-lg-9 col-md-9 col-sm-9">
						<nav id="desktop-nav">
							<ul>
								<li class="active"><a href="#">Home</a>
									<ul>
										<li><a href="index.html">Home 1</a></li>
										<li><a href="index2.html">Home 2</a></li>
										<li class="active"><a href="index3.html">Home 3</a></li>
										<li><a href="index4.html">Home 4</a></li>
									</ul>
								</li>
								<li><a href="#">Pages</a>
									<ul class="mega-menu-area">
										<li>
											<a href="about1.html">About 1</a>
											<a href="about2.html">About 2</a>
											<a href="about3.html">About 3</a>
											<a href="about4.html">About 4</a>
										</li>
										<li>
											<a href="lecturers1.html">lecturers 1</a>
											<a href="lecturers2.html">lecturers 2</a>
											<a href="single-lecturers.html">lecturers Details</a>
											<a href="pricing1.html">Pricing Plan 1</a>
										</li>
										<li>
											<a href="pricing2.html">Pricing Plan 2</a>
											<a href="shop1.html">Shop 1</a>
											<a href="shop2.html">Shop 2</a>
											<a href="single-shop.html">Shop Details</a>
										</li>
										<li>
											<a href="account.html">Account</a>
											<a href="registration.html">Registration</a>
											<a href="faq.html">Faq</a>
											<a href="404.html">404 Error</a>
										</li>
									</ul>
								</li>
								<li><a href="#">Courses</a>
									<ul>
										<li><a href="courses1.html">Courses 1</a></li>
										<li><a href="courses2.html">Courses 2</a></li>
										<li><a href="courses3.html">Courses 3</a></li>
										<li><a href="single-courses1.html">Course Details 1</a></li>
										<li><a href="single-courses2.html">Course Details 2</a></li>
										<li><a href="single-courses3.html">Course Details 3</a></li>
									</ul>
								</li>
								<li><a href="#">Research</a>
									<ul>
										<li><a href="research1.html">Research 1</a></li>
										<li><a href="research2.html">Research 2</a></li>
										<li><a href="research3.html">Research 3</a></li>
										<li><a href="single-research.html">Research Details</a></li>
									</ul>
								</li>
								<li><a href="#">News</a>
									<ul>
										<li class="has-child-menu"><a href="#">News</a>
											<ul class="thired-level">
												<li><a href="news1.html">News 1</a></li>
												<li><a href="news2.html">News 2</a></li>
												<li><a href="single-news.html">News Details</a></li>
											</ul>
										</li>
										<li class="has-child-menu"><a href="#">Event</a>
											<ul class="thired-level">
												<li><a href="event.html">Event</a></li>
												<li><a href="single-event.html">Event Details</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li><a href="#">Gallery</a>
									<ul>
										<li><a href="gallery1.html">Gallery 1</a></li>
										<li><a href="gallery2.html">Gallery 2</a></li>
									</ul>
								</li>
								<li><a href="#">Contact</a>
									<ul>
										<li><a href="contact1.html">Contact 1</a></li>
										<li><a href="contact2.html">Contact 2</a></li>
									</ul>
								</li>
							</ul>
						</nav>
					</div>
					<div class="col-lg-1 col-md-1 hidden-sm">
						<div class="header-search">
							<form>
								<input type="text" class="search-form" placeholder="Search...." required="">
								<a href="#" class="search-button" id="search-button"><i class="fa fa-search"
										aria-hidden="true"></i></a>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Mobile Menu Area Start -->
	<div class="mobile-menu-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="mobile-menu">
						<nav id="dropdown">
							<ul>
								<li><a href="#">Home</a>
									<ul>
										<li><a href="index.html">Home 1</a></li>
										<li><a href="index2.html">Home 2</a></li>
										<li><a href="index3.html">Home 3</a></li>
										<li><a href="index4.html">Home 4</a></li>
									</ul>
								</li>
								<li><a href="#">Pages</a>
									<ul>
										<li><a href="about1.html">About 1</a></li>
										<li><a href="about2.html">About 2</a></li>
										<li><a href="about3.html">About 3</a></li>
										<li><a href="about4.html">About 4</a></li>
										<li><a href="lecturers1.html">lecturers 1</a></li>
										<li><a href="lecturers2.html">lecturers 2</a></li>
										<li><a href="single-lecturers.html">lecturers Details</a></li>
										<li><a href="pricing1.html">Pricing Plan 1</a></li>
										<li><a href="pricing2.html">Pricing Plan 2</a></li>
										<li><a href="shop1.html">Shop 1</a></li>
										<li><a href="shop2.html">Shop 2</a></li>
										<li><a href="single-shop.html">Shop Details</a></li>
										<li><a href="account.html">Account</a></li>
										<li><a href="registration.html">Registration</a></li>
										<li><a href="faq.html">Faq</a></li>
										<li><a href="404.html">404 Error</a></li>
									</ul>
								</li>
								<li><a href="#">Courses</a>
									<ul>
										<li><a href="courses1.html">Courses 1</a></li>
										<li><a href="courses2.html">Courses 2</a></li>
										<li><a href="courses3.html">Courses 3</a></li>
										<li><a href="single-courses1.html">Course Details 1</a></li>
										<li><a href="single-courses2.html">Course Details 2</a></li>
										<li><a href="single-courses3.html">Course Details 3</a></li>
									</ul>
								</li>
								<li><a href="#">Research</a>
									<ul>
										<li><a href="research1.html">Research 1</a></li>
										<li><a href="research2.html">Research 2</a></li>
										<li><a href="research3.html">Research 3</a></li>
										<li><a href="single-research.html">Research Details</a></li>
									</ul>
								</li>
								<li><a href="#">News</a>
									<ul>
										<li class="has-child-menu"><a href="#">News</a>
											<ul class="thired-level">
												<li><a href="news1.html">News 1</a></li>
												<li><a href="news2.html">News 2</a></li>
												<li><a href="single-news.html">News Details</a></li>
											</ul>
										</li>
										<li class="has-child-menu"><a href="#">Event</a>
											<ul class="thired-level">
												<li><a href="event.html">Event</a></li>
												<li><a href="single-event.html">Event Details</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li><a href="#">Gallery</a>
									<ul>
										<li><a href="gallery1.html">Gallery 1</a></li>
										<li><a href="gallery2.html">Gallery 2</a></li>
									</ul>
								</li>
								<li><a href="#">Contact</a>
									<ul>
										<li><a href="contact1.html">Contact 1</a></li>
										<li><a href="contact2.html">Contact 2</a></li>
									</ul>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Mobile Menu Area End -->
</header>
