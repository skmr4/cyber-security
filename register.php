<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
    <h1>Welcome in SKMR School</h1>
    <form action="re-post.php" method="POST">
    <input type="text" name="userN" id="userN" placeholder="username"><br>
    <input type="password" name="password" id="password" placeholder="password"><br>
    <input type="email" name="email" id="email" placeholder="email"><br>
    Gender <select name="gender">
        <option disabled selected>Choose</option>
        <option>Female</option>
        <option>Male</option>
    </select>
    <br>
    <input type="submit" name="register" id="register" value="register"><br>
</form>
</div>
</body>
</html>