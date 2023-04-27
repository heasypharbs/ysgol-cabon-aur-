<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Ysgol Caban Aur </title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/aur-logo.jpg" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/aur-logo.jpg">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="../style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="../css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="../js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="host_version"> 

	


	
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="/">
					<img src="../images/yca.png" alt=""  height="80px" width="200px"/>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="/about">About Us</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Resources </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">                                
								<a class="dropdown-item" href="/guide"> Guides</a>
								<a class="dropdown-item" href="/teacher">Teacher</a>								
                                <a class="dropdown-item" href="/">Policies </a>
                                <a class="dropdown-item" href="/">Prospectus </a>
                                <a class="dropdown-item" href="/">FAQs </a>

							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="/events">News</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Activites</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
                                <a class="dropdown-item" href="/">Kayaking</a>
								<a class="dropdown-item" href="/">Biking</a>
								<a class="dropdown-item" href="/">Swimming</a>
								<a class="dropdown-item" href="/">Mountain Climbing</a>
                                <a class="dropdown-item" href="/">Outdoor STEAM </a>           
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="/classes">Classes</a></li>
						<li class="nav-item"><a class="nav-link" href="/contact">Contact </a></li>
						
					</ul>
					<?php if(!Auth::user()): ?>
					<ul class="nav navbar-nav navbar-right">
                        <li><a class="hover-btn-new log orange" href="/login" ><span>Login</span></a></li>
                    </ul>

					<?php else: ?>
					<ul class="nav navbar-nav navbar-right">
                        <li>\
							 <a class="hover-btn-new log orange" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
								<span>Logout</span>
						</a>    
						<form id="frm-logout" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
							<?php echo e(csrf_field()); ?>

						</form>
							
						</li>
                    </ul>
					<?php endif; ?>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	<?php echo $__env->yieldContent('content'); ?>





<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-xs-12">
				<div class="widget clearfix">
					<div class="widget-title">
						<h3>About US</h3>
					</div>
					
					<p> Ysgol Caban Aur (YCA) is an Independent School for children and young people placed in care of Afon Goch Children's Home Ltd.</p>   
					<div class="footer-right">
						<ul class="footer-links-soi">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-github"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						</ul><!-- end links -->
					</div>						
				</div><!-- end clearfix -->
			</div><!-- end col -->

			<div class="col-lg-4 col-md-4 col-xs-12">
				<div class="widget clearfix">
					<div class="widget-title">
						<h3>Quick Links</h3>
					</div>
					<ul class="footer-links">
						<li><a href="/">Home</a></li>
						<li><a href="/">Class</a></li>
						<li><a href="/">Event</a></li>
						<li><a href="/">About</a></li>
						<li><a href="">Contact</a></li>
					</ul><!-- end links -->
				</div><!-- end clearfix -->
			</div><!-- end col -->
			
			<div class="col-lg-4 col-md-4 col-xs-12">
				<div class="widget clearfix">
					<div class="widget-title">
						<h3>Contact Details</h3>
					</div>

					<ul class="footer-links">
						<li><a href="mailto:manager@cabanaur.co.uk">headteacher@ygsolcabanaur.co.uk/a></li>
						<li><a href="">wwww.ygsolcabanaur.co.uk</a></li>
						<li> LL76 8NX Llanbedrgoch, Anglesey, North Wales, United Kingdom </li>
						<li>+44 (0) 1248450087</li>
						
					</ul><!-- end links -->
				</div><!-- end clearfix -->
			</div><!-- end col -->
			
		</div><!-- end row -->
	</div><!-- end container -->
</footer><!-- end footer -->

<div class="copyrights">
	<div class="container">
		<div class="footer-distributed">
			<div class="footer-center">                   
				<p class="footer-company-name">All Rights Reserved. &copy; 2023 <a href="/">Ysgol Caban Aur</a> </p>
			</div>
		</div>
	</div><!-- end container -->
</div><!-- end copyrights -->

<a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

<!-- ALL JS FILES -->
<script src="js/all.js"></script>
<!-- ALL PLUGINS -->
<script src="js/custom.js"></script>
<script src="js/timeline.min.js"></script>
<script>
	timeline(document.querySelectorAll('.timeline'), {
		forceVerticalMode: 700,
		mode: 'horizontal',
		verticalStartPosition: 'left',
		visibleItems: 4
	});
</script>
</body>
</html><?php /**PATH C:\xampp\htdocs\aur\resources\views/layouts/appHome.blade.php ENDPATH**/ ?>