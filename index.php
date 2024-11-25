<?php
$conn = new mysqli("localhost", "root","", "stars");
$sql  = "SELECT * FROM users";
$results = $conn -> query($sql);
$row = $results->fetch_assoc();
var_dump ($row);
