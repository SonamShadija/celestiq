<?php
session_start();
?>

<html>
<head>
<title>Celestiq Login</title>

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
<center><h1>Login Panel</h1>
<br>
    <div style="width:450px">
    <?php
    if(isset($_SESSION['msg'])){
        echo '<div class="alert alert-info">'.$_SESSION['msg'].'</div>';
        unset($_SESSION['msg']);
    }
    ?>
        <form method="post" action="login.php">
            <div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="E-mail" required>
            </div>
            <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <input type="submit" value="Login" name="login_btn" class="btn btn-lg btn-success" style="width:100%">
        </form>
        <h4>Not a user yet? <a href="register.php">Click here to register</a></h4>
    </div>
    </center>
</div>
</body>
</html>