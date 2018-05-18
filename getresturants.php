<?php

    include "connect.php";
    
    $conn = getDBConnection("ProjectDB");
    
    $cost = $_POST['cost'];
    $cuisine = $_POST['cuisine'];
    $city = $_POST['city'];
    
    if($cuisine != "0" && $city != "0"){
        $cuisine = substr_replace('""',$_POST['cuisine'],1,0);
        $city = substr_replace('""',$_POST['city'],1,0);
        $sql = "SELECT * FROM restaurants WHERE cost = $cost AND type = $cuisine AND city = $city";
    }
    else if($cuisine != "0" && $city == "0"){
        $cuisine = substr_replace('""',$_POST['cuisine'],1,0);
        $city = substr_replace('""',$_POST['city'],1,0);
        $sql = "SELECT * FROM restaurants WHERE cost = $cost AND type = $cuisine";
    }
    else if($cuisine == "0" && $city != "0"){
        $cuisine = substr_replace('""',$_POST['cuisine'],1,0);
        $city = substr_replace('""',$_POST['city'],1,0);
        $sql = "SELECT * FROM restaurants WHERE cost = $cost AND city = $city";
    }
    else
        $sql="SELECT * FROM restaurants WHERE cost = $cost";
    
    // echo $sql;
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll();
    
    echo json_encode($data);
?>