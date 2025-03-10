<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/stack-logo.png" type="image/x-icon">
    <title>Home</title>
</head>
<body>
    <nav>
        <div class="logo-nav-cont">
            <a href="index.php" class="logo-nav">
                <img src="img/stack-logo.png" alt="logo" width=50 height=50>
                <h1>Stack Overflow</h1>
            </a>
        </div>
        <hr>
        <div class="login-nav-cont">
        <?php
                if(!isset($_COOKIE['user'])){
                    echo "<a href='login.php' class='login-nav'>Log in</a>";
                    echo "<a href='sign-in.php' class='login-nav sign-in'>Sign in</a>";
                }else{
                    echo $_COOKIE['user'];
                    echo "<img src='img/profile-picture.png' alt='profile photo' width='25px' height='25px'>'";
                    echo "<button class='login-nav sign-in sign-out'>Sign out</button>";
                }
            ?>
        </div>
    </nav>
</body>
</html>