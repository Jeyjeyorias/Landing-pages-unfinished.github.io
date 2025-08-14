<?php
// Optional: dynamic title or variables
$title = "Welcome to My Landing Page";
$tagline = "Your journey starts here!";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #4e54c8, #8f94fb);
            color: white;
            text-align: center;
        }
        header {
            padding: 60px 20px;
        }
        h1 {
            font-size: 3em;
            margin: 0;
        }
        p {
            font-size: 1.2em;
        }
        .cta-button {
            display: inline-block;
            padding: 15px 30px;
            margin-top: 20px;
            background: #ff7eb3;
            color: white;
            text-decoration: none;
            border-radius: 30px;
            font-size: 1.2em;
            transition: background 0.3s ease;
        }
        .cta-button:hover {
            background: #ff4f87;
        }
        footer {
            margin-top: 50px;
            padding: 20px;
            background: rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>

<header>
    <h1><?php echo $title; ?></h1>
    <p><?php echo $tagline; ?></p>
    <a href="#contact" class="cta-button">Get Started</a>
</header>

<section id="about">
    <h2>About Us</h2>
    <p>We help you achieve your dreams with our amazing services. Sign up today and see the difference!</p>
</section>

<section id="contact" style="margin-top: 50px;">
    <h2>Contact Us</h2>
    <form method="POST" action="">
        <input type="text" name="name" placeholder="Your Name" required><br><br>
        <input type="email" name="email" placeholder="Your Email" required><br><br>
        <textarea name="message" placeholder="Your Message" required></textarea><br><br>
        <button type="submit" class="cta-button">Send</button>
    </form>
    <?php
    // Basic form handling
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST["Jeyward Orias"]);
        $email = htmlspecialchars($_POST["oriasjeyward@gmail.com"]);
        $message = htmlspecialchars($_POST["message"]);

        echo "<p>Thanks, $name! We have received your message.</p>";
    }
    ?>
</section>

<footer>
    <p>&copy; <?php echo date("Y"); ?> My Website. All Rights Reserved.</p>
</footer>

</body>
</html>
