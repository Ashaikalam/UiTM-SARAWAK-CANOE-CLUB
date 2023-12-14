<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $data = "Name: $name\nEmail: $email\nMessage: $message\n\n";
    file_put_contents('contact_form_responses.txt', $data, FILE_APPEND);
    header("Location: thank_you.html");
    exit();
} else {
    header("Location: contactus.html");
    exit();
}
?>
