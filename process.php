<?php
// process.php - process form data

// check if form was submitted using POST method
// POST is preferred here because:
// 1. we're handling user-submitted data
// 2. POST doesn't show data in URL
// 3. more secure for form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // validate form inputs
    $name = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : '';
    $color = isset($_POST['color']) ? htmlspecialchars(trim($_POST['color'])) : '';
    
    if (!empty($name) && !empty($color)) {
        // redirect to result page with 303 See Other status
        // this prevents form resubmission on page refresh
        header("Location: result.php?name=" . urlencode($name) . "&color=" . urlencode($color), true, 303);
        exit();
    } else {
        // redirect back to form if validation fails
        header("Location: index.php", true, 303);
        exit();
    }
} else {
    // if someone tries to access this page directly, redirect to form
    header("Location: index.php", true, 303);
    exit();
}
?>