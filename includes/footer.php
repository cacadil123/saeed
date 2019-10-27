<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<div class="widget1">
					<h3>GoodMeeting Today</h3>
					<p class="mt-2">Copyright 2019. GoodMeeting.today</p><br>
					<p>4397 Spruce Dr, Mayo,<br> Maryland 21106</p><br>
					<p><a href="">contact@goodmeeting.today</a></p>
					<p class="mt-2"><a href="">(557) 775 - 8411</a></p>
				</div>
			</div>      
			<div class="col-md-2">
				<div class="widget2">
					<h3>Products</h3>
					<ul>
						<li><a href="">Features</a></li>
						<li><a href="">Pricing</a></li>
						<li><a href="">How it Works</a></li>
						<li><a href="">Request a Demo</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-2">
				<div class="widget3">
					<h3>Support</h3>
					<ul>    
						<li><a href="">Blog</a></li>
						<li><a href="">FAQs</a></li>
						<li><a href="">Support</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3">
				<div class="widget4">
					<h3>Company</h3>
					<ul>    
						<li><a href="">About</a></li>
						<li><a href="">Privacy Policy</a></li>
						<li><a href="">Terms</a></li>
						<li><a href="">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>
<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="bootstrap/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="bootstrap/js/jquery.star-rating-svg.js"></script>
<script type="text/javascript" src="bootstrap/js/custom.js"></script>

</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
	
	$('ul.tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.tabs li').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	})

})
</script>