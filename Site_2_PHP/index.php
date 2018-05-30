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
					}else
					if(isset($_GET['about'])){
						include 'includes/about.php';
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
				var sitenav = document.getElementById('sitenav');
				var brand = document.getElementById('branding');

				
				var navli = document.getElementsByClassName('navli');

				var highlight = document.getElementsByClassName('highlight');
				var current = document.getElementById('current');
				
				var ypos = window.pageYOffset;
				
				if(ypos > 99) {
					top.style.backgroundColor = "#8EA4D2";
					top.style.height ="40px";
					top.style.borderBottom = "#ffffff 1px solid";
					
					brand.style.margin = "2px 0 0 20px";
					brand.style.fontSize = "0.8em";

					sitenav.style.margin = "10px 100px 0 0";
					sitenav.style.fontSize = "1em";
					

					
					highlight.style.color = "#4E6B8D";
					current.style.color = "#4E6B8D";
				}else {
					top.style.backgroundColor = "rgba(255, 255, 255, 0)";
					top.style.height = "60px";
					top.style.borderBottom = "0px";
					
					brand.style.margin = "20px 0 0 50px";
					brand.style.fontSize = "2em";

					sitenav.style.margin = "35px 150px 0 0";
					sitenav.style.fontSize = "1.5em";
					

					
					highlight.style.color = "#2B4A6F";
					current.style.color = "#2B4A6F";
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
	