<!-- <?php
        // include('navbar.php');
        ?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    .container {
        width: 442.67px;
        height: 420px;
        /* width: 100%;
        height: 100vh; */
        /* background: red; */
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 32.589px;
        position: relative;

    }

    .btn {
        padding: 10px 60px;
        border: 0;
        outline: none;
        cursor: pointer;
        font-size: 22px;
        font-weight: 500;
        border-radius: 30px;
    }

    .popup {
        width: 442.67px;
        height: 420px;
        background: #F5F5F5;
        border-radius: 32.589px;
        position: absolute;
        top: 0;
        left: 50%;
        transform: translate(-50%, -50%) scale(0.1);
        /* text-align: center; */
        padding: 0 30px 30px;
        color: #333;
        visibility: hidden;
        transition: tranform 0.4s, top 0.4s;
    }

    .open-Popup {
        visibility: visible;
        top: 50%;
        transform: translate(-50%, -50%) scale(1);

    }
</style>

<body>
    <div class="container">
        <button type="submit" onclick="openPopup()" class="btn">click</button>
        <div class=" popup border rounded flex flex-col justify-around  " id="popup">
            <p class="absolute right-0 top-0 m-8 " onclick="closePopup()">X</p>
            <div class="text-center">
                <h2 style="font-family: 'NATS'; font-style: normal; font-weight: 400; font-size: 34.9699px; line-height: 74px; " height: 74px; width:205px;>November 2022</h2>
            </div>
            <div>
                <p style="font-size: 20px;font-family: 'NATS';font-style: normal;font-weight: 400;line-height: 42px; " width: 162px;height: 42px;>You added this month</p>
                <div class="flex">
                    <p style="font-family: 'NATS';font-style: normal;font-weight: 400;font-size: 26.6667px;" width: 92px; height: 56px;>16 Clients</p>
                    <p style="font-family: 'NATS';font-style: normal;font-weight: 400;font-size: 26.6667px; line-height: 56px;color: #9A9A9A;" height:56px; width:92px;>(Rs. 99 for each)</p>
                </div>
            </div>
            <div class="flex justify-around justify-items-center ">
                <p style="font-family: 'NATS';font-style: normal;font-weight: 400;font-size: 35px;line-height: 85px;" height:85px; width:97px; left: 52px;top: 202.67px;>16 X 99</p>
                <p class="mt-2.5" style="font-family: 'NATS';font-style: normal;font-weight: 400;font-size: 16.9819px;line-height: 44px; " height:44px; width:39px; left: 200px; top: 229px;>Total</p>
                <p style="font-family: 'NATS';font-style: normal;font-weight: 400;font-size: 41.5687px; line-height:105px;" height:105px; width:142px; left: 256px;top: 191px;>Rs. 1584</p>
            </div>
            <div class="flex justify-around ">
                <button style="font-family: 'NATS';font-style: normal;font-weight: 400;font-size: 20.9819px;line-height: 44px;color: #9E5EF4;" height:44px; width:138px;>Download Invoice</button>
                <button style="width: 157.26px;height: 50.48px;left: 232.98px;top: 324.68px;background: #9E5EF4;border-radius: 9.7076px;" height:50px; width:157px; type="button">pay</button>
            </div>

            <!-- <img src="" alt="">
            <h2>thank you</h2>
            <p> your details has been </p> -->

        </div>
    </div>

    <script>
        console.log("start")

        let popup = document.getElementById("popup");

        function openPopup() {
            console.log("added")
            popup.classList.add("open-Popup")

        }

        function closePopup() {
            popup.classList.remove("open-Popup")

        }
    </script>
</body>

</html>