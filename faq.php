<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infits</title>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    
    <style>

    .content {
        display: flex;
        flex-direction: column;
        height: 90%;
        font-family: 'Poppins';
        font-style: normal;
        padding: 10px;
        margin: 0px;
        overflow: clip;
    }
    input{
        width: 100%;
        border: 1px solid #0177FD;
        }
        ::placeholder {
        color: #B8D3F2;
        opacity: 1; /* Firefox */
        }

        :-ms-input-placeholder { /* Internet Explorer 10-11 */
        color: #B8D3F2;
        }

        ::-ms-input-placeholder { /* Microsoft Edge */
        color: #B8D3F2;
        }


        .accordion {
        background-color: white;
        padding: 18px;
        width: 100%;
        margin: 12px;
        border: 2px solid #0177FD;
        text-align: left;
        font-size: 15px;
        transition: 0.4s;
        }


        .accordion:after {
        content: '\002B';
        float: right;
        margin-left: 5px;
        }

        .panel {
        padding: 0 18px;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.2s ease-out;
        }

        
    </style>
  </head>

  <body>
  <div id="page">
    <?php include 'event_calendar.php'; ?>

    <div class="content">

      <!------------------------------------------------DASHBOARD--------------------------------------------------------->
        <h1 style="font-size: 32px; color: #202224; font-weight: 600;">FAQs</h1>


      <!-----------------------------------------------FAQ SEARCH-------------------------------------------------------->
      <form class="example" action="/action_page.php">
        <input type="text" placeholder="Search" name="search">
        <!--<button type="submit"><i class="fa fa-search"></i></button>-->
      </form>

      <br>
      <!-----------------------------------------------CONTENT----------------------------------------------------------->
      <div class="container">
        <div class="row">
          <div class="col-sm">
            <p style="font-weight: 700; font-size: 22px; color: #0177FD; margin: 10px;">FAQ</p>
            <p style="font-weight: 700; font-size: 40px; color: #0E0E2C; margin: 10px;">Here are Some Answer For Frequntly asked Questions</p>
            <p style="font-weight: 400; font-size: 22px;color: rgba(14, 14, 44, 0.6); margin: 10px;">We got alot of Message With the same Questions so here are some fast answer for populare Question</p>
          </div>
          <div class="col-sm">
            <button class="accordion">Section 1</button>
                <div class="panel">
                <p style="font-weight: 400; font-size: 16px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

                <button class="accordion">Section 2</button>
                <div class="panel">
                <p style="font-weight: 400; font-size: 16px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

                <button class="accordion">Section 3</button>
                <div class="panel">
                <p style="font-weight: 400; font-size: 16px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

                <button class="accordion">Section 3</button>
                <div class="panel">
                <p style="font-weight: 400; font-size: 16px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

                <script>
                var acc = document.getElementsByClassName("accordion");
                var i;

                for (i = 0; i < acc.length; i++) {
                acc[i].addEventListener("click", function() {
                    this.classList.toggle("faq-active");
                    var panel = this.nextElementSibling;
                    if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                    } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                    } 
                });
                }
                </script>

          </div>
        </div>
      </div>
      
</div>
           


</body>
</html>