<?php
// send_email.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $headers = "From: your-email@example.com"; // �������A���q�l�l��a�}

    if (mail($to, $subject, $message, $headers)) {
        echo "�l��o�e���\�I";
    } else {
        echo "�l��o�e���ѡC";
    }
}
?>
