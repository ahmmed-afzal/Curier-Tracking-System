<?php
    include_once 'Database.php';
    $db = new Database();
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name = $_POST['name'];
        $time = $_POST['time'];
        $location = $_POST['location'];
        $query = "INSERT INTO tbl_admin2(name,time,location) VALUES('$name','$time','$location')";
        $InsertRow = $db->insert($query);
        if($InsertRow>0) {
            echo "Data Inserted Successfully to the database";
            header('location:admin2.php');
        }else{
            echo "Something went wrong !";
        }
        
}
