<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

//$link = mysqli_connect("localhost", "root", "", "demo");
 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "first_blogging_site";

// Create connection
$link = new mysqli($servername, $username, $password, $dbname);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$title = mysqli_real_escape_string($link, $_POST['title']);
$dateTime = mysqli_real_escape_string($link, $_POST['dateTime']);
$user = mysqli_real_escape_string($link, $_POST['user']);
$content = mysqli_real_escape_string($link, $_POST['content']);
$likes = mysqli_real_escape_string($link, $_POST['likes']);
$totalComments = mysqli_real_escape_string($link, $_POST['totalComment']);

// attempt insert query execution
$sql = "INSERT INTO blog_post (title, date_time, user, content, likes) VALUES ('$title', '$dateTime', '$user','$content', '$likes')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>