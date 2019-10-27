<?php include("includes/header-without-design.php"); ?>
<style type="text/css">
.not-feedback{
	display: none !important;
}
</style>
<link href="assets/plugins/wizard/steps.css" rel="stylesheet">
<section class="feedback">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="logo">
					<img src="images/logo.png" class="">
				</div>
			</div>
			<div class="col">
				<a href="#" class="btn btn-dark btn-md btn-black">EXIT</a>
			</div>
		</div>
	</div>
</section>
<section class="feedback-first-page feedback-start">
	<div class="container">
		
		<div class="row">
            <div class="col-12">
                <div class="">
                    <div class="wizard-content ">
                        
                        <form action="#" class="tab-wizard wizard-circle wizard">
                            <!-- Step 1 -->
                            <h6></h6>
                            <section>
                                <h1>Were you happy with the topics discussed in meeting?</h1>
                                <ul class="radios">
							    <li>
							      <label>
							        <input  type="radio" name="size" />
							        <span>Very Sad</span>
							      </label>
							    </li>
							    <li>
							      <label>
							        <input type="radio" name="size" />
							        <span>Sad</span>
							      </label>
							    </li>
							    <li>
							      <label>
							        <input type="radio" name="size" />
							        <span>Average</span>
							      </label>
							    </li>
							    <li>
							      <label>
							        <input type="radio" name="size" />
							        <span>Happy</span>
							      </label>
							    </li>
							    <li>
							      <label>
							        <input type="radio" name="size" />
							        <span>Very Happy</span>
							      </label>
							    </li>
							  </ul>
                            </section>
                            <!-- Step 2 -->
                            <h6></h6>
                            <section>
                                <h1>Was the meeting relevant to the agenda decided earlier?</h1>
                                <ul class="radios">
							    <li>
							      <label>
							        <input type="radio" name="size" />
							        <span>Irrelevant</span>
							      </label>
							    </li>
							    <li>
							      <label>
							        <input type="radio" name="size" />
							        <span>Somewhat Relevant</span>
							      </label>
							    </li>
							    <li>
							      <label>
							        <input type="radio" name="size" />
							        <span>Totally Relevent</span>
							      </label>
							    </li>
							  </ul>
                            </section>
                            <!-- Step 3 -->
                            <h6></h6>
                            <section>
                                <h1>Were you happy with the length of the meeting?</h1>
                                <ul class="radios">
							    <li>
							      <label>
							        <input type="radio" name="size" />
							        <span>Very Sad</span>
							      </label>
							    </li>
							    <li>
							      <label>
							        <input type="radio" name="size" />
							        <span>Sad</span>
							      </label>
							    </li>
							    <li>
							      <label>
							        <input type="radio" name="size" />
							        <span>Average</span>
							      </label>
							    </li>
							    <li>
							      <label>
							        <input type="radio" name="size" />
							        <span>Happy</span>
							      </label>
							    </li>
							    <li>
							      <label>
							        <input type="radio" name="size" />
							        <span>Very Happy</span>
							      </label>
							    </li>
							  </ul>
                            </section>
                            <!-- Step 4 -->
                            <h6></h6>
                            <section>
                                <section>
                                <h1>How well the host managed the entire meeting scenario?</h1>
                                <ul class="radios">
							    <li>
							      <label>
							        <input type="radio" name="size" />
							        <span>Very Poorly</span>
							      </label>
							    </li>
							    <li>
							      <label>
							        <input type="radio" name="size" />
							        <span>Poorly</span>
							      </label>
							    </li>
							    <li>
							      <label>
							        <input type="radio" name="size" />
							        <span>Average</span>
							      </label>
							    </li>
							    <li>
							      <label>
							        <input type="radio" name="size" />
							        <span>Greatly</span>
							      </label>
							    </li>
							    <li>
							      <label>
							        <input type="radio" name="size" />
							        <span>Excellently</span>
							      </label>
							    </li>
							  </ul>
                            </section>
                            </section>
                        </form>

                    </div>
                </div>
            </div>
        </div>
	</div>
</section>
<?php include("includes/footer-without-design.php"); ?>
<script src="assets/plugins/wizard/jquery.steps.min.js"></script>
<script src="assets/plugins/wizard/jquery.validate.min.js"></script>
<script src="assets/plugins/wizard/steps.js"></script>