<?php
// get name from URL parameter
// using GET is appropriate here because:
// 1. we're just displaying a greeting
// 2. the name parameter is not sensitive
// 3. allows direct linking to specific greetings
$name = isset($_GET['name']) ? htmlspecialchars(trim($_GET['name'])) : 'Guest';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greeting Page</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
    }
    </style>
</head>

<body>
    <h3>Greeting Page</h3>

    <p>Hello <?php echo $name; ?></p>

    <p><a href="index.php">return to index page</a></p>
</body>

</html>