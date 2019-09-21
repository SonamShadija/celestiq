<?php
session_start();
if(!isset($_SESSION['user_login']) || $_SESSION['user_login']!="yes"){
    header("Location: index.php");
    exit(0);
}

$fname = $_SESSION['fname'];

?>

<html>
<head>
<title>Celestiq Homepage</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
<br>
<center><h1>Welcome  <?=$fname;?></h1>
<br>
    <a href="logout.php" class="btn btn-lg btn-danger">Logout</a>
    </center>
</div>
</body>
</html>