<?php
    #$Name=$_POST[name];
    #$email=$_POST[email];
    #$Subject=$_POST[Subject];
    #$Message=$_POST[message];

    #$conn = new mysqli('localhost','root','','message');
    #if($conn->connect_error){
     #   die ('Connection Failed :' .$conn->connect_error);
   # }else{
    #    $stmt = $conn->prepare("insert into registration(name,email,subject,message) 
     #   values(?, ?, ?, ?");
     #   $stmt->bind_param("ssss",$name, $email, $Subject, $message);
     #   $stmt->execute();
        echo "Message Sent...";
     #   $stmt->close();
     #   $conn->close();
    #}

?>