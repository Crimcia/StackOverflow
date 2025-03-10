<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="shortcut icon" href="img/stack-logo.png" type="image/x-icon">
    <title>Stack Overflow sign in page</title>
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
            <a href="sign-in.php" class='login-nav sign-in'>Log in</a>
        </div>
    </nav>
    <main>
        <form action="" method="post">
            <h1>Sign into Stack Overflow</h1>
            <label for="email-inp">Email:</label>
            <input type="email" name="email-inp" id="email-inp">
            <br>
            <label for="name-inp">Username:</label>
            <input type="text" name="name-inp" id="name-inp">
            <br>
            <label for="password-inp">Password:</label>
            <input type="password" name="password-inp" id="password-inp">
            <br>
            <label for="repass-inp">Repeat password:</label>
            <input type="password" name="repass-inp" id="repass-inp">
            <br>
            <br>
            <button>Sign in</button>
            <p class='login-par'>Already have an account? <a href="login.php" class="anch">Log in</a></p>
        </form>
        <?php
            $con = mysqli_connect("localhost", "root", "", "stackoverflow");
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $email = $_POST["email-inp"];
                $username = $_POST["name-inp"];
                $password = $_POST["password-inp"];
                $repassword = $_POST['repass-inp'];
                $sql_username = "SELECT username FROM users WHERE username LIKE '$username';";
                $sql_email = "SELECT username FROM users WHERE email LIKE '$email';";
                $result_username = mysqli_query($con, $sql_username);
                $result_email = mysqli_query($con, $sql_email);
                if(mysqli_num_rows($result_username) || mysqli_num_rows($result_email)){
                    echo "<script>
                        const anch = document.querySelector('.anch');
                        const loginPar = document.querySelector('.login-par');
                        loginPar.innerHTML = 'Account already exists. ';
                        loginPar.appendChild(anch);
                    </script>";
                }else if($password != $repassword){
                    echo "<script>
                        const anch = document.querySelector('.anch');
                        const loginPar = document.querySelector('.login-par');
                        loginPar.innerHTML = 'Account already exists. ';
                        loginPar.appendChild(anch);
                    </script>";
                }
            }
        ?>
    </main>
    <?php
        mysqli_close($con);
    ?>
</body>
</html>