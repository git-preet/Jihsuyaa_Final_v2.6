<?php 

    if(isset($_POST['submit']))
    {
       $UserName = $_POST['name'];
       $Email = $_POST['mail'];
       $Subject = $_POST['subject'];
       $Msg = $_POST['message'];

       if(empty($name) || empty($email) || empty($subject) || empty($message))
       {
           header('location:index.php?error');
       }
       else
       {
           $to = "aksharvirani227@gmmail.com";

           if(mail($to,$subject,$message,$email))
           {
               header("location:index.html?success");
           }
       }
    }
    else
    {
        header("location:index.html");
    }
?>
