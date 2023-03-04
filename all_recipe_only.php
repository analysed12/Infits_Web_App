<?php
$sql = "SELECT * FROM `default_recipes`";
$res = mysqli_query($conn, $sql);
?>

<div class="flex row">
    <?php while ($d = mysqli_fetch_assoc($res)) {
        $drecipe_recipe = explode(',', $d['drecipe_recipe']);
        $steps = count($drecipe_recipe);
        $drecipe_nutritional = $d['drecipe_nutritional information'];

        $drecipe_nutritional = trim($drecipe_nutritional, '{}');
        $pairs = explode(', ', $drecipe_nutritional);
        $nutritional = array();
        foreach ($pairs as $pair) {
            list($key, $value) = explode(': ', $pair);
            $key = trim($key, "'");
            $value = trim($value, "'");
            $nutritional[$key] = $value;
        }
    ?>
        <div class="card d-flex" style="padding:15px; width:300px; border-radius:16px;">
            <div class="card-upper d-flex justify-content-between">
                <p id="bu" class="card-upper-text"> Medium </p>
                <p id="bu" class="card-upper-text"><i class="fa-solid fa-clock"></i> 20:00 </p>
            </div>
            <div class="img-dis" style="width:100%; text-align:center;">
                <img src="./images/alooparatha-eg.png" style="height:100%; width:70%; object-fit:cover;" />
            </div>
            <div class="d-flex justify-content-between">
                <p class="card-food"><?php echo $d['drecipe_name'] ?></p>
                <div class="header">
                    <div class="dropdown ">
                        <div id="myDropdownIcon" class="dropbtn" onclick="showDropdown()">
                            <img class="" src="./icons/vertical-three-dots.svg" alt="">
                        </div>

                        <div class="dropdown-content dropdown-card ">
                            <a  style="color: white;" class="edit-button" href="#">Edit</a>
                            <a  style="color: white;" class="delete-button" href="#">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between" style="align-items:center;">
                <p class="card-calorie"> <img src="./icons/calorie.svg" alt=""> <?php echo $nutritional['Calories'] ?> kcal</p>
                <div class="d-flex align-items-center card-num">
                    <div class="card-num-circle"><?= $steps ?> </div> &nbsp;
                    <div class="">Steps</div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>