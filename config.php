
<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'infits');
// Try connecting to the Database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$conn2= mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
//Check the connection
if($conn == false){
    dir('Error: Cannot connect');
}

?>
>>>>>>> 50fe664e8c8776af0f1c8b6f1b765bf4836156ac
