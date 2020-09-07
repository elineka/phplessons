<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="page">
<form action="process.php" method="POST">
<h2>Login here:</h2>
<p>
<label for="">Username</label>
<input type="text" name="user" id="user">
</p>

<p>
<label for="">Password</label>
<input type="password" name="pass" id="pass">
</p>

<p>
<input type="submit" id="btn" value="Login">
</p>

</form>
</div>
    
</body>
</html>