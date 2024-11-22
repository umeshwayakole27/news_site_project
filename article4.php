<?php include 'session_check.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Global News: Climate Change Impact</title>
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
        <h1>Global News: Climate Change Impact</h1>
    </header>
    <article>
        <h2>Climate Change Impact</h2>
        <p>Climate change is having a profound impact on various regions around the world. From rising sea levels to extreme weather events, the effects are becoming increasingly evident.</p>
        <img src="assets/climate_change.jpg" alt="Climate Change" style="width: 30%; height: auto" />
    </article>
</body>

</html>