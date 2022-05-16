<?php
$id = $_POST['delete'];
$user = 'u41612';
$pass = '1483808';
$db = new PDO('mysql:host=localhost;dbname=u41612', $user, $pass, array(PDO::ATTR_PERSISTENT => true));
$req = "DELETE FROM all_abilities WHERE user_id='$id'";
$res = $db->prepare($req);
$res->execute();
$req = "DELETE FROM form WHERE user_id='$id'";
$res = $db->prepare($req);
$res->execute();
$req = "DELETE FROM users WHERE user_id='$id'";
$res = $db->prepare($req);
$res->execute();
header('Location:admin.php');
