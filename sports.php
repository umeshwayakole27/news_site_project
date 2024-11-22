<?php include 'session_check.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sports News</title>
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
        <h1>Sports News</h1>
    </header>
    <article>
        <h2>Latest Sports Updates</h2>
        <p>Stay tuned for the latest sports updates and news.</p>
        <img src="assets/sports.jpg" alt="Sports" style="width: 30%; height: auto" />
    </article>
    <section>
        <h2>Recent Sports Articles</h2>
        <article>
            <h3>Championship Highlights</h3>
            <p>Highlights from the latest championship games.</p>
            <img src="assets/championship.jpg" alt="Championship" style="width: 30%; height: auto" />
        </article>
        <article>
            <h3>Player Profiles</h3>
            <p>In-depth profiles of top athletes.</p>
            <img src="assets/player_profiles.jpg" alt="Player Profiles" style="width: 30%; height: auto" />
        </article>
    </section>
</body>

</html>
