<?php include 'session_check.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>World News</title>
    <link rel="stylesheet" href="styles.css" />
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
        <h1>World News</h1>
    </header>
    <article>
        <h2>Global Updates</h2>
        <p>Stay informed with the latest news from around the world.</p>
        <img src="assets/world_image.jpg" alt="World News" style="width: 30%; height: auto" />
    </article>
    <div>
        <h2>Recent World Articles</h2>
        <article>
            <h3>Climate Change Impact</h3>
            <p>How climate change is affecting different regions.</p>
            <img src="assets/climate_change.jpg" alt="Climate Change" style="width: 30%; height: auto" />
        </article>
        <article>
            <h3>Political Developments</h3>
            <p>Recent political events and their global impact.</p>
            <img src="assets/political_developments.jpg" alt="Political Developments"
                style="width: 30%; height: auto" />
        </article>
    </div>
</body>

</html>