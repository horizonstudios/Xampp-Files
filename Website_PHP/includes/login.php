<?php 
include_once("header.php"); 
?>

<section class="parent">
	<div class="child">
		<?php
			if(!func::checkLoginState($dbh))
			{
				if (isset($_POST['username'])&& isset($_POST['password']))
				{
					$query = "SELECT * FROM users WHERE user_username = :username AND user_password = :password";
					
					$username = $_POST[''];
					$password = $_POST['password'];
					
					$stmt = $dbh->prepare($query);
					$stmt->execute(array(':userid' => $userid,':token' => $token, ':serial' => $serial));
					
					$row = $stmt->fetch(PDO::FETCH_ASSOC);
					
					if($row['id'] > 0)
					{
						//func::createRecord($row['id'], $row['user_username'])
						//header("location:index.php");
						echo func::createString(32);
					}
				}
				else
				{
					echo '
						<form action="login.php" method="post">
							<label>Username</label><br />
							<input type="text name="username" /><br />
							<label>Password</label><br />
							<input type="password name="password /><br />
							<input type="submit value="login" />
						</form>
					';
				}
			}
			else {
				header("location:index.php");
			}				
		?>
	</div>
</section>