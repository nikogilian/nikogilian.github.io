<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
if(isset($_POST['submit'])) {
$to = "nikothekidgil@gmail.com";
$subject = "Form Tutorial";
$name_field = $_POST['name'];
$email_field = $_POST['email'];
$message = $_POST['message'];

$body = "From: $name_field\n E-Mail: $email_field\n Message:\n $message";

echo "Data has been submitted to $to!";
mail($to, $subject, $body);
} else {
echo "blarg!";
}
?>

</body>
</html>
