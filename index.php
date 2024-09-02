<?php
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && $_POST['action'] == 'send') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Display the form submission
    $formResponse = "<h2>Form Submitted</h2>
                     <p><strong>Name:</strong> $name</p>
                     <p><strong>Email:</strong> $email</p>
                     <p><strong>Message:</strong> $message</p>";
} else {
    $formResponse = '';
}

// Determine which page to display
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header, footer {
            background-color: #f8f9fa;
            padding: 1em;
            text-align: center;
        }
        h1 {
            color: #333;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 1em;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        form label {
            display: block;
            margin: 0.5em 0;
        }
        form input, form textarea {
            width: 100%;
            padding: 0.5em;
            margin-bottom: 1em;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        form input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 0.75em;
            cursor: pointer;
        }
        form input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<header>
    <h1>My PHP Website</h1>
    <nav>
        <a href="?page=home">Home</a> |
        <a href="?page=about">About</a> |
        <a href="?page=contact">Contact</a>
    </nav>
</header>

<main>
    <?php
    switch ($page) {
        case 'about':
            echo '<h2>About Us</h2>
                  <p>We are a fictional company, created for the purpose of this example.</p>';
            break;
        case 'contact':
            echo '<h2>Contact Us</h2>
                  <form action="index.php?page=contact" method="post">
                      <input type="hidden" name="action" value="send">
                      <label for="name">Name:</label>
                      <input type="text" id="name" name="name" required>
                      <br>
                      <label for="email">Email:</label>
                      <input type="email" id="email" name="email" required>
                      <br>
                      <label for="message">Message:</label>
                      <textarea id="message" name="message" required></textarea>
                      <br>
                      <input type="submit" value="Send">
                  </form>';
            echo $formResponse;
            break;
        case 'home':
        default:
            echo '<h2>Welcome to My Website</h2>
                  <p>This is a simple PHP website with multiple pages.</p>';
            break;
    }
    ?>
</main>

<footer>
    <p>&copy; 2024 My PHP Website. All rights reserved.</p>
</footer>
</body>
</html>

