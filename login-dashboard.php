<?php include("includes/header-without-design.php"); ?>

<section class="section-forget">
	<div class="container-fluid p-0">
		<div class="row no-gutters">
			<div class="col-md-7">
				<div class="bg-blue login-con">
					<img src="images/logo-white.png" class="logo-white">
					<img src="images/form-image1.png" class="img-form mx-auto d-block">
				</div>
			</div>
			<div class="col-md-5">
				<div class="form-main form-demo">
					<h1 class="main-title pb-f ">Login to Dashboard</h1>
					<form method="post" action="#">
	                      <div class="form-group">
	                         <input type="email" class="form-control" placeholder="Email">
	                      </div>
	                      <div class="form-group">
	                         <input type="password" class="form-control" placeholder="Password">
	                      </div>
	                      
	                      <a href="#" class="btn btn-outline btn-md btn-demo mb-20">Login</a>
	                      
	                      <div class="login-stats">
	                      	<input type="checkbox" name="remember" ><span class="remember">Remember me</span>
	                      	<a href="#" class="f-pwd">Forget Password</a>
	                      <a href="#" class="accont">Don’t have an account yet? </a>
	                      <a href="#" class="login">Register</a>
	                      </div>
	                </form>
				</div>
			</div>
		</div>
		
	</div>
</section>

<?php include("includes/footer-without-design.php"); ?>