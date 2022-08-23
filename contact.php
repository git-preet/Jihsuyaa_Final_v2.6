<?php 

    if(isset($_POST['submit']))
    {
       $name = $_POST['name'];
       $email = $_POST['mail'];
       $subject = $_POST['subject'];
       $message = $_POST['message'];

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

    $message = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = " Please Fill in the Blanks ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }

                            if(isset($_GET['success']))
                            {
                                $Msg = " Your Message Has Been Sent ";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }
?>
