<?php include('navbar.php');
if(isset($_POST['saveRec'])){
    var_dump($_POST);
} ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Create Recipe</title>
<style>
body{
    font-family: 'NATS';
}
.cheader{
    padding: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
} 
.cheader span{
    font-style: normal;
    font-weight: 400;
    font-size: 44px;
    color: #000000;
}
.btn-save{
    height:46px;
    width:151px;
    background:#D257E6; 
    color:white;
    text-align:center; 
    border:none;
    border-radius:15px
}
.ctop {
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 28px;
    color: #292A2E;
}
.right {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.bottom {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
.rtab-group {
    width: 640px;
    height: 60px;
    background: #FAFAFA;
    border-radius: 52.8px;
    display: flex;
    justify-content: space-around;
    align-items: center;
    margin: 30px 0;
}

.rtab {
    width: 178px;
    height: 42px;
    border-radius: 26.4px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: rgb(0, 0, 0,0.6);
    cursor: pointer;
}
.ractive{
    background: #D257E6;
    color: #fff;
}
.rtab-content-group {
    width: 80%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-bottom: 500px;
}
.rtab-content {
    display: none;
    width: 80%;
    margin: 0 auto;
}
.add-ingredient,
.add-direction {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 20px;
    cursor: pointer;
}

span.plus {
    border: 2px solid;
    font-size: 50px;
    font-weight: 600;
    padding: 15px;
    line-height: 15px;
    border-radius: 10px;
    color: #BD59EB;
}
.ingre-icards {
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-start;
    align-items: center;
    gap: 10%;
    margin: 20px;
}

.icard {
    width: 45%;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    gap: 40px;
    margin-bottom: 25px;
}

.icard img {
    max-width: 60px;
    max-height: 60px;
}
.add-actions {
    display: flex;
    justify-content: space-between;
    padding: 0 100px;
    align-items: center;
}

.upload-url {
    border: 2px solid;
    padding: 10px 15px;
    line-height: 15px;
    border-radius: 10px;
    color: #BD59EB;
}

.direction-list {
    display: flex;
    justify-content: flex-start;
    align-items: center;
    padding: 40px 0 0 100px;

}

ul.direcions {
    list-style-type: none;
}

ul li::before {
  content: ""; 
  display: inline-block;
  width: 10px;
  height: 10px;
  margin-right: 10px; 
  border-radius: 50%; 
  background-color: #AF5BEF; 
}

li.direction {
    margin-bottom: 10px;
}
</style>
  </head>
  <body>
      <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <div id="content">
            <div class="row">
                <div class="col cheader d-flex justify-content-between">
                    <span>New Recipe</span>
                    <button name="saveRec" type="submit" class="btn btn-save">Save</button>
                </div>
            </div>
            <div class="ctop">
                <div class="left uploadImg">
                    <img src="images/camera.svg" alt="" id="camera" style="width:60%">
                    <input type="file"  id="recipeImg" style="display:none"  name="recipeImg">
                </div>
                <div class="right">
                    <input class="form-control" type="text" name="recipeName" id="" placeholder="Recipe Name">
                    <span>(auto sync)</span>
                </div>
            </div>
            <div class="bottom">
                <div class="rtab-group">
                    <div id="toggle-recipe" data-toggle="details-tab" class="rtab">Recipe Details</div>
                    <div id="toggle-ingredient" data-toggle="ingredient-tab" class="rtab">Ingredients</div>
                    <div id="toggle-directions" data-toggle="direction-tab" class="rtab">Directions</div>
                </div>
                <div class="rtab-content-group">
                    <div class="rtab-content details-tab">
                        <div class="d-flex align-items-center justify-content-center flex-column gap-3">
                            <div class="row w-100">
                                <div class="col">
                                    <input name="name1" class="form-control" type="text" class="form-control" placeholder="First name">
                                </div>
                                <div class="col">
                                    <input name="name2" class="form-control" type="text" class="form-control" placeholder="Last name">
                                </div>
                            </div>
                            <div class="row w-100">
                                <div class="col">
                                    <input name="name3" class="form-control" type="text" class="form-control" placeholder="First name">
                                </div>
                                <div class="col">
                                    <input name="name4" class="form-control" type="text" class="form-control" placeholder="Last name">
                                </div>
                            </div>
                            <div class="row w-100">
                                <div class="col">
                                    <input name="name5" class="form-control" type="text" class="form-control" placeholder="First name">
                                </div>
                                <div class="col">
                                    <input name="name6" class="form-control" type="text" class="form-control" placeholder="Last name">
                                </div>
                            </div>
                            <h3 class="text-center">Nutritional Details</h3>
                            <div class="row w-75">
                                <div class="col">
                                    <input name="name7" class="form-control" type="text" class="form-control" placeholder="First name">
                                </div>
                                <div class="col">
                                    <input name="name8" class="form-control" type="text" class="form-control" placeholder="Last name">
                                </div>
                            </div>
                            <div class="row w-75">
                                <div class="col">
                                    <input name="name9" class="form-control" type="text" class="form-control" placeholder="First name">
                                </div>
                                <div class="col">
                                    <input name="name10" class="form-control" type="text" class="form-control" placeholder="Last name">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rtab-content ingredient-tab">
                       <div class="add-ingredient">
                            <span class="plus">+</span>
                            <span>Add Ingredients</span>
                       </div>
                       <div class="ingre-icards">
                            <div class="icard">
                                <img src="./images/salt.svg" alt="" srcset="">
                                <span class="igre-name">Salt</span>
                                <span class="igre-amount">1/4 table Spoon</span>
                                <input type="checkbox" name="ingredient[]" id="" value="1">
                            </div>
                            <div class="icard">
                                <img src="./images/salt.svg" alt="" srcset="">
                                <span class="igre-name">Salt</span>
                                <span class="igre-amount">1/4 table Spoon</span>
                                <input type="checkbox" name="ingredient[]" id="" value="1">
                            </div>
                       </div>
                    </div>
                    <div class="rtab-content direction-tab">
                        <div class="add-actions">
                            <div class="add-direction">
                                <span class="plus">+</span>
                                <span>Add Direction</span>
                            </div>
                            <div class="add-video">
                                <div class="upload-url"><i class="fa-solid fa-link"></i><span>Upload URL</span></div>
                            </div>
                        </div>
                        <div class="direction-list">
                            <ul class="direcions">
                                <li class="direction">In a large bowl, mix all-purpose flour, whole wheat flour, salt, baking powder and sugar. </li>
                                <li class="direction">In a large bowl, mix all-purpose flour, whole wheat flour, salt, baking powder and sugar. </li>
                                <li class="direction">In a large bowl, mix all-purpose flour, whole wheat flour, salt, baking powder and sugar. </li>
                                <li class="direction">In a large bowl, mix all-purpose flour, whole wheat flour, salt, baking powder and sugar. </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>











    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function() {
        
        $("#camera").click(function() {
            $("#recipeImg").trigger('click');
            
        });
        $('.rtab').click(function(){
            $('.ractive').removeClass('ractive');
            $(this).addClass('ractive');
            $('.rtab-content').hide();
            $('.' + $(this).data('toggle')).show();
        });

        $('#toggle-recipe').trigger('click');


    });
    </script>
  </body>
</html>