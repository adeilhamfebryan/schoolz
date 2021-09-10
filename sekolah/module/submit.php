<?php 
// header('Content-Type: application/json');
// require 'connect_db.php';
// if($_SESSION['masuk']) die();
// if(isset($_POST['uname']) && (valid_username($_POST['uname'])) && isset($_POST['pass']) && strlen($_POST['pass'])) {
// 	$login = $sql->prepare('SELECT `user`, `password` FROM `users` where `user` = ?');
// 	$login->bindParam(1, $_POST['uname']);
// 	$login->execute();
// 	$login = $login->fetch();

// 	if($login && password_verify($_POST['pass'], $login[1])) {
// 		$_SESSION['masuk'] = true;
// 		$_SESSION['uname'] = $login[0];
// 		$resp['message'] = 'login berhasil';
// 	} else {
// 		$resp['message'] = 'username atau password salah';
// 	}
// 	$resp['success'] = $_SESSION['masuk'];
// 	echo json_encode($resp);
// }
?>
<?php 
header('Content-Type: application/json');
require 'connect_db.php';
if($_SESSION['masuk']) die();
if(isset($_POST['uname']) && (valid_username($_POST['uname'])) && isset($_POST['password']) && strlen($_POST['password'])) {
	$login = $sql->prepare('SELECT `user`, `password` FROM `users` where `user` = ?');
	$login->bindParam(1, $_POST['uname']);
	$login->execute();
	$login = $login->fetch();

	if($login && password_verify($_POST['password'], $login[1])) {
		$_SESSION['masuk'] = true;
		$_SESSION['uname'] = $login[0];
		$resp['message'] = 'login berhasil';
	} else {
		$resp['message'] = 'username atau password salah';
	}
	$resp['success'] = $_SESSION['masuk'];
	echo json_encode($resp);
}
?>