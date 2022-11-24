<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>After_select</title>
</head>
<style>
html {
    overflow-x: hidden;
}

#content {
    display: flex;
    flex-direction: column;
    height: 90%;
    font-family: "Poppins";
    font-style: normal;
    font-weight: 500;
    font-size: 35px;
    padding: 20px;
}

.grid-container {
    display: grid;
    grid-template-columns: auto auto auto;
}

.grid-item {
    background-color: rgba(255, 255, 255, 0.8);
    border: 1px solid rgba(0, 0, 0, 0.8);
    margin: 10px;
    padding: 20px;
    font-size: 30px;
    /* text-align: center; */
}
</style>

<body>
    <?php include "navbar.php";
    ?>

    <!-- Content starts here -->
    <div id="content">
        <div class="header">
            <div class="headertext"><?php $headertext = "Healthy Diet"; echo $headertext
            ?> Plans</div>
            <div class="searchbar">
<!-- Options are healthy diet,weight loss, vegan diet, etc -->
            </div>
        </div>
        <div class="grid-container">
            <div class="grid-item">
                <div class="grid-item-header"><?php echo $headertext ?></div>
            </div>
            <div class="grid-item">2</div>
            <div class="grid-item">3</div>
            <div class="grid-item">4</div>
            <div class="grid-item">5</div>
            <div class="grid-item">6</div>
            <div class="grid-item">7</div>
            <div class="grid-item">8</div>
            <div class="grid-item">9</div>
        </div>
    </div>
    <!-- Contents ends here -->
</body>

</html>