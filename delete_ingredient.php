<?php include('navbar.php') ?>
<!Doctype html>
<html>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infits</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script type="text/JavaScript" 
src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js">
</script>


    <script type="text/JavaScript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js">
    </script>
</head>
  

<?php
 

$nm = $_GET['name'];
$del = "delete from `add_ingredient` where `ingrd_name` = '$nm'";
if($conn -> query($del) == true)
{
    echo  '<div class="alert alert-primary" role="alert" style="text-align:center;">
    Ingredient deleted;
  </div>';
  echo '<meta http-equiv="refresh" content="1; URL=edit_ingredients.php" />';

}
else
{
    echo  '<div class="alert alert-primary" role="alert" style="text-align:center;">
    Ingredient not deleted;
  </div>';

  echo '<meta http-equiv="refresh" content="1; URL=edit_ingredient.php" />';

}
?>


</body>
</html>