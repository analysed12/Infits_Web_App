<?php
        $con = mysqli_connect("localhost", "root", "", "infits");


        $search = $_GET['search'];



        $query = "SELECT client_id FROM `goals` WHERE client_id LIKE '%$search%' LIMIT 3";
        $res = mysqli_query($con, $query);

        if(mysqli_num_rows($res)==0){
                echo("<tr> <td> No clients found! </td> </tr>");
                exit;
        }
        while($data = mysqli_fetch_assoc($res)){
        echo ('<tr>');
        echo ('<td>'.$data['client_id'].'<br></td>');
        echo ('</tr>');
        // echo ('<option value="'.$data['client_id'].'">'.$data['client_id'].'</option>');
        }

 ?> 