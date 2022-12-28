<!-- Trigger/Open The Modal -->
<button id="myBtn" onclick="m_display()";>Open Modal</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <select name="socials" id="socials" placeholder="Platform">
          <option value="whatsapp">WhatsApp</option>
          <option value="twitter">Twitter</option>
          <option value="facebook">Facebook</option>
          <option value="linkedin">LinkedIn</option>
          <option value="instagram">Instagram</option>
      </select>
      <br>
     <input type="text" placeholder="Copy Link Here">
     <br>
     <div class="center-flex align-middle"><button type="submit" class="addBtn" name="save_socials">Save</button></div>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  event.preventDefault(); //keeps page from refreshing
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

</script>-->