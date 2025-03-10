<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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
    <header>
        <h1>Stack Overflow</h1>
        <p class='header-desc'>Find answers to your technical questions and help others answer theirs.</p>
    </header>
    <main>
        <section class='left'>
            <div class='home-sect main-elements'>
                <a href="home.php">
                    <img src="img/home.png" alt="home icon" width=50 height=50>
                    <h2>Home</h2>
                    <p>A place for you to find answers to your technical questions and help others answer theirs</p>
                </a>
            </div>

            <div class='questions-sect main-elements'>
                <a href="questions.php">
                    <img src="img/question.png" alt="questions icon" width=50 height=50>
                    <h2>Questions</h2>
                    <p>Check the newest questions published by users</p>
                </a>
            </div>
        </section>

        <section class='right'>
            <div class='tags-sect main-elements'>
                <a href="tags.php">
                    <img src="img/tag.png" alt="tags icon" width=50 height=50>
                    <h2>Tags</h2>
                    <p>A tag is a keyword or label that categorizes your question with other, similar questions. Using the right tags makes it easier for others to find and answer your question.</p>
                </a>
            </div>

            <div class='users-sect main-elements'>
                <a href="users.php">
                    <img src="img/users.png" alt="users icon" width=50 height=50    >
                    <h2>Users</h2>
                    <p>Check out the most popular users on Stack Overflow</p>
                </a>
            </div>
        </section>
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
    <script src="https://cdn.jsdelivr.net/npm/@simondmc/popup-js@1.4.3/popup.min.js"></script>
    <script src="app.js"></script>
</body>
</html>