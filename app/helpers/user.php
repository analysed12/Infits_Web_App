<?php  

function getUser($dietitianuserID, $conn){
   $sql = "SELECT * FROM dietitian 
           WHERE dietitianuserID=?";
   $stmt = $conn->prepare($sql);
   $stmt->execute([$dietitianuserID]);

   if ($stmt->rowCount() === 1) {
   	 $user = $stmt->fetch();
   	 return $user;
   }else {
   	$user = [];
   	return $user;
   }
}