<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Save the email to a file or database (here we save to a file)
    file_put_contents('emails.txt', $email.PHP_EOL, FILE_APPEND);

    // Redirect to a thank-you page or the same page
    header("Location: thank_you.html");
    exit();
}
?>
