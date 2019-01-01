<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.uideck.com/items/thehunt/login.html by HTTrack Website Copier/3.x [XR&CO'2010], Wed, 21 Nov 2018 08:11:21 GMT -->
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="author" content="Grayrids">
<title>TheHunt - Bootstrap HTML5 Job Portal Template</title>

<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/line-icons.css">
<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/owl.theme.default.css">
<link rel="stylesheet" href="assets/css/slicknav.min.css">
<link rel="stylesheet" href="assets/css/animate.css">
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>

<header id="home" class="hero-area">

<nav class="navbar navbar-expand-lg fixed-top scrolling-navbar">
<div class="container">
<div class="theme-header clearfix">

<div class="navbar-header">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
<span class="lni-menu"></span>
<span class="lni-menu"></span>
<span class="lni-menu"></span>
</button>
<a href="index-2.html" class="navbar-brand"><img src="assets/img/logo.png" alt=""></a>
</div>
<div class="collapse navbar-collapse" id="main-navbar">
<ul class="navbar-nav mr-auto w-100 justify-content-end">
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Home
</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="index-2.html">Home 1</a></li>
<li><a class="dropdown-item" href="index-3.html">Home 2</a></li>
</ul>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Pages
</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="about.html">About</a></li>
<li><a class="dropdown-item" href="job-page.html">Job Page</a></li>
<li><a class="dropdown-item" href="job-details.html">Job Details</a></li>
<li><a class="dropdown-item" href="resume.html">Resume Page</a></li>
<li><a class="dropdown-item" href="privacy-policy.html">Privacy Policy</a></li>
<li><a class="dropdown-item" href="faq.html">FAQ</a></li>
<li><a class="dropdown-item" href="pricing.html">Pricing Tables</a></li>
<li><a class="dropdown-item" href="contact.html">Contact</a></li>
</ul>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Candidates
</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="browse-jobs.html">Browse Jobs</a></li>
<li><a class="dropdown-item" href="browse-categories.html">Browse Categories</a></li>
<li><a class="dropdown-item" href="add-resume.html">Add Resume</a></li>
<li><a class="dropdown-item" href="manage-resumes.html">Manage Resumes</a></li>
<li><a class="dropdown-item" href="job-alerts.html">Job Alerts</a></li>
</ul>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Employers
</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="post-job.html">Add Job</a></li>
<li><a class="dropdown-item" href="manage-jobs.html">Manage Jobs</a></li>
<li><a class="dropdown-item" href="manage-applications.html">Manage Applications</a></li>
<li><a class="dropdown-item" href="browse-resumes.html">Browse Resumes</a></li>
</ul>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Blog
</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="blog.html">Blog - Right Sidebar</a></li>
<li><a class="dropdown-item" href="blog-left-sidebar.html">Blog - Left Sidebar</a></li>
<li><a class="dropdown-item" href="blog-full-width.html"> Blog full width</a></li>
<li><a class="dropdown-item" href="single-post.html">Blog Single Post</a></li>
</ul>
</li>
<li class="nav-item">
<a class="nav-link" href="contact.html">
Contact
</a>
</li>
<li class="nav-item active">
<a class="nav-link" href="login.html">Sign In</a>
</li>
<li class="button-group">
<a href="post-job.html" class="button btn btn-common">Post a Job</a>
</li>
</ul>
</div>
</div>
</div>
<div class="mobile-menu" data-logo="assets/img/logo-mobile.png"></div>
</nav>

</header>


<div class="page-header">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="inner-header">
<h3>Login</h3>
</div>
</div>
</div>
</div>
</div>


<section id="content" class="section-padding">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-5 col-md-6 col-xs-12">
<div class="page-login-form box">
<h3>
Login
</h3>
<form class="login-form" action="login_post" method="post">
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
<div class="form-group">
<div class="input-icon">
<i class="lni-user"></i>
<input type="text" id="sender-email" class="form-control" name="username" placeholder="Username">
</div>
</div>
<div class="form-group">
<div class="input-icon">
<i class="lni-lock"></i>
<input type="password" class="form-control" name="password" placeholder="Password">
</div>
</div>
<div class="form-group form-check">
<input type="checkbox" class="form-check-input" id="exampleCheck1">
<label class="form-check-label" for="exampleCheck1">Keep Me Signed In</label>
 </div>
<button class="btn btn-common log-btn">Submit</button>
</form>
<ul class="form-links">
<li class="text-center"><a href="signup">Don't have an account?</a></li>
</ul>
</div>
</div>
</div>
</div>
</section>


<footer>

<section class="footer-Content">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-3 col-xs-12">
<div class="widget">
<div class="footer-logo"><img src="assets/img/logo-footer.png" alt=""></div>
<div class="textwidget">
<p>Sed consequat sapien faus quam bibendum convallis quis in nulla. Pellentesque volutpat odio eget diam cursus semper.</p>
</div>
</div>
</div>
<div class="col-lg-6 col-md-4 col-xs-12">
<div class="widget">
<h3 class="block-title">Quick Links</h3>
<ul class="menu">
<li><a href="#">About Us</a></li>
<li><a href="#">Support</a></li>
<li><a href="#">License</a></li>
<li><a href="#">Contact</a></li>
</ul>
<ul class="menu">
<li><a href="#">Terms & Conditions</a></li>
<li><a href="#">Privacy</a></li>
<li><a href="#">Refferal Terms</a></li>
<li><a href="#">Product License</a></li>
</ul>
</div>
</div>
<div class="col-lg-3 col-md-4 col-xs-12">
<div class="widget">
<h3 class="block-title">Subscribe Now</h3>
<p>Sed consequat sapien faus quam bibendum convallis.</p>
<form method="post" id="subscribe-form" name="subscribe-form" class="validate">
<div class="form-group is-empty">
<input type="email" value="" name="Email" class="form-control" id="EMAIL" placeholder="Enter Email..." required="">
<button type="submit" name="subscribe" id="subscribes" class="btn btn-common sub-btn"><i class="lni-envelope"></i></button>
<div class="clearfix"></div>
</div>
</form>
<ul class="mt-3 footer-social">
<li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a></li>
<li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>
<li><a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a></li>
<li><a class="google-plus" href="#"><i class="lni-google-plus"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</section>


<div id="copyright">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="site-info text-center">
<p>Designed and Developed by <a href="https://uideck.com/" rel="nofollow">UIdeck</a></p>
</div>
</div>
</div>
</div>
</div>

</footer>


<a href="#" class="back-to-top">
<i class="lni-arrow-up"></i>
</a>

<div id="preloader">
<div class="loader" id="loader-1"></div>
</div>


<script src="assets/js/jquery-min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
 <script src="assets/js/color-switcher.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.slicknav.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/form-validator.min.js"></script>
<script src="assets/js/contact-form-script.js"></script>
<script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from preview.uideck.com/items/thehunt/login.html by HTTrack Website Copier/3.x [XR&CO'2010], Wed, 21 Nov 2018 08:11:21 GMT -->
</html>