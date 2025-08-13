<?php
// result.php - display form results

// get parameters from URL (passed after POST-redirect-GET pattern)
// using GET here is appropriate because:
// 1. we're displaying data, not processing it
// 2. the data is not sensitive
$name = isset($_GET['name']) ? htmlspecialchars(trim($_GET['name'])) : 'Guest';
$color = isset($_GET['color']) ? htmlspecialchars(trim($_GET['color'])) : 'black';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Page</title>
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
    <h3>Form Result page</h3>

    <p>Hi <?php echo $name; ?></p>

    <p>Your favorite color is:
        <span style="color: <?php echo $color; ?>">
            <?php echo $color; ?>
        </span>
    </p>

    <p><a href="index.php">return to index page</a></p>
</body>

</html>