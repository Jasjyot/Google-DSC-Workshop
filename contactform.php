<?php

    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $subject=$_POST['subject'];
        $mailFrom=$_POST['mail'];
        $message=$_POST['message'];
        
        $mailTo= "singhjasjyot15@stu.upes.ac.in";
        $headers= "From: ".$mailFrom;
        $txt="You have received an email from ".$name.".\n\n".$message;
        
        if(mail($mailTo,$subject,$txt,$headers))
        {
            echo "<h1>Sent Successfully! Thank you ".$name." We will contact you shortly!</h1>";
        }
        else
        {
            echo "Something went wrong!";
        }

        /*
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
        */


    }
    /*
    $a=10;
    $b=20;
    function Sum($a,$b)
    {
        echo "Sum is: ".($a+$b);
    }
    Sum($a,$b);
*/

?>



