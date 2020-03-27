<?php

function register_validate($db, $username) {
	if(!isset($username)) {
		return false;
	}
	if($stmt = mysqli_prepare($db, "SELECT username FROM user_login WHERE username = ?")) {
		mysqli_stmt_bind_param($stmt, 's', $username);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_bind_result($stmt, $user_from_db);
		while (mysqli_stmt_fetch($stmt)) {
			echo ".";
		}
		$count = mysqli_stmt_num_rows($stmt);
		if($count > 0) {
			echo "<script type='text/javascript'>alert('Username already exists.');</script>";
			return false;
		}
		else {
			mysqli_stmt_free_result($stmt);
			mysqli_stmt_close($stmt);
			return true;
		}
	}
	else {
		echo "<script type='text/javascript'>alert('Cannot validate information.');</script>";
		return false;
	}
}

function register_user($db, $username, $password_hash) {
	if(!isset($username) || !isset($password_hash)) {
		return false;
	}
	if ($stmt = mysqli_prepare($db, "INSERT INTO user_login (username, password) VALUES (?, ?)")) {
		mysqli_stmt_bind_param($stmt, 'ss', $username, $password_hash);
		if (mysqli_stmt_execute($stmt) != TRUE) {
			echo "<script type='text/javascript'>alert('Cannot register user.');</script>";
			return false;
		}
		else {
				if ($stmt = mysqli_prepare($db, "INSERT INTO user_role (role_id, role_perm) VALUES ('1', 'user')")) {
					if (mysqli_stmt_execute($stmt) != TRUE) {
						echo "<script type='text/javascript'>alert('Cannot register user.');</script>";
						return false;
					}
					else {
						return true;
					}
				}
		}
	}
}

function user_authentication($db, $username, $password) {
	if (!isset($username) || !isset($password)) {
		return false;
	}
	if($stmt = mysqli_prepare($db, "SELECT password FROM user_login WHERE username = ?")) {
		mysqli_stmt_bind_param($stmt, 's', $username);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_bind_result($stmt, $hash_from_db);
		while (mysqli_stmt_fetch($stmt)) {
			echo ".";
		}
		$count = mysqli_stmt_num_rows($stmt);
		if($count == 1) {
			if(password_verify($password, $hash_from_db) == TRUE) {
				if($stmt = mysqli_prepare($db, "SELECT id FROM user_login WHERE username = ?")) {
					mysqli_stmt_bind_param($stmt, 's', $username);
					mysqli_stmt_execute($stmt);
					mysqli_stmt_bind_result($stmt, $userID);
					while (mysqli_stmt_fetch($stmt)) {
						echo ".";
					}
					$_SESSION['userID'] = $userID;
					return true;
				}
				else {
					echo "<script type='text/javascript'>alert('Incorrect Username or Password.');</script>";
					return false;
				}
			}
			else {
				echo "<script type='text/javascript'>alert('Incorrect Username or Password.');</script>";
				return false;
			}
		}
		else {
			echo "<script type='text/javascript'>alert('Incorrect Username or Password.');</script>";
			return false;
		}
	}
	else {
		echo "<script type='text/javascript'>alert('Incorrect Username or Password.');</script>";
		return false;
	}
}

function permission_level($db) {
	$user_ID = $_SESSION['userID'];
	if($stmt = mysqli_prepare($db, "SELECT role_id FROM user_role WHERE user_id = ?")) {
		mysqli_stmt_bind_param($stmt, 'i', $user_ID);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_bind_result($stmt, $perm_level);
		while (mysqli_stmt_fetch($stmt)) {
			echo ".";
		}
		if($perm_level != 1 && $perm_level != 2 && $perm_level != 4) {
			echo "<script> window.location.replace('confirm_user.php') </script>";
		}
		else if($perm_level == 1) {
			echo "<script> window.location.replace('https://craypaul.com/main/') </script>";
		}
		else if($perm_level == 2) {
			echo "<script> window.location.replace('https://craypaul.com/moderate/') </script>";
		}
		else if($perm_level == 4) {
			echo "<script> window.location.replace('https://craypaul.com/bajablast/') </script>";
		}
	}
	else {
		echo "<script> window.location.replace('session_error.php') </script>";
	}
}

function session_authentication() {
	session_start();
	if(!isset($_SESSION['username'])) {
		echo "<script> window.location.replace('https://craypaul.com/session_error.php') </script>";
	}
	if(!isset($_SESSION['loginIP']) || ($_SESSION['loginIP'] != $_SERVER['REMOTE_ADDR'])) {
		echo "<script> window.location.replace('https://craypaul.com/access_denied.php') </script>";
	}
}

function admin_authentication($db) {
	$user_ID = $_SESSION['userID'];
	if($stmt = mysqli_prepare($db, "SELECT role_id FROM user_role WHERE user_id = ?")) {
		mysqli_stmt_bind_param($stmt, 'i', $user_ID);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_bind_result($stmt, $perm_level);
		while (mysqli_stmt_fetch($stmt)) {
			echo ".";
		}
		if($perm_level != 4) {
			echo "<script> window.location.replace('https://craypaul.com/access_denied.php') </script>";
		}
	}
}

function protect_data($str) {
	$str = trim($str);
	$str = htmlspecialchars($str, ENT_QUOTES);
	return $str;
}
?>
