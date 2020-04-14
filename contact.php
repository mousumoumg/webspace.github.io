<?php

if(isset($_REQUEST['submit']))
{
  <$name =$_REQUEST['name'];
  <$email =$_REQUEST['myEmail'];
  <$Mobile =$_REQUEST['myMobile No'];
  <$about =$_REQUEST['myText'];

  $mailTo="mousummoumg@yahoo.in";
  $headers="From :".$mailFrom;
  $txt="You have received an email from".$name."./n/n".$about;
    
  mail($mailTo,$about,$txt,$headers);
  header("Location: index.php?mailsend");

}

?>

