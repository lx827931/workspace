<?php
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && $_POST['action'] == 'send') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Display the form submission
    $formResponse = "<h2>Hi you have successfully registered</h2>
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
    <title>KSBM COMPANY</title>
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
    <h1>My Python Django Project for KSBM INFOTECH we are 14 yrs old company.</h1>
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
                  <p>At KSBM Infotech, we are dedicated to transforming business ideas into innovative digital solutions. Specializing in custom app development, we empower businesses to enhance their operational efficiency and connect with their customers through cutting-edge technology. Our team of expert developers, designers, and strategists work collaboratively to deliver tailor-made applications that not only meet but exceed industry standards. By leveraging the latest advancements in technology and adhering to a customer-centric approach, KSBM Infotech ensures that each app we create is both user-friendly and aligned with your business objectives. Whether youre looking to streamline internal processes or engage with your audience in new ways, we provide the expertise and support needed to drive your success in the digital age.</p>';
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
            echo '<h2>Welcome to KSBM INFOTECH Website</h2>
                 <p>Welcome to KSBM Infotech, where innovation meets functionality in the world of business app development. We are a forward-thinking technology company committed to crafting bespoke applications that drive growth and efficiency for businesses of all sizes. Our expert team combines deep industry knowledge with cutting-edge technology to deliver solutions that are not only tailored to your specific needs but also designed to propel your business forward. From enhancing internal workflows to creating engaging customer experiences, KSBM Infotech is your partner in leveraging technology to achieve your business goals. Explore our services and discover how we can help you unlock new opportunities and elevate your business in today’s digital landscape..</p>';
            break;
    }
    ?>
</main>

<footer>
    <p>&copy; 2024 My PHP Website. All rights reserved.</p>
</footer>
</body>
</html>
