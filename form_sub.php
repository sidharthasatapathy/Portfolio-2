<?php 
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $msg=$_POST['message'];
        
        $to='ssatapathy000@gmail.com';
        $subject='Form Submission';
        $message="Name: ".$name."\n"."Phone: ".$phone."\n". "Wrote the following: "."\n\n".$msg;
        $headers="Form: ".$email;
        
        if(mail($to,$subject, $message, $headers)){
            echo "<h1>Sent successfully"." ".$name.", we ill contact you later</h1>";
            
        }
        else{
            echo "something went wrong";
        }
    }
?> 