<?php include 'app/db.conn.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <title>View</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            min-height: 100vh;
        }

        .alb {
            width: 200px;
            height: 200px;
            padding: 5px;
        }

        .alb img {
            width: 100%;
            height: 100%;
        }

        a {
            text-decoration: none;
            color: black;
        }
    </style>
</head>

<body>
    <!-- <a href="index.php">&#8592;</a> -->
    <?php
    echo "Helloooo!";

    $sql = "SELECT * FROM images ORDER BY id DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // $res = mysqli_query($conn,  $sql);

    // if ($stmt->rowCount() === 1) {
    //     $user = $stmt->fetch();
    //     return $user;
    // } else {
    //     $user = [];
    //     return $user;
    // }

    if ($stmt->rowCount() > 0) {
        while ($images = $stmt-> fetch()) {  ?>

            <div class="alb">
                <img src="uploads/<?= $images['image_url'] ?>">
            </div>

    <?php }
    } ?>
</body>

</html>