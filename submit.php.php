<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    // You can now process the collected user details as needed
    // For example, you could save them to a database or send them via email
    // Here, we'll simply display a thank you message:

    echo "<!DOCTYPE html>";
    echo "<html>";
    echo "<head>";
    echo "    <meta charset='UTF-8'>";
    echo "    <meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "    <title>Thank You!</title>";
    echo "    <link rel='stylesheet' href='styles.css'>";
    echo "</head>";
    echo "<body>";
    echo "    <header>";
    echo "        <h1>Your Website Name</h1>";
    echo "    </header>";
    echo "    <main>";
    echo "        <section class='landing'>";
    echo "            <h2>Thank You, $fname!</h2>";
    echo "            <p>Your form has been submitted successfully.</p>";
    echo "            <p>We will get in touch with you soon at $email or $phone.</p>";
    echo "        </section>";
    echo "    </main>";
    echo "    <footer>";
    echo "        <p>&copy; " . date("Y") . " Your Website. All rights reserved.</p>";
    echo "    </footer>";
    echo "</body>";
    echo "</html>";
}
?>
