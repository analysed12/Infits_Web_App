<?php include('add_client_server.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>Infits | Add Client</title>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


  <style>
  body{
    font-family: 'Poppins' !important;
  }
  .add-client-area{
    display: flex;
    flex-direction: column;
    align-items: center;
    flex-wrap: wrap;
  }
  input{
    background: #EFF8FFD9;
    border: none;
    border-radius: 4px;
    min-width: 500px;
    width: 100%;
    padding: 8px 16px;
    gap: 8px;
  }
  input[type=sign-up]{
    border: 1px solid #EBEBEB;
    color: #7282FB;
    align-items: center;
    padding: 10px 22px;
    border-radius: 10px;
    text-decoration: none;
    margin: 4px 2px;
    width: auto;
  }
  /* Shared */
.addBtn {
    background-color: RoyalBlue;
    border: none;
    color: white;
    padding: 10px 22px;
    border-radius: 10px;
    text-decoration: none;
    margin: 4px 2px;
    width: 60%;
}
.center-flex{
    display: flex;
    align-items: center;
    justify-content: space-around;
    }

.signup{
      border: 1px solid #EBEBEB;
      padding: 10px;
      border-radius: 5px;
      min-width: auto;
      width: 150px;
      background-color: #FFFFFF;
      text-decoration: none;
      color: black;
  }
  .center-flex{
  display: flex;
  align-items: center;
  justify-content: center;
  }
  .float-right{
    float: right;
  }
  
      

</style>

</head>

<body>
<div id="page">
    <?php include 'event_calendar.php'; ?>

  <div id="content">	 

  <div class="add-client-area">
  <form method="post" action="add_client.php">
  	<?php include('errors.php'); ?> 
    <br>

        dietitianID <br> <input type="text" name="dietitianuserID" placeholder="<?php echo $_SESSION['name']; ?>" value="<?php isset($name)?$name:""; ?>" />
        <br><br>

        clientName <br> <input type="text" name="clientName">
        <br><br>

        Gender: <br> <input type="text" name="gender">
        <br><br>

        Height <br><input type="text" name="height">
        <br><br>

        Weight <br><input type="text" name="weight">
        <br><br>

        About <br><input type="text" name="about">
        <br><br>

        Plan
        <div class="float-right"><?php include 'add_client_popup.php'; ?></div>

<!---------------------------SUBMIT BUTTON ----------------------------------->
  		<button type="submit" class="addBtn" name="add_client">Save</button>
      <br><br>
      
  </form>
  </div>
</body>
</html>