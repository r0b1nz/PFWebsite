<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Log In</title>
    <!-- CSS Styles -->
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/loginstyle.css">
</head>
<body>
	<div>
		<div>
			<h1 id="mainTitle" class="animated fadeInDown">Quiz Master Login Page</h1>
		</div>
        <!-- Login Dialog Box -->
		<div class="dialogBox animated fadeIn">
			<div id="login">
            <h2>Log In</h2>
            </div>
                    <label for="user">Enter your PECFEST ID</label><br>
                    <input type="text" id="user" name="user" value="<?php if(($_SERVER['REQUEST_METHOD'] == 'POST')) echo $_POST['user']; ?>"><br>
                    <button type="submit" onclick="location.href='adminpanel.php'">Log In</button>
            <br>
		</div>
	</div>
</body>
</html>

<!-- Login Credentials -->
<?php
//
//if(!session_id())
//    session_start();
//
//$access = false;
//
//require_once('sql.php');
//
//$_SESSION['access'] = $access;
//if(!($_SERVER['REQUEST_METHOD'] == 'POST'))
//	exit;
//
//// Including Common Templates
//include 'includes/messageUI.php';
//include 'includes/error.php';
//
//$id = valid_input($_POST['user']);
//
//$message;
//
//if(empty($id)){
//	$message = "Please enter the required fields";
//	goto end;
//}
//
//// Create connection
//$conn = new mysqli($DBservername, $DBusername, $DBpass, $DBname);
//// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//} 
//
//$sql = "SELECT * FROM handler_details where Email = '$email'";
//
//$retval = $conn->query($sql);
//if($retval->num_rows<=0 )
//{
//	$message = "User does not exists";
//	error($message);
//    die('MySQL Query Error' . mysql_error());
//}else{
//	$message = "Please enter correct username and password";
//while($row = $retval->fetch_assoc())
//{
//    
//} 
//}
//
//function valid_input($data) {
//  $data = trim($data);
//  $data = stripslashes($data);
//  $data = htmlspecialchars($data);
//  return $data;
//}

?>