<?php
if (isset($_GET['query'])) {
    $query = $_GET['query'];
    $conn = new mysqli("localhost", "root", "", "infits");
    if ($conn->connect_error) {
        die("Connection failed :" . $conn->connect_error);
    }
    $q ="SHOW TABLES";
    echo '<pre>';
    $r = $conn->query($q) or die('Query Failed');
    foreach($r->fetch_all() as $t):
        $q2 = "SELECT COLUMN_NAME 
        FROM INFORMATION_SCHEMA.COLUMNS 
        WHERE TABLE_SCHEMA = 'infits' 
        AND TABLE_NAME = '{$t[0]}' 
        AND DATA_TYPE != 'int';";
        $r2 = $conn->query($q2) or die('Query Failed');
        if($r2->num_rows>0){
            foreach($r2->fetch_all() as $c){
                $q3="SELECT * FROM $t[0] WHERE `$c[0]` like \"%$query%\"";
                $r3 = $conn->query($q3) or die('Query Failed');
                if($r3->num_rows>0){
                    print_r($r3->fetch_assoc())."<br><br>";
                }
            }
        }
    endforeach;
    exit;
}
?>