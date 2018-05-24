<?php 
			include_once 'includes/header.php'; 
		?>
		<div id="content">
			<section class="parent">
				<div class="child">
					<?php
						//if(func::checkLoginState($dbh))
						//{
						//	echo 'Welcome' . $_SESSION['username']. '!';
						//}
						//else
						//{
						//	header("location:login.php");
						//}
					?>
				</div>
			</section>
 
			<?php
			if(isset($_GET['contact'])){
				include 'includes/contact.php';
			}else if(isset($_GET['creations'])){
				include 'includes/creations.php';
			}else{
				include 'includes/home.php';
			}
			?>
		</div>
		
		<?php 
			include_once 'includes/footer.php'; 
		?>
	</body>
</html>