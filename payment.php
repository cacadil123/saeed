
<?php include("includes/dashnav1.php"); ?>

<section class="payment">
	<div class="container">
		<div class="row">
			<div class="col-md-6 order-sm-last order-last order-md-first order-lg-first">
				<h2 class="">Enter Your Payment Details</h2>
				<ul class="tabs">
					<li class="tab-link current" data-tab="tab-1">
						<img src="images/mastercard.png">
						<img src="images/check-b.png" class="check-b">
					</li>
					<li class="tab-link" data-tab="tab-2">
						<img src="images/visa.png">
						<img src="images/check-b.png" class="check-b">
					</li>
					<li class="tab-link" data-tab="tab-3">
						<img src="images/paypal.png">
						<img src="images/check-b.png" class="check-b">
					</li>
				</ul>

				<div id="tab-1" class="tab-content current">
					<form>
					  <div class="form-group">
					    <input type="text" class="form-control" id="" placeholder="Name on card master">
					  </div>
					  <div class="form-group">
					    <input type="text" class="form-control" id="" placeholder="Card Number">
					  </div>
					  <div class="form-row">
					    <div class="form-group col-md-4 col-sm-6 col-6">
					      <input type="text" class="form-control" id="" placeholder="Month">
					    </div>
					    <div class="form-group col-md-4 col-sm-6 col-6">
					      <input type="text" class="form-control" id="" placeholder="Year">
					    </div>
					    <div class="form-group col-md-4 col-sm-6 col-6">
					      <div class="input-group mb-2">
					          <input type="text" class="form-control" id="" placeholder="CVV">
					      	<div class="input-group-prepend">
					          <div class="input-group-text">
					          	<img src="images/credit-card.png">
					          </div>
					        </div>
					      </div>
					    </div>

					  </div>
					 
					</form>
				</div>
				<div id="tab-2" class="tab-content">
					 <form>
					  <div class="form-group">
					    <input type="text" class="form-control" id="" placeholder="Name on card visa">
					  </div>
					  <div class="form-group">
					    <input type="text" class="form-control" id="" placeholder="Card Number">
					  </div>
					  <div class="form-row">
					    <div class="form-group col-md-4 col-sm-6 col-6">
					      <input type="text" class="form-control" id="" placeholder="Month">
					    </div>
					    <div class="form-group col-md-4 col-sm-6 col-6">
					      <input type="text" class="form-control" id="" placeholder="Year">
					    </div>
					    <div class="form-group col-md-4 col-sm-6 col-6">
					      <div class="input-group mb-2">
					          <input type="text" class="form-control" id="" placeholder="CVV">
					      	<div class="input-group-prepend">
					          <div class="input-group-text">
					          	<img src="images/credit-card.png">
					          </div>
					        </div>
					      </div>
					    </div>

					  </div>
					 
					</form>
				</div>
				<div id="tab-3" class="tab-content">
					<form>
					  <div class="form-group">
					    <input type="text" class="form-control" id="" placeholder="Name on card paypal">
					  </div>
					  <div class="form-group">
					    <input type="text" class="form-control" id="" placeholder="Card Number">
					  </div>
					  <div class="form-row">
					    <div class="form-group col-md-4 col-sm-6 col-6">
					      <input type="text" class="form-control" id="" placeholder="Month">
					    </div>
					    <div class="form-group col-md-4 col-sm-6 col-6">
					      <input type="text" class="form-control" id="" placeholder="Year">
					    </div>
					    <div class="form-group col-md-4 col-sm-6 col-6">
					      <div class="input-group mb-2">
					          <input type="text" class="form-control" id="" placeholder="CVV">
					      	<div class="input-group-prepend">
					          <div class="input-group-text">
					          	<img src="images/credit-card.png">
					          </div>
					        </div>
					      </div>
					    </div>

					  </div>
					 
					</form>
				</div>
			</div>
			<div class="col-md-6">
				<h2 class="plan-txt">Plan & Inclusion</h2>
				<div class="payment-box">
					<h2 class="text-left">Business Plan</h2>
					<ul>
						<li>Custom Templates</li>
						<li>Store unlimited meetings data</li>
						<li>Complete access to our Template Library</li>
						<li>24/7 expedited email support</li>
					</ul>
					<hr>
					<div class="total-amount">
						<p>Total Amount:</p>
						<p>$17.99</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section6 next-back">
	<div class="container">
		<a href="#" class="btn btn-md pt-1 pb-2 btn-red font-weight-normal float-right">Confirm & Pay</a>
		<a href="#" class="btn btn-outline pt-2 btn-md btn-line font-weight-normal float-left">< BACK</a>
		
			
	</div>
</section>
<?php include("includes/footer.php"); ?>