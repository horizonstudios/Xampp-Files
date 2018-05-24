<?php
	class func
	{
		public static function checkLoginState($dbh)
		{
			if(!isset($_SSESSION['id']) || !isset($_COOKIE['PHPSESSID']))
			{
				session_start();
			}
			if (isset($_COOKIE['id'])&&isset($_COOKIE['token'])&&isset($_COOKIE['serial']))
			{
				$query = "SELECT * FROM sessions WHERE sessions_userid = :userid AND session_token = :token AND sessions_serial = :serial;";
				
				$id = $_COOKIE['id'];
				$token = $_COOKIE['token'];
				$serial = $_COOKIE['serial'];
				
				$stmt = $dbh->prepare($query);
				$stmt->execute(array(':userid' => $userid, ':token' => $token, ':serial' => $serial));
				
				$row = stmt->fetch(PDO::FETCH_ASSOC);
				
				if($row['sessions_userid'] > 0)
				{
					if(
						$row['sessions_userid'] == $_COOKIE['userid']; &&
						$row['sessions_token'] == $_COOKIE['token']; &&
						$row['sessions_serial'] == $_COOKIE['serial']
						)
					{
						if(
						$row['sessions_userid'] == $_SESSION['userid']; &&
						$row['sessions_token'] == $_SESSION['token']; &&
						$row['sessions_serial'] == $_SESSION['serial']
							)
						{
							return true;
						}
					}
				}
			}
						
							
		}
	}
	public static function createString($len)
	{
		$string = "1gayjpdjapiodjp13po1pojjpojjp12N2n12ij4";
		$s = '';
		$r_new = '';
		$r_old = '';
		
		for ($i = 1; $i < $len; $i++)
		{
			while ($r_old == $r_new)
			{
				$r_new = rand(0, 60);
			}
			$r_old = $r_new;
			
			$s = $s.$string[$r_new];
		}
		return $s;
?>