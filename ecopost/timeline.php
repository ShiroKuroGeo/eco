<!DOCTYPE html>
<html lang="en">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>Timeline</title>
<!--     <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16"> 
 -->    
    <link rel="stylesheet" href="css/main.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Update Profile</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		
        <form action="../functions/changeProfile.php" method="post" enctype="multipart/form-data">
          Select image to upload:
		  
          <input type="file" name="Profilephoto" id="Profilephoto" class="form-control">
          <input type="submit" class="form-control bg-primary mt-3" value="Update Profile" id="btnChangeProfile" name="submit">
        </form>
      </div>
    </div>
  </div>
  </div>
</div>
	
	<div class="topbar stick">
		<div class="logo">
			<a title="" href="newsfeed.html"><img src="images/logo.png" alt=""></a>
		</div>
		
		<div class="top-area mt-3">
			
			<ul class="setting-area mt-3">
				<li>
					<a href="#" title="Home" data-ripple=""><i class="ti-search"></i></a>
					<div class="searched">
						<form method="post" class="form-search">
							<input type="text" placeholder="Search Friend">
							<button data-ripple><i class="ti-search"></i></button>
						</form>
					</div>
				</li>
				<li>
					<a href="#" title="Messages" data-ripple=""><i class="ti-comment"></i></a>
				</li>
			
		</div>
	</div><!-- topbar -->	
		
	<section>
		<div class="feature-photo">
			<figure >
				<img src="image/background.jpg"alt="">
			</figure>
		
			<form class="edit-phto">
				<i class="fa fa-camera-retro"></i>
				<label class="fileContainer">
					Edit Cover Photo
				<input type="file"/>
				</label>
			</form>
			<div class="container-fluid">
				<div class="row merged">
					<div class="col-lg-2 col-sm-3">
						<div class="user-avatar">
							<figure class="profile">
								<div class="changeProfile">
									
								</div>
								<form method="post" enctype="multipart/form-data"class="edit-phto">
									<i class="fa fa-camera-retro"></i>
									<label class="fileContainer">
										Edit Profile Photo
										<button type="button" class="btn btn-tertiary" data-bs-toggle="modal" data-bs-target="#exampleModal">
											<span class="navbar-toggler-icon"></span>
										</button>
									</label>
								</form>
							</figure>
						</div>
					</div>
					<div class="col-lg-10 col-sm-9">
						<div class="timeline-info">
							<ul>
								<li class="admin-name">
								  <h5 id="profName"></h5>
							</li>
								<li>
									<a class="active" href="time-line.html" title="" data-ripple="">time line</a>
									<a class="" href="timeline-photos.html" title="" data-ripple="">Photos</a>
									<a class="" href="timeline-videos.html" title="" data-ripple="">Videos</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- top area -->
		
	<section>
		<div class="gap gray-bg">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="row" id="page-contents">
							<div class="col-lg-3">
								<aside class="sidebar static">
									<div class="widget">
										<h4 class="widget-title">Shortcuts</h4>
										<ul class="naves">
											<li>
												<a href="index.php" title=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
  <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
</svg>Home</a>
											</li>
									
											<li> 
												<div class="">
													<div class="text-center" id="linkMessage"></div>
													<div class="input-group input-group-sm">
												<i class="ti-comments-smiley"></i>
														<input type="url" name="updateLinkMessage" class="form-control" id="updateLinkMessage" placeholder="Change Message Link">
														<button type="button" class="btn btn-info col-4 btn-sm" id="btnSaveLink">Save Link</button>
													</div>
												</div>
												<div id="messageLink">

												</div>
											</li>
										
											<li>
												<i class="ti-power-off"></i>
												<a href="landing.html" title="">Logout</a>
											</li>
										</ul>
									</div>
								
								</aside>
							</div><!-- sidebar -->
							<div class="col-lg-6">
								<div class="central-meta">
									<div class="new-postbox">
										<figure>
											<!-- <img src="images/resources/admin2.jpg" alt=""> -->
										</figure>
										<div class="newpst-input">
											<form action="../functions/changePicture.php" method="post" enctype="multipart/form-data">
												<textarea rows="2" id="description" placeholder="write something"></textarea>
												<div class="attachments">
													<ul>
														<li>
															<i class="fa fa-image"></i>
															<label class="fileContainer">
																<input type="file" name="photo" id="photo">
															</label>
														</li>
														<li>
															<i class="fa fa-video-camera"></i>
															<label class="fileContainer">
																<input type="file"name="videos" id="videos">
															</label>
														</li>
														<li>
															<button type="submit"  id="btnPost" name="submit">Post</button>
														</li>
													</ul>
												</div>
											</form>
										</div>
									</div>

								</div><!-- add post new box -->
								
									
								<div class="loadMore">
									 <div class="central-meta item"id="mgaPostTime">
									</div>
								</div>
							</div><!-- centerl meta -->


							<div class="col-lg-3">
								<aside class="sidebar static">
								<div class="widget">
											<h4 class="widget-title">Socials</h4>
											<ul class="socials">
												<li class="facebook">
													<a title="" href="#"><i class="fa fa-facebook"></i> <span>facebook</span> </a>
												</li>
												<li class="twitter">
													<a title="" href="#"><i class="fa fa-twitter"></i> <span>twitter</span</a>
												</li>
												<li class="google">
													<a title="" href="#"><i class="fa fa-google"></i> <span>google</span></a>
												</li>
											</ul>
										</div>

									<div class="widget">
										<div class="banner medium-opacity bluesh">
											<div style="background-image: url(images/resources/baner-widgetbg.jpg)" class="bg-image"></div>
											<div class="baner-top">
												<span><img src="images/book-icon.png" alt=""></span>
												<i class="fa fa-ellipsis-h"></i>
											</div>
											<div class="banermeta">
												<p>
													Visit My shop <span>drecute</span>.
												</p>
											<a href="#" title="" data-ripple="">View Shop</a>
											</div>
										</div>											
									</div>
								
								</aside>
							</div><!-- sidebar -->
						</div>	
					</div>
				</div>
			</div>
		</div>	
	</section>

				</div>
	
	<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/main.min.js"></script>
	<script src="js/script.js"></script>
	                     
	
	<script src="../includes/script.js"></script>
  <script src="../javaScript/jquery.js"></script>
  <script src="../javaScript/ecoPost.js"></script>
  <script src="../javaScript/searchUser.js"></script>
  <script src="../javaScript/userInformation.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>	

</html>