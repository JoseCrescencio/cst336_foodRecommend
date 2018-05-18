<?php
    
    include "connect.php";
    
    $conn = getDBConnection("ProjectDB");
    
    $sql = "SELECT DISTINCT type FROM restaurants ORDER BY type";
    
    $stmt = $conn->prepare($sql);
    $stmt ->execute();
    $data = $stmt ->fetchAll();
    
    echo json_encode($data);
?>