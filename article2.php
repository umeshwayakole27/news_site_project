<?php include 'session_check.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tech Trends: AI and Machine Learning</title>
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
        <h1>Tech Trends: AI and Machine Learning</h1>
    </header>
    <article>
        <h2>AI and Machine Learning</h2>
        <p>Artificial Intelligence and Machine Learning are revolutionizing various industries. From healthcare to finance, these technologies are driving innovation and efficiency.</p>
        <img src="assets/ai_ml.jpg" alt="AI and Machine Learning" style="width: 30%; height: auto" />
    </article>
</body>

</html>