<?php

$map = [
    "addclient" => [
        "get" => ["dietitianuserID","clientuserID","name","email","phone"],
        "like" => ["clientuserID","name","email","phone"],
        "where" => "dietitianuserID",
        "card" => ""
    ],
    "create_plan" => [
        "get" => ["plan_id","name","profile","image","tags","duration","features","description","price"],
        "like" => ["name","profile","tags","features","description","price"],
        "where" => "dietitianuserID",
    ],
    "create_event" => [
        "get" => ["eventID","eventname","meeting_type","place_of_meeting","description"],
        "like" => ["eventname","meeting_type","place_of_meeting","description"],
        "where" => "dietitianuserID",
    ],
    "default_recipes" => [
        "get" => ["drecipe_id","drecipe_name","drecipe_recipe"],
        "like" => ["drecipe_name","drecipe_recipe"],
        "where" => "",
    ],
    "dietition_tasks" => [
        "get" => ["task_id","title","description"],
        "like" => ["title","description"],
        "where" => "dietitianuserID",
    ]
];
if (isset($_GET['query'])) {
    $query = $_GET['query'];
    $conn = new mysqli("localhost", "root", "", "infits");
    if ($conn->connect_error) {
        die("Connection failed :" . $conn->connect_error);
    }
    foreach($map as $key => $table):
        $q = "";
        $where = "";
        $get = "SELECT ".implode(', ',$table['get']);
        $table_name = " FROM " .$key;
        $like = " where ".implode(" like \"$query\" or ",$table['like'])." like \"$query\"";
        if($table['where'] != ""){
            $where = " AND {$table['where']} = 'Jane'";
        }

        $q = $get.$table_name.$like.$where;
        echo $q;
        $result = $conn->query($q);

        echo '<pre>';
        print_r($result->fetch_assoc())."<br><br>";

    endforeach;
}