<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: galaxygymnast.com';
    $to = 'galaxygymnastics2016@gmail.com';
    $subject = $_POST['subject'];

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
?>

<?php
if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) {
        echo '<p>Message Sent!</p>';
    } else {
        echo '<p>An error occurred. Please verify your information and try again.</p>';
    }
}
?>
