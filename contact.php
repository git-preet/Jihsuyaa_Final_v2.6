<?php 

    if(isset($_POST['submit']))
    {
       $name = $_POST['name'];
       $email = $_POST['email'];
       $subject = $_POST['subject'];
       $message = $_POST['message'];

       if(empty($name) || empty($email) || empty($subject) || empty($message))
       {
           header('location:index.html?error');
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
