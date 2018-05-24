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
			<script type="text/javascript">
function Scroll(){
var top = document.getElementById('myHeader');
var ypos = window.pageYOffset;
if(ypos > 99) {
	top.style.backgroundColor = "blue";
}
else{
	top.style.backgroundColor = "rgba(255, 255, 255, 0)";
	}
}
	window.addEventListener("scroll",Scroll);

	</script>
		</body>
	</div>
</html>
	