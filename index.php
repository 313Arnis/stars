<?php
$conn = new mysqli("localhost", "root","", "stars");
$results = $conn -> query("SELECT * FROM users");
$row = $results->fetch_assoc();
var_dump ($row);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $sql = "INSERT INTO users (username, pass) VALUES ('$username', '$password')";

    $conn -> query($sql);
}





echo "<form method = 'POST' >";
    echo "<label> Lietotājvārds: <input type='text' name='username' /></label><br>"; 
    echo "<label>Parole: <input type='password' name='password' /></label><br>";
    echo "<input type='submit' value = 'registreties'>";
echo "</form>";

