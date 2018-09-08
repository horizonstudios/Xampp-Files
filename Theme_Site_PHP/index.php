<!DOCTYPE html>
<html lang="eng">
<?php 
	include_once 'includes/head.php'; 
?>
	<body>
		<section id="body_sec">
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
		</section>
	</body>
</html>