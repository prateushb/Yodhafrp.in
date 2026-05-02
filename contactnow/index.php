<?php
// Define contact information
$firstName = "John";
$lastName  = "Doe";
$email     = "john.doe@example.com";
$phone     = "+1234567890";

// Format the vCard data according to the VCF standard
$vCard = "BEGIN:VCARD\r\n";
$vCard .= "VERSION:3.0\r\n";
$vCard .= "FN:" . $firstName . " " . $lastName . "\r\n";
$vCard .= "N:" . $lastName . ";" . $firstName . ";;;\r\n";
$vCard .= "EMAIL;TYPE=internet,pref:" . $email . "\r\n";
$vCard .= "TEL;TYPE=work,voice:" . $phone . "\r\n";
$vCard .= "END:VCARD";

// Set headers to force the browser to download the file
header('Content-Type: text/x-vcard');
header('Content-Disposition: attachment; filename="contact.vcf"');
header('Content-Length: ' . strlen($vCard));

// Output the vCard content and stop execution
echo $vCard;
exit;
?>
