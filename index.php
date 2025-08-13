<?php
// Display current server time
date_default_timezone_set('UTC');
$serverTime = date('Y-m-d h:i A');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Application</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    form {
        background-color: aqua;
        border: 3px solid red;
        margin-left: 100px;
        margin-right: 300px;
        padding: 20px;

    }
    </style>
</head>

<body>
    <h2>current server time</h2>
    <span><?php echo htmlspecialchars($serverTime); ?></span>

    <h3>Enter your name and favorite color</h3>
    <!-- Using POST method to submit sensitive data (name) and to hidden data from URL(POST used with forms) -->
    <form method="POST" action="process.php">
        <div class="form-group">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="color">Favorite Color:</label>
            <input type="text" id="color" name="color" required>
        </div>

        <button type="submit">Submit</button>
    </form>

    <h3>Greeting Page</h3>
    <p>click to vist our <a href="greeting.php">greeting page</a></p>
</body>

</html>