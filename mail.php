<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Set the recipient email address where you want to receive the form data
    $to = "venupenikalapati@gmail.com";
    
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $education = $_POST["education"];
    $yop = $_POST["yop"];
    $gender = $_POST["gender"];
    
    // Prepare the email message
    $subject = "New Contact Form Submission";
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $email_message = "
    <html>
    <body>
        <h2>New Contact Form Submission</h2>
        <p><strong>Name:</strong> {$name}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Number:</strong><br>{$number}</p>
        <p><strong>Education:</strong><br>{$education}</p>
        <p><strong>YOP:</strong><br>{$yop}</p>
        <p><strong>Gender:</strong><br>{$gender}</p>
    </body>
    </html>
    ";
    
    // Send the email
    if (mail($to, $subject, $email_message, $headers)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>