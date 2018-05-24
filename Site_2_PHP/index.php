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
					if(isset($_GET['contact'])){
						include 'includes/contact.php';
					}else if(isset($_GET['creations'])){
						include 'includes/creations.php';
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
	