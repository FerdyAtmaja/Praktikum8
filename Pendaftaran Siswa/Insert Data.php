<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check Connection
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO buku_tamu (nama, email, isi)
VALUES  ('Ferdy', 'ferdy123@gogoo.com', 'Hallo Guys'),
        ('Hendry', 'hendry321@gogoo.com', 'Hi There'),
        ('Ocky', 'Jermocky456@gogoo.com', 'Konnichiwa')";

if(mysqli_query($conn, $sql)){
    echo "New record created successfully";
}else{
    echo "Error : ".$sql."<br>".mysqli_error($conn);
}

mysqli_close($conn);
?>