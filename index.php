<?php include_once("userHeader.php") ?>

<body>
	<?php  include_once('navbar.php');?>
	<div class="body">
		<div>
			&nbsp
			<?php  include_once('carousel.html');?> &nbsp
		</div>

		<div class="container">
			<div class="row">
				<div class="col-md-2 col-sm-12">
					<?php include_once('newsSidebar.php'); ?>
				</div>
				<div class="col-md-8 col-sm-12">
					<div class="section">
						<div>
							<h2>Welcome to NBRO </h2>
							<p>more</p>
						</div>
						<div>
							<h2>Our services</h2>
							<div class="card" style="width: 10rem; background-color: #70ce40; padding: 1rem;color: white;">
								<div class="card-block">
									<h4 class="card-title">Service one</h4>
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									<a href="#" class="btn btn-primary">Go somewhere</a>
								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="col-md-2 col-sm-12">
					<?php include_once('resultSidebar.php'); ?>
				</div>
			</div>
		</div>

		<div class="home">
		</div>
	</div>
	<div class="footer">
		<div>
			<div>
				<h4>24 hour customer service</h4>
				<ul>
					<li class="phone-num">
						512-943-1069
						<br> 512-943-1068
					</li>
					<li class="email">
						<a href="#">info@WTPcom</a>
					</li>
					<li class="address">
						1341 Oakmound Drive
						<br> Chicago, IL 60609
					</li>
				</ul>
			</div>
			<div>
				<h4>Recent Tweets</h4>
				<ul>
					<li>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris fringilla elementum magna.
						</p>
						-
						<span>
							<a href="blog.html">1 day ago</a>
						</span>
					</li>
					<li>
						<p>
							Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
						</p>
						-
						<span>
							<a href="blog.html">2 days ago</a>
						</span>
					</li>
				</ul>
			</div>
		</div>
	</div>
</body>

</html>