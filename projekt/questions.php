<?php
    function createSidePostBar($row){
        echo "<div class='post-side-bar'>";
        echo "<p>$row[votes] votes</p>";
        echo "<p>$row[answers] answers</p>";
        echo "<p>$row[views] views</p>";
        echo "</div>";
    }

    function createMainPostBar($row){
        echo "<div class='post-main-bar'>";
        echo "<button class='post-title'>$row[title]</button><br>";
        echo "<p class='body-text'>$row[description]Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores quis voluptas, qui consequuntur minus labore. Nostrum ex quae totam odio atque neque! Cum, maxime! Ipsum enim eos cum quas consequatur!Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores quis voluptas, qui consequuntur minus labore. Nostrum ex quae totam odio atque neque! Cum, maxime! Ipsum enim eos cum quas consequatur!Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores quis voluptas, qui consequuntur minus labore. Nostrum ex quae totam odio atque neque! Cum, maxime! Ipsum enim eos cum quas consequatur!Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores quis voluptas, qui consequuntur minus labore. Nostrum ex quae totam odio atque neque! Cum, maxime! Ipsum enim eos cum quas consequatur!Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores quis voluptas, qui consequuntur minus labore. Nostrum ex quae totam odio atque neque! Cum, maxime! Ipsum enim eos cum quas consequatur!Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores quis voluptas, qui consequuntur minus labore. Nostrum ex quae totam odio atque neque! Cum, maxime! Ipsum enim eos cum quas consequatur!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, blanditiis. Error quisquam non labore sint reiciendis, voluptas qui soluta aspernatur ducimus, pariatur cumque sapiente. Earum aspernatur obcaecati cumque laudantium facere?
        </p>";
        echo "</div>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="questions.css">
    <link rel="shortcut icon" href="img/stack-logo.png" type="image/x-icon">
    <title>Newest Questions</title>
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
    <aside>
        <a href="index.php">Home</a>
        <a href="questions.php">Questions</a>
        <a href="tags.php">Tags</a>
        <a href="users.php">Users</a>
    </aside>
    <main>
        <header>
            <div class="header-top">
                <h2>Newest Questions</h2>
                <a href="ask_question.php" class="sign-in login-nav" style="width: 100px; height: 20px">Ask Question</a>
            </div>
            <div class="header-bottom">
                <p>
                    <?php
                        $con = mysqli_connect("localhost", "root", "", "stackoverflow");
                        $count_query = "SELECT COUNT(id) FROM posts;";
                        $result_count = mysqli_query($con, $count_query);
                        $row = mysqli_fetch_array($result_count);
                        echo $row[0];
                    ?>
                    questions
                </p>
            </div>
        </header>
        <section class="questions">

            <?php
                $query1 = "SELECT * FROM posts ORDER BY id DESC;";
                $result1 = mysqli_query($con, $query1);

                while($row = mysqli_fetch_array($result1)){
                    echo "<div class='post-cont'>";
                    createSidePostBar($row);
                    createMainPostBar($row);
                    echo "</div>";
                }

                mysqli_close($con);
            ?>
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
    <script>
        
    </script>
</body>
</html>