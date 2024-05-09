<!DOCTYPE html>

<?php

include './includes/db_handler.php';

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="./contact.js" defer></script>
    <title>Contact Denco</title>
</head>
<body>
    <header>
        <a href="index.html"><img src="logo.png" alt="denco_logo"></a>
        <ul>
            <li><a href="./contactus.html">Contact Us</a></li>
            <li><a href="./blog.html">Blog</a></li>
            <li><a href="">Achievements</a></li>
            <li><a href="">About Us</a></li>
            <li><a href="">EN</a></li>
        </ul>
    </header>

    <div class="contactLap">
        <h1>Contact Denco</h1>
        <hr>
        <h3>Write us a letter</h3>
        <form action="">
            <input type="text" placeholder="Title" id="contactTitle" required>
            <textarea id="contactContent" placeholder="Content" required></textarea>
            <input type="email" id="contactEmail" placeholder="Your email" required>
        </form>
        <button id="submitButton">Send</button>
        <section>
            <h1>Please fill out everything.</h1>
        </section>
    </div>


    <footer>
        <h3>&copy; CONSTRUCTII COMERT DENCO SRL</h3>
    </footer>
</body>
</html>