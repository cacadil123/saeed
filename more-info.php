<?php include("includes/header-without-design.php"); ?>
<section class="section-forget register-account more-info">
	<div class="container-fluid p-0">
		<div class="row no-gutters">
			<div class="col-md-7">
				<div class="bg-blue login-con">
					<img src="images/logo-white.png" class="logo-white">
					<div class="form-left-align">
						<div class="text-reg d-block">
							<h6 class="text-white strt">Hey Nick, <span class="text-lowercase">tell us more<br> about your business</span></h6>
						</div>
						<img src="images/more-info.png" class="img-form mx-auto d-lg-block d-md-block d-none">
					</div>
					
				</div>
			</div>
			<div class="col-md-5">
				<div class="form-main form-demo more-info-form">
					<form class="needs-validation" method="post" action="#" novalidate>
						<label class="custom-file-upload">
						    <input type="file" onchange="readURL(this);" />
						    <div>
						    	<img id="blah" src="images/upload.png" alt="your image" />
						    </div>
						    <span class="upload-txt">Upload Profile Image</span>
						    <span class="choose">Choose</span>
						</label>
	                      <div class="form-group">
	                         <input type="text" class="form-control" required placeholder="Company Name">
	                      </div>
	                      <div class="form-group">
	                         <input type="text" class="form-control" required placeholder="Business Type">
	                      </div>
	                      <div class="form-group">
	                      		<select class="form-control">
	                      			<option selected="selected">Designation</option>
	                      		</select>
	                      </div>
	                      <div class="row mycol">
						    <div class="col">
						      <input type="text" class="form-control" placeholder="Select City">
						    </div>
						    <div class="col">
						      <input type="text" class="form-control" placeholder="Zipcode">
						    </div>
						  </div>
	                      <div class="form-group">
	                         <input type="tel" class="form-control" required placeholder="Phone">
	                      </div>
	                      <button href="#" id="btn-search" type="submit" class="btn btn-outline btn-block btn-red btn-reg pt-2 pb-2" >Continue</button>
	                   
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