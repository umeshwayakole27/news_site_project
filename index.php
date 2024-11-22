<?php include 'session_check.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>News Home</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        ul {
            margin: 20px;
            padding: 20px;
            background: #ffffff;
            border-radius: 5px;
        }

        ul li {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <header>

        <div class="nav">
            <a href="index.php">Home</a>
            <a href="tech.php">Technology</a>
            <a href="sports.php">Sports</a>
            <a href="world.php">World News</a>
            <a href="contact.php">Contact</a>
            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="logout.php">Logout</a>
            <?php else: ?>
                <a href="login.php">Login</a>
                <a href="signup.php">Signup</a>
            <?php endif; ?>
        </div>
        <hr>
        <h1>News Today</h1>
    </header>
    <h2>Welcome to News Today!</h2>
    <p>
        Your source for the latest news. Navigate through our sections to stay
        updated.
    </p>
    <div>
        <h2>Recent Articles</h2>
        <ul>
            <li><a href="article1.php">Breaking News: Market Hits Record High</a></li>
            <li><a href="article2.php">Tech Trends: AI and Machine Learning</a></li>
            <li><a href="article3.php">Sports Update: Championship Results</a></li>
            <li><a href="article4.php">Global News: Climate Change Impact</a></li>
            <li><a href="article5.php">Health: Tips for a Balanced Diet</a></li>
        </ul>
    </div>
    <div>
        <h2>Featured News</h2>
        <article>
            <h3>New Innovations in Renewable Energy</h3>
            <p>Discover the latest advancements in renewable energy technologies.</p>
            <img src="assets/renewable_energy.jpg" alt="Renewable Energy" style="width: 30%; height: auto" />
        </article>
        <article>
            <h3>Global Economic Outlook</h3>
            <p>Insights into the current state of the global economy.</p>
            <img src="assets/economic-outlook.webp" alt="Economic Outlook" style="width: 30%; height: auto" />
        </article>
    </div>
</body>

</html>