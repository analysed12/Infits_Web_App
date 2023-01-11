<?php
include "config.php";
if (isset($_POST['search'])) {
   $Name = $_POST['search'];
   $Query = "SELECT DISTINCT name FROM create_plan WHERE name LIKE '%$Name%' LIMIT 5";
   $ExecQuery = MySQLi_query($conn, $Query);
   echo '
   <div class="search-list">

   ';
   while ($Result = MySQLi_fetch_array($ExecQuery)) {
       ?>
   <li style="list-style-type:none !important; left:0;!important;text-align :left !important;" onclick='fill("<?php echo $Result['name']; ?>")' >
   <a>
       <?php echo $Result['name']; ?>
   </li></a>
   <?php
}}
?>
</div>