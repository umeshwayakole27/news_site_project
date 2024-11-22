<?php include 'session_check.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Technology News</title>
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
        <h1>Technology News</h1>
    </header>
    <article>
        <h2>Latest in Tech</h2>
        <p>Check out the latest advancements in technology.</p>
        <img src="assets/tech_image.jpg" alt="Technology" style="width: 30%; height: auto" />
    </article>
    <div>
        <h2>Recent Tech Articles</h2>
        <article>
            <h3>AI Revolution</h3>
            <p>How artificial intelligence is transforming industries.</p>
            <img src="assets/ai_revolution.jpg" alt="AI Revolution" style="width: 30%; height: auto" />
        </article>
        <article>
            <h3>Blockchain Innovations</h3>
            <p>The latest developments in blockchain technology.</p>
            <img src="assets/blockchain.jpg" alt="Blockchain" style="width: 30%; height: auto" />
        </article>
    </div>
</body>

</html>