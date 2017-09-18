<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
// using SendGrid's PHP Library
// https://github.com/sendgrid/sendgrid-php
// If you are using Composer (recommended)
require 'file:///C|/Users/finellaa/Desktop/vendor/autoload.php';
// If you are not using Composer
// require("file:///C|/Users/finellaa/Desktop/path/to/sendgrid-php/sendgrid-php.php");
$from = new SendGrid\Email("Example User", "antonela.finella@hotmail.com.ar");
$subject = "Sending with SendGrid is Fun";
$to = new SendGrid\Email("Example User", "mdc5770@hotmail.com.ar");
$content = new SendGrid\Content("text/plain", "and easy to do anywhere, even with PHP");
$mail = new SendGrid\Mail($from, $subject, $to, $content);
$apiKey = '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';
$sg = new \SendGrid($apiKey);
$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
print_r($response->headers());
echo $response->body();

?>
</body>
</html>