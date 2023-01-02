<div id="myModal" class="modal">
    <div class="modal-content">
        <div class="alert-header">ALERT</div>
        <!-- <span class="close">&times;</span> -->
        <?php
            // $date_time_start_onlytime = substr($date_time_start,-6) ;

            ?>
        <p>You already have <> with <> at <>
        </p>
    </div>
</div>

<script>
    console.log("Hello");
var modalObject = document.getElementById("myModal");
// var spanObject = document.getElementsByClassName("close")[0];

modalObject.style.display = "block";

// spanObject.onclick = function(){
//     modalObject.style.display = "none";
// }

window.onclick = function(event) {
    if (event.target == modalObject) {
        modalObject.style.display = "none";
    }
}
</script>