<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracker</title>
</head>
<style>
html {
    overflow-x: hidden;
}

#content {
    display: flex;
    flex-direction: column;
    height: 90%;
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 500;
    font-size: 35px;
    padding: 20px;
}

.time_events {
    display: flex;
    flex-direction: column;
    margin-top:150px;
}

.time_container {
    padding: 32px;
    display: flex;
    flex: 1;
    width:100%
}

.time_card {
    padding: 16px;
    margin: 16px;
    border: 1px solid #76A5FF;
    box-shadow: 2px 4px 16px rgba(0, 0, 0, 0.06);
    border-radius: 10px;
    background-color: white;
    color: #76A5FF;
    height: auto;
    width: 20%;
}

.time_text {
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    font-weight: 500;
}

.food_events {
    display: flex;
    flex-direction: column;
}

.food_container {
    padding: 32px;
    display: flex;
    flex: 1;
    width:100%;
}

.food_card {
    padding: 16px;
    margin: 16px;
    background: #FFFFFF;
    box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.25);
    border-radius: 18px;
    color: black;
    height: auto;
    width: 33%;
}

.food_image {
    display: flex;
    align-items: center;
    justify-content: center;
}

.food_image img {
    border-radius: 20px;
    width: 100%;
    height: 100%;
}

.food_text {
    margin-top: 15px;
    font-size: 22px;
    color: black;
    font-weight: bold;
}

.food_column {
    float: left;
}

.food_table {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 10px;
    font-size: 16px;
}

.food_row {
    display: table;
}



/* MEDIA QUERY */


@media screen and (min-width: 720px) {

    /* Styles go here */
    .mobile-menu {
        display: none;
    }
}

@media (min-width: 0px) and (max-width: 720px) {

    .time_text {
        font-size: 30% !important;
        padding-top: 0px !important;
    }

    .time_container {
        padding: 0 !important;
        flex-wrap: wrap;
        width: 100%
    }

    .time_card {
        padding: 10px !important;
        margin-right: 0.1% !important;
        height: auto !important;
        width: 20% !important;
    }

    .food_container {
        padding: 0 !important;
        flex-wrap: wrap;
    }

    .food_card{
        width: 400px !important;
    }

}
</style>

<body>
    <!-- Navbar Start -->
    <?php
    include("navbar.php")
    ?>
    <!-- Navbar End -->

    <!-- Contents Start -->
    <div id="content">

    <!-- Calendar -->
    <h4 class="header">Meal Tracker</h4>
    <?php include("calendar.php");
    ?>


    <!-- Other content -->
        <div class="time_events">
            <div class="time_container">
                <div class="time_card">
                    <div class="time_text">Breakfast</div>
                </div>
                <div class="time_card">
                    <div class="time_text">Lunch</div>
                </div>
                <div class="time_card">
                    <div class="time_text">Snack</div>
                </div>
                <div class="time_card">
                    <div class="time_text">Dinner</div>
                </div>
            </div>
        </div>

        <div class="food_events">
            <div class="food_container">
                <div class="food_card">
                    <div class="food_image"><img src="images/alooparatha.png"></div>
                    <div class="food_text">Aloo Paratha</div>
                    <div class="food_table">
                        <div class="food_row" style="width:100% ;">
                            <div class="food_column" style="width: 80%;">
                                <p>Calories</p>
                                <p>Proteins</p>
                                <p>Carbs</p>
                                <p>Fat</p>
                            </div>
                            <div class="food_column" style="width: 20%;">
                                <p>24g</p>
                                <p>4g</p>
                                <p>36g</p>
                                <p>12g</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="food_card">
                    <div class="food_image"><img src="images/pancake.png"></div>
                    <div class="food_text">Pancake</div>
                    <div class="food_table">
                        <div class="food_row" style="width:100% ;">
                            <div class="food_column" style="width: 80%;">
                                <p>Calories</p>
                                <p>Proteins</p>
                                <p>Carbs</p>
                                <p>Fat</p>
                            </div>
                            <div class="food_column" style="width: 20%;">
                                <p>24g</p>
                                <p>4g</p>
                                <p>36g</p>
                                <p>12g</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="food_card">
                    <div class="food_image"><img src="images/salad.png"></div>
                    <div class="food_text">Healthy Salad</div>
                    <div class="food_table">
                        <div class="food_row" style="width:100% ;">
                            <div class="food_column" style="width: 80%;">
                                <p>Calories</p>
                                <p>Proteins</p>
                                <p>Carbs</p>
                                <p>Fat</p>
                            </div>
                            <div class="food_column" style="width: 20%;">
                                <p>24g</p>
                                <p>4g</p>
                                <p>36g</p>
                                <p>12g</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Contents End -->

</body>

</html>