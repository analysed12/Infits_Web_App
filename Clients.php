<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sidebar 03</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

    <link rel="stylesheet" href="css/clientlist.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sidebar menu With Sub-menus | Using HTML, CSS & JQuery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="./styles/event_calendar.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2" />
    <link href='https://fonts.googleapis.com/css?family=Julius Sans One' rel='stylesheet'>
</head>

<body>
    <style>
        @import url('https://fonts.googleapis.com/earlyaccess/nats.css');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap');

        .container {

            /* display: flex; */
            /* flex-direction: row; */
            display: flex;
            justify-content: center !important;
            align-items: center !important;
            margin: 5% 5%;
            padding: 6% 2%;

        }

        /* .col-sm-6{
                /* width: 50%;
                height: 50%;    
                display: flex;
                justify-content: center !important;
             */
        .col {
            float: left;
            display: flex;
            justify-content: center !important;
        }

        .card {
            width: 200px;
            height: 200px;
            text-align: center;
            justify-content: space-between !important;

            float: left;
            align-items: center !important;
        }

        .client-img {
            width: 100px;
            height: 100px;
            /* object-fit: cover; */
            margin: 20px 0;
        }

        .motivation {
            background-color: #FFF0D3;
            padding: 20px 10px;
            text-align: center;
            font-family: 'Julius Sans One';
            font-style: normal;
        }

        .footer {
            margin: 30px 100px;
        }
    </style>

    <?php include 'event_calendar.php'; ?>

    <!-- Page Content  -->
    <div id="content" class="">
        <div class="container">
            <div class="col">
                <div class="card">
                    <img src="images/clientProfle.svg" class="client-img" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/clientPad.svg" class="client-img" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="motivation">
                <h2>"Never Give Up, Great things take time "<br /></h2>
            </div>
        </div>
    </div>
</body>

</html>