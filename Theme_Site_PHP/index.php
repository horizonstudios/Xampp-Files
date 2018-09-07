<!DOCTYPE html>
<html>
<?php 
	include_once 'includes/head.php'; 
?>
	<div id="body">
		<body>
			<div class="container">
				<?php 
					include_once 'includes/header.php'; 
				?>
				<?php
					if(isset($_GET['about'])){
						include 'includes/about.php';
					}else{
						include 'includes/home.php';
					}
				?>
				<?php 
					include_once 'includes/footer.php'; 
				?>
			</div>
		</body>
	</div>
</html>