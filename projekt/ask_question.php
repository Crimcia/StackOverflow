<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="questions.css">
    <link rel="shortcut icon" href="img/stack-logo.png" type="image/x-icon">
    <title>Stack Overflow</title>
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
            <a href="login.php" class='login-nav'>Log in</a>
            <a href="sign-in.php" class='login-nav sign-in'>Sign in</a>
        </div>
    </nav>
    <aside>
        <a href="index.php">Home</a>
        <a href="questions.php">Questions</a>
        <a href="tags.php">Tags</a>
        <a href="users.php">Users</a>
    </aside>
    <main>
        <h2>Ask a public question</h2>
        <form action="" method="POST">
            <label for="title">Title:</label><br>
            <input type="text" id="title" name="title" required><br><br>
            
            <label for="description">Description:</label><br>
            <textarea id="description" name="description" required></textarea><br><br>
            
            <label for="tags">Tags:</label><br>
            <input type="text" id="tags" name="tags" required><br><br>
            
            <input type="submit" value="Submit">
        </form>
        <?php

            $conn = new mysqli("localhost", "root", "", "stackoverflow");
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $title = $_POST['title'];
                $description = $_POST['description'];
                $tags = $_POST['tags'];

                $sql = "INSERT INTO posts (title, description, user_id) VALUES ('$title', '$description', '1')";

                if(mysqli_query($conn, $sql)){
                    header("Location: http://localhost/StackOverflow-main/projekt/questions.php");
                }else{
                    echo "Error: ".$conn->error;
                }
                mysqli_close($conn);
            }
        ?>
    </main>
    <footer>
        <div class='footer-cont'>
            <div class='footer-side-logo'>
                <img src="img/stack-logo.png" alt="logo" width=50 height=50>
            </div>
            <div class='footer-side-nav'>
                <div class='footer-nav-stack'>
                    <a href="home.php" class='footer-nav-main'>STACK OVERFLOW</a>
                    <a href="questions.php">Questions</a>
                    <a href="help.php">Help</a>
                    <a href="https://openai.com/index/chatgpt/">Chat</a>
                </div>
                <div class='footer-nav-products'>
                    <a href="home.php" class='footer-nav-main'>PRODUCTS</a>
                    <a href="https://www.microsoft.com/pl-pl/microsoft-teams/log-in">Teams</a>
                    <a href="#">Advertising</a>
                </div>
                <div class='footer-nav-company'>
                    <a href="home.php" class='footer-nav-main'>COMPANY</a>
                    <a href="home.php">About</a>
                    <a href="#">Work here</a>
                    <a href="#">Press</a>
                    <a href="#">Legal</a>
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                    <a href="#">Conctact Us</a>
                    <a href="#">Cookie Settings</a>
                    <a href="#">Cookie Policy</a>
                </div>
                <div class='footer-nav-exchange'>
                    <a href="home.php" class='footer-nav-main'>STACK EXCHANGE NETWORK</a>
                    <a href="https://stackexchange.com/sites#technology">Technology</a>
                    <a href="#">Culture & recreation</a>
                    <a href="#">Life & arts</a>
                    <a href="#">Science</a>
                    <a href="#">Professional</a>
                    <a href="#">Business</a>
                    <a href="#">Conctact Us</a>
                    <a href="#">Api</a>
                    <a href="#">Data</a>
                </div>
            </div>
            <div class='site-footer-copyright'>
                <ul class='list-social'>
                    <a href="https://github.com/Crimcia/portfolio">GitHub</a>
                    <a href="">Facebook</a>
                    <a href="">Linkedin</a>
                    <a href="">Instagram</a>
                </ul>
                <p>Site design / logo © 2025 Stack Exchange Inc; user contributions licensed under CC BY-SA . rev 2025.1.31.21881</p>
            </div>
        </div>
    </footer>
    <script src="app.js"></script>
</body>
</html>