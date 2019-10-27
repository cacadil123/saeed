<?php include("includes/header-without-design.php"); ?>
<section class="section-forget register-account">
	<div class="container-fluid p-0">
		<div class="row no-gutters">
			<div class="col-md-7">
				<div class="bg-blue login-con">
					<img src="images/logo-white.png" class="logo-white">
					<div class="text-reg">
						<h6 class="text-white strt">Get started now</h6>
						<p class="text-white regi">Simplify the process of getting<br> feedback from your meeting</p>
					</div>
					<img src="images/form-image2.png" class="img-form mx-auto d-block">
					
				</div>
			</div>
			<div class="col-md-5">
				<div class="form-main form-demo">
					<h1 class="main-title pb-f">Register Account</h1>
					<form class="needs-validation" method="post" action="#" novalidate>
	                      <div class="form-group">
	                         <input type="text" class="form-control" required placeholder="Justin Green">
	                      </div>
	                      <div class="form-group">
	                         <input type="email" class="form-control" required placeholder="justin.g@email.com">
	                      </div>
	                      <div class="form-group">
	                         <input required type="password" class="form-control" placeholder="Password">
	                      </div>

	                      <div class="form-group">
	                         <input type="password" class="form-control" required placeholder="confirm Password">
	                      </div>
	                      <button href="#" id="btn-search" type="submit" class="btn btn-outline btn-md btn-demo btn-reg" >Register</button>
	                      <a href="#" class="accont">Already have an account? </a>
	                      <a href="#" class="login">Login</a>
	                </form>
				</div>
			</div>
		</div>
		
	</div>
</section>

<?php include("includes/footer-without-design.php"); ?>
<script type="text/javascript">
// Upon load..
window.addEventListener('load', () => {

  // Grab all the forms
  var forms = document.getElementsByClassName('needs-validation');
  
  // Iterate over each one
  for (let form of forms) {
  
    // Add a 'submit' event listener on each one
    form.addEventListener('submit', (evt) => {
    
      // check if the form input elements have the 'required' attribute  
      if (!form.checkValidity()) {
        evt.preventDefault();
        evt.stopPropagation();
        console.log('Bootstrap will handle incomplete form fields');
      } else {
        // Since form is now valid, prevent default behavior..
        evt.preventDefault();
        console.info('All form fields are now valid...');
      }
      
      form.classList.add('was-validated');
      
    });
    
  }
  
});
</script>