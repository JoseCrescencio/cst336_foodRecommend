<?php
    include "connect.php";
    
    $conn = getDBConnection("ProjectDB");
    
    $sql = "SELECT * FROM restaurants WHERE name = :name";
    
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":name", $_POST['name']);
    $stmt->execute();
    $data = $stmt->fetch();
    
    echo json_encode($data);    
?>