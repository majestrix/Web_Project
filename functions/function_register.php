<?php
    if($_SERVER['REQUEST_METHOD'] === 'POST' ) {
    session_name();
    session_start();
    $dbhost="localhost";
    $dbname="c59_Noodles";
    $dbuser="root";
    $dbpass="";
    $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser, $dbpass);
    if(!$pdo ) {
        die("Could not connect to database");
    }
    $pass = md5($_POST["password"]);
    $sqlStatement = "INSERT INTO customer (name, username, pass,email,birth,address,phone) VALUES (?,?,?,?,?,?,?)";
	$stmt = $pdo->prepare($sqlStatement);
	$status = $stmt->execute([trim($_POST['nameV']), trim($_POST['userV']), $pass, trim($_POST['emailV']), $_POST['dobV'], $_POST['addressV'], $_POST["phoneV"]]);
	if(!$status ) {
		echo $stmt->error;
	}
	else
	{
		$name = $_POST['nameV'];
		$sql = "SELECT * FROM customer WHERE name='$name'";
		$res = $pdo->query($sql);
		$res = $res->fetch();
		$_SESSION["user"] = $res;
		header("Location: ../index.php");
	}
    }
    ?>
