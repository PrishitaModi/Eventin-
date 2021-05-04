<?php
        session_start();
        $conn = mysqli_connect("localhost", "root", "", "todo",);
         if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
        if(isset($_POST['submit'])){  
       
        $title = @($_POST['title']);
        $date = $_POST['date'];
        $venue =  $_POST['venue'];
        $time = $_POST['time'];
        $theme = $_POST['theme'];
        $guests = $_POST['guests'];
        $message = $_POST['message'];
        
        $sql = "INSERT INTO invitationform(date,title,venue,theme,time,guests) VALUES ('$date', 
            '$title','$venue','$theme','$time','$guests')";

          
        if(mysqli_query($conn, $sql)){
            /*echo "<h3>data stored in a database successfully."; 
             header('location: invitiserver.php');*/
        } 
        else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
       mysqli_close($conn);
    }

        ?>

    