<?php 
require_once("config.php");
if((isset($_POST['contact-name'])&& $_POST['contact-phone'] !='') && (isset($_POST['contact-email'])&& $_POST['contact-message'] !=''))
{
 require_once("contact.php<strong>");
</strong>
$yourName = $conn->real_escape_string($_POST['contact-name']);
$yourEmail = $conn->real_escape_string($_POST['contact-email']);
$yourPhone = $conn->real_escape_string($_POST['contact-phone']);

$message = $conn->real_escape_string($_POST['contact-message']);
 
$sql="INSERT INTO contact_form_info (name, email, phone, message) VALUES ('".$yourName."','".$yourEmail."', '".$yourPhone."', '".$message."')";
 
 
if(!$result = $conn->query($sql)){
die('There was an error running the query [' . $conn->error . ']');
}
else
{
echo "Thank you! We will contact you soon";
}
}
else
{
echo "Please fill Name and Email";
}
?>