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
				var brand = document.getElementById('branding');
				var ypos = window.pageYOffset;
				
				if(ypos > 99) {
					top.style.backgroundColor = "#8EA4D2";
					brand.style.margin = "2px 0 0 20px";
					brand.style.fontSize = "0.8em";
					top.style.height ="40px";
					top.style.borderBottom = "#ffffff 1px solid";
				}else {
					top.style.backgroundColor = "rgba(255, 255, 255, 0)";
					brand.style.margin = "20px 0 0 50px";
					brand.style.fontSize = "1.5em";
					top.style.height ="60px";
					top.style.borderBottom = "0px";
				}
				}
				window.addEventListener("scroll",Scroll);
				function SeeMore() {
				window.scrollTo(0, 0);
				window.scrollBy(0, 920);
				}
			</script>
		</body>
	</div>
</html>
	