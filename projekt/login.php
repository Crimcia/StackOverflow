<!-- <?php
    // function setLoginCookie($username){
    //     setcookie("user", $username, time() + 3600, "/");
    // }
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="shortcut icon" href="img/stack-logo.png" type="image/x-icon">
    <title>Stack Overflow login page</title>
</head>
<body>
    <nav>
        <div class="logo-nav-cont">
            <a href="index.php" class="logo-nav">
                <img src="img/stack-logo.png" alt="logo" width=25 height=25>
                <h1>Stack Overflow</h1>
            </a>
        </div>
        <hr>
        <div class="login-nav-cont">
            <a href="login.php" class='login-nav'>Log in</a>
            <a href="sign-in.php" class='login-nav sign-in'>Sign in</a>
        </div>
    </nav>
    <main>
        <form action="" method="post">
            <h1>Log into Stack Overflow</h1>
            <label for="name-inp">Username:</label>
            <input type="text" id="name-inp">
            <br>
            <label for="password-inp">Password:</label>
            <input type="text" id="password-inp">
            <br>
            <br>
            <button>Log in</button>
            <p>Already have an account? <a href="sign-in.php">Sign in</a></p>
        </form>
        <!-- <?php
            // if($_SERVER["REQUEST_METHOD"] == "POST"){
            //     $username = $_POST["name-inp"];
            //     $password = $_POST["password-inp"];
            //     setLoginCookie($username);
            // }
        ?> -->
    </main>
</body>
</html>