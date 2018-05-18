<?php
    
    include "connect.php";
    
    $conn = getDBConnection("ProjectDB");
    
    $sql = "SELECT DISTINCT city FROM restaurants ORDER BY city";
    
    $stmt = $conn->prepare($sql);
    $stmt ->execute();
    $data = $stmt ->fetchAll();
    
    echo json_encode($data);
?>