<?php 
session_start();
$_SESSION['masuk'] = isset($_SESSION['masuk']) ? $_SESSION['masuk'] : false;
$cfg = array(
	'host' => 'localhost',
	'uname' => 'root',
	'pass' => '',
	'db' => 'pwpb' 
);

$sql = new PDO(
	"mysql:host=$cfg[host]; dbname=$cfg[db]",
	$cfg['uname'],
	$cfg['pass']
);

$baris = [];
$regex = '^[A-Za-z0-9_\-]+$';


function valid_username($name) {
  global $regex;
  return (
    strlen($name) > 0 &&
    strlen($name) <= 20 &&
    preg_match("/$regex/", $name) === 1
  );
}
?>