<?php
include_once('userHeader.php');
include_once('./database/AdminOperations.php');
?>

<body>
	<?php  include_once('navbar.php');?> &nbsp
	<div class="body">
		<div class="container">
			<div class="row">
				<div class="col-md-2 col-sm-12">
					<?php include_once('newsSidebar.php'); ?>
				</div>
				<div class="col-md-8 col-sm-12">
					<div>
						<h2>About us</h2>
						<hr/>
					</div>
					<div>
						<h2>Objectives</h2>
						<hr/>
					</div>
					<div>
						<h2>Our staff</h2>
						<table class="table table-hover">
							<thead>
								<tr>
									<th scope="col">Staff</th>
									<th scope="col">Image</th>
								</tr>
								<?php
                    $result = getAllStaff();
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
    
                ?>
									<tr>
										<td>
											<b>
											<?php  echo $row["name"]?>
											</b>
											<br/>
											<?php  echo $row["post"]?>
											<br/>
											<?php  echo $row["telephone"]?>
											<br/>
											<?php  echo $row["address"]?>
										</td>
										<td>
											<img width="50%" height="50%" border="0" onerror="this.src='./images/noImage.jpg'" src=<?php echo $row[ "image"]?> alt="image">
										</td>

									</tr>
									<?php }
                    }
						mysqli_free_result($result);
						mysqli_next_result($GLOBALS['db']);
                        ?>
							</thead>
							<tbody>
							</tbody>
						</table>

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