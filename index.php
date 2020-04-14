<?php

<$name =$_REQUEST['name'];
<$email =$_REQUEST['myEmail'];
<$Mobile =$_REQUEST['myMobile No'];
<$about =$_REQUEST['myText'];

//check fied is filled or not

if(empty($name) || empty($email) || empty($Mobile) || empty($about))

{

    echo "Please filled all the fields";
}
else 
{
    mail("mousummoumg@gmail.com"," Web tech" ,$about, "from :$name<$email>");

    echo"<script type='text/javascript'>alert('Your message sent successfully');
    </script>";
}

?>
