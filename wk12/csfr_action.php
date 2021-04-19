<?php
$success = false;
if(isset($_POST['password']) && isset($_POST['username']) && isset($_POST['confirmation'])) {
$password = $_POST['password'];
$username = $_POST['username'];
$postConf = $_POST['confirmation'];
$sessConf  = $_SESSION['confirmation'] = "ABC";
if($postConf == $getConf) {
$success = true;
}

if ($password == 'pass' && $username ='host') {
$success = true;
}
}
?>


<html>
<body>

<form method="post">
 <label>Username</label>
 <input type="text" name="username" id="username">
 <label>Password</label>
 <input type="password" name="password" id="password">
 <br/>
 <input type="submit">
</form>

<?php if ($success): ?>
<p>Success!</p>
<?php elseif (isset($_POST['password']) && isset($_POST['username'])): ?>
<p>Login Failed</p>
<?php endif; ?>
</body>
</html>
