<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infits | Refer a Friend</title>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <link href="css/modal.css" rel="stylesheet">
    
    <style>

    #content {
        display: flex;
        flex-direction: column;
        height: 90%;
        width: 90! important;
        font-family: 'Poppins';
        font-style: normal;
        padding: 20px;
        margin-right: 5px;
    }
    input[type=copy-text]{
        background-color: #0177FD;
        border: none;
        color: white;
        padding: 16px 32px;
        border-radius: 10px;
        text-decoration: none;
        margin: 4px 2px;
        width: 150px !important;
        }
            
    .copyButton{
        background-color: #0177FD;
        border: none;
        color: white;
        padding: 16px 32px;
        border-radius: 10px;
        text-decoration: none;
        margin: 4px 2px;
        }
    .refer-box{
        background-color: #0177FD;
        border: none;
        border-radius: 10px;
        margin: 4px 2px;
        width: 35%;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-around;
        flex-wrap: wrap;

        }
    .side-by-side{
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        }

    .refer-a-friend{
        width: 500px !important;
        border: none !important;
        box-shadow: none !important;
        }
    .space-between-flex{
        display: flex;
        justify-content: space-between;
        }
    .help-box{
    margin-left: 42px;
    background: #FFFFFF;
    border: 1px solid #F4F4F4;
    box-shadow: 0px 8px 24px rgba(176, 190, 197, 0.32), 0px 3px 5px rgba(176, 190, 197, 0.32);
    border-radius: 12px;
    width: 90%;
    padding: 5px;
    margin: 10px;
    }
    .help-content{
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    }
    .help-text{
    display: flex;
    align-items: flex-start;
    flex-direction: column;
    justify-content: center;
    }
    /*----- MODAL -------*/
    .modal {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) scale(0);
    transition: 200ms ease-in-out;
    border: 1px solid black;
    border-radius: 10px;
    z-index: 35;
    background-color: white;
    max-height: 80%;
  }
  
  .modal.actv{
    transform: translate(-50%, -50%) scale(1);
  }
  
  .modal-header {
    padding: 10px 15px;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  
  .modal-header .title {
    font-size: 25px;
    font-weight: bold;
  }
  
  .modal-header .close-button {
    cursor: pointer;
    border: none;
    outline: none;
    background: none;
    font-size: 20px;
    font-weight: bold;
  }
  
  .modal-body {
    padding: 10px 15px;
    font-size: 20px;
  }
  
  #overlay {
    position: fixed;
    opacity: 0;
    transition: 200ms ease-in-out;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, .5);
    pointer-events: none;
  }
  
  #overlay.actv {
    opacity: 1;
    pointer-events: all;
  }

  .invite{
    border-radius: 10px;
    padding: 10px;
    margin: 5px;
    background-color: #4B9AFB;
    color: white;
    border: none;
  }
        
    </style>
    </head>

    <body>
    <div id="page">
    <?php include 'event_calendar.php'; ?>

    <div id="content">
      <!------------------------------------------------DASHBOARD--------------------------------------------------------->
      <center>
      <img src="images/refer.png" height="150px">  
      <h1 style="font-size: 32px; color: #202224; font-weight: 400;">Earn Money by Referring</h1>

      
      <!-----------------------------------------------REFER C0DE--------------------------------------------------------->
      
        <div class="side-by-side">
          <div class="refer-box">
            <p id="copy" style="font-size: 16px; color: white; margin: 2px;">MXG00234</p>
            <button type="button" onclick="copyEvent('copy')" class="copyButton" style="font: 'Poppins';">Copy</button>
          </div>
          <button type="button" class="copyButton" style="padding: 20px; font: 'Poppins';">Share</button>
        </div>
        <script>
            function copyEvent(id)
            {
                var str = document.getElementById(id);
                window.getSelection().selectAllChildren(str);
                document.execCommand("Copy")
                alert("Copied text to clipboard");
            }
        </script>
  
   <!-----------------------------------------------INVITE A FRIEND----------------------------------------------------->
    <div class="help-box refer-a-friend">
      <div class="space-between-flex">
        <div class="help-content">
          <img src="images/pp2.png" style="margin:20px; height: 50px;">
          <div class="help-text">
            <p style="font-size: 20px; margin: 0;">Tongkun Lee
              <br> 
            <p style="font-size: 15px; margin: 0; color:#747688;">Facebook
          </div>
        </div>
          <a href="#" style="text-decoration: none; color: royalblue; margin: 30px">Invite</a>
      </div>
    </div>

    <div class="help-box refer-a-friend">
      <div class="space-between-flex">
        <div class="help-content">
          <img src="images/pp2.png" style="margin:20px; height: 50px;">
          <div class="help-text">
            <p style="font-size: 20px; margin: 0;">Tongkun Lee
              <br> 
            <p style="font-size: 15px; margin: 0; color:#747688;">Facebook
          </div>
        </div>
          <a href="#" style="text-decoration: none; color: royalblue; margin: 30px">Invite</a>
      </div>
    </div>

    <div class="help-box refer-a-friend">
      <div class="space-between-flex">
        <div class="help-content">
          <img src="images/pp2.png" style="margin:20px; height: 50px;">
          <div class="help-text">
            <p style="font-size: 20px; margin: 0;">Tongkun Lee
              <br> 
            <p style="font-size: 15px; margin: 0; color:#747688;">Facebook
          </div>
        </div>
          <a href="#" style="text-decoration: none; color: royalblue; margin: 30px">Invite</a>
      </div>
    </div>

    <div class="help-box refer-a-friend">
      <div class="space-between-flex">
        <div class="help-content">
          <img src="images/pp2.png" style="margin:20px; height: 50px;">
          <div class="help-text">
            <p style="font-size: 20px; margin: 0;">Tongkun Lee
              <br> 
            <p style="font-size: 15px; margin: 0; color:#747688;">Facebook
          </div>
        </div>
          <a href="#" style="text-decoration: none; color: royalblue; margin: 30px">Invite</a>
      </div>
    </div>

    <div class="help-box refer-a-friend">
      <div class="space-between-flex">
        <div class="help-content">
          <img src="images/pp2.png" style="margin:20px; height: 50px;">
          <div class="help-text">
            <p style="font-size: 20px; margin: 0;">Tongkun Lee
              <br> 
            <p style="font-size: 15px; margin: 0; color:#747688;">Facebook
          </div>
        </div>
          <a href="#" style="text-decoration: none; color: royalblue; margin: 30px">Invite</a>
      </div>
    </div>
    
<!------------------------------------------------------- INVITE MODAL ------------------------------------------------->
<button data-modal-target="#modal">Open Modal</button>
    <div class="modal" id="modal">
    <div class="modal-header">
        <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
        <img src="images/refer2.png" height="180px"><br>
        Congratulations! 
        <br> 
        You have just earned $50
        <p style="font-size: 16px; font-weight: 300; color: black">One of your friends has joined by your referral code. Do more invitations to earn more.</p>
        <button class="invite">Invite Another</button>
    </div>
    </div>
    <div id="overlay"></div>

    <script>
        const openModalButtons = document.querySelectorAll('[data-modal-target]')
        const closeModalButtons = document.querySelectorAll('[data-close-button]')
        const overlay = document.getElementById('overlay')

        openModalButtons.forEach(button => {
        button.addEventListener('click', () => {
            const modal = document.querySelector(button.dataset.modalTarget)
            openModal(modal)
        })
        })

        overlay.addEventListener('click', () => {
        const modals = document.querySelectorAll('.modal.actv')
        modals.forEach(modal => {
            closeModal(modal)
        })
        })

        closeModalButtons.forEach(button => {
        button.addEventListener('click', () => {
            const modal = button.closest('.modal')
            closeModal(modal)
        })
        })

        function openModal(modal) {
        if (modal == null) return
        modal.classList.add('actv')
        overlay.classList.add('actv')
        }

        function closeModal(modal) {
        if (modal == null) return
        modal.classList.remove('actv')
        overlay.classList.remove('actv')
        }
</script>
    
</div>

</body>
</html>