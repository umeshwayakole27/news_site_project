<?php include 'session_check.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Breaking News: Market Hits Record High</title>
    <link rel="stylesheet" href="styles.css">
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
        <h1>Breaking News: Market Hits Record High</h1>
    </header>
    <article>
        <h2>Market Hits Record High</h2>
        <p>The stock market reached an all-time high today, with major indices showing significant gains. Experts attribute this surge to positive economic data and investor optimism.</p>
        <img src="assets/market_high.jpg" alt="Market High" style="width: 30%; height: auto" />
    </article>
</body>

</html>