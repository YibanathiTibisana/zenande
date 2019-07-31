<?php
    if(isset($_POST['submit'])){
        
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $msg=$_POST['msg'];
        
        $to='zenandeyibanathi@gmail.com';
        $subject ='Form Submission';
        $messege = 'Name: ' .$name. '' .  'Phone: ' .$phone. '' . 'wrote the following:'.$msg;
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
        $headers .= "From: $email\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
        
        //send the form to email
        if(mail($to,$subject,$messege,$headers)){
            echo '<h1> Sent Successfully! Thank you"." ".$name.",We Will Contact You Shortly!</h1>';
         }else{
             echo "something went wrong";
         
         }
        }    
    ?>