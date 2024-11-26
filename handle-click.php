<?php

$conn = new mysqli("localhost", "root","", "stars");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $spiedieni = $_POST['count'];
    

    
    $sql = "INSERT INTO clicks (clicks) VALUES ('$spiedieni')";

    $conn -> query($sql);
}