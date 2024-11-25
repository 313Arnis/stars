<?php
$conn = new mysqli("localhost", "root","", "stars");
$sql  = "SELECT * FROM users";
$results = $conn -> query($sql);
$row = $results->fetch_assoc();
var_dump ($row);

echo "<form>";
    echo "<input name='username' />";
    echo "<input type='password' name='password'/>"; 
    echo "<input type='submit' value='Registreties>";
echo "</form>";