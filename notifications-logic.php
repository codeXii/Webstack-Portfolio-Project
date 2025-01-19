<?php
 
require './myconfig/database.php';

// Logic for getting tenants whose payment are due and sending them notifications.

$sql = "SELECT * FROM tenants WHERE DATEDIFF(expire, CURDATE()) = 59";
$sql_query = mysqli_query($connect, $sql);

if(mysqli_num_rows($sql_query) > 0){
    echo "Yes";
    while($tenant = $sql_query->fetch_assoc()){
        echo  $tenant['fullname'] . " " . $tenant['expire']  . "<br>";
        echo $tenant['id'];

        $t_id = $tenant['id'];
        $message = $tenant['fullname'] . " in " ." " . $tenant['property'] . " " . $tenant['block'] . " " . $tenant['hn'] . " ".  "rent will be due in 63 days time <br> ";

        echo $message;

        $notification_sql = "INSERT INTO notifications(message, t_id) VALUES('$message', '$t_id')";
        $notification_query = mysqli_query($connect, $notification_sql);

        // if (!mysqli_errno($connect)){
        //    echo "Done";
        //     die();
        // }else{
        //     echo "not done";
        // }
    }

   
    
}else{
    echo "No";
}



