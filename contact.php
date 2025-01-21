<!-- The first include should be config.php -->
<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once('config.php') ?>
<?php require_once(ROOT_PATH . '/includes/public_functions.php') ?>
<?php require_once( ROOT_PATH . '/includes/registration_login.php') ?>
<!-- Retrieve all posts from database  -->
<?php $posts = getPublishedPosts(); ?>
<style> 
.content-title {
    font-size: 2em;
    margin-bottom: 0.5em;
}

form {
    background-color: white;
    padding: 2em;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form label {
    display: block;
    margin-bottom: 0.5em;
    font-weight: bold;
}

form input, form textarea {
    width: 100%;
    padding: 0.5em;
    margin-bottom: 1em;
    border: 1px solid #ccc;
    border-radius: 5px;
}

form button {
    background-color: #333;
    color: white;
    padding: 0.5em 1em;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

form button:hover {
    background-color: #555;
}
</style>
<?php require_once(ROOT_PATH . '/includes/head_section.php') ?>
<title>BrightLens | Contact </title>
</head>
<body>
    <!-- Navbar -->
    <?php include('includes/navbar.php'); ?>
    <!-- // Navbar -->
<div class="container">
        <div class="content">
            <h2 class="content-title">Contact Us</h2>
            <hr>
            <form action="contact_form_handler.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
        <!-- Footer -->
        <?php include('includes/footer.php'); ?>
    <!-- // Footer -->
</body>
</html>