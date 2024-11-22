<?php include 'session_check.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .registerbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 1;
        }

        .registerbtn:hover {
            color:rgb(0, 0, 0);
            background-color: #ff4b4b;
        }

        input[type=text],
        input[type=email],
        textarea {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input[type=text]:focus,
        input[type=email]:focus,
        textarea:focus {
            background-color: orange;
            outline: none;
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
        <h1>Contact Us</h1>
    </header>
    <article>
        <h2>Get in Touch</h2>
        <form action="submit_form.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required />

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required />

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit" class="registerbtn">Send</button>
        </form>
    </article>
    <div>
        <h2>Our Office</h2>
        <p>123 News Street, Media City, NY 12345</p>
        <img src="assets/office_location.jpg" alt="Our Office" style="width: 30%; height: auto" />
    </div>
</body>

</html>