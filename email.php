<?php
if ($_POST["email"]<>'') {
    $ToEmail = 'nickshanekearney@icloud.com';
    $EmailSubject = 'Site contact form';
    $mailheader = "From: ".$_POST["email"]."\r\n";
    $mailheader .= "Reply-To: ".$_POST["email"]."\r\n";
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
    $MESSAGE_BODY = "Name: ".$_POST["name"]."";
    $MESSAGE_BODY .= "Email: ".$_POST["email"]."";
    $MESSAGE_BODY .= "Comment: ".nl2br($_POST["comment"])."";
    mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure");
?>
Your message was sent
<?php
} else {
?>
<form action="email.php" method="post">
 
<input name="email" type="text" id="email" size="32"> 
<textarea name="comment" cols="45" rows="6" id="comment" class="bodytext"></textarea>
<input type="submit" name="Submit" value="Send"> 
 
</form>
<?php
};
?>