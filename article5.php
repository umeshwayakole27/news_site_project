<?php include 'session_check.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Health: Tips for a Balanced Diet</title>
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
        <h1>Health: Tips for a Balanced Diet</h1>
    </header>
    <article>
        <h2>Tips for a Balanced Diet</h2>
        <p>Maintaining a balanced diet is crucial for overall health. Here are some tips to help you achieve a nutritious and well-rounded diet.</p>
        <img src="assets/balanced_diet.jpg" alt="Balanced Diet" style="width: 30%; height: auto" />
    </article>
</body>

</html>