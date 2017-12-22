<?php include_once("userHeader.php") ?>

<body>
    <?php  include_once('navbar.php');?>
    &nbsp
	<div class="body">
		<div>
			<?php  include_once('carousel.html');?> &nbsp
		</div>

		<div class="container">
			<div class="row">
				<div class="col-md-2 col-sm-12">
					<?php include_once('newsSidebar.php'); ?>
				</div>
				<div class="col-md-8 col-sm-12">
					<div class="section">
						content
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
    <div>
        <?php include_once('footer.php'); ?>
    </div>

</body>

</html>