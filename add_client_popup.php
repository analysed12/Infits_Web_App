<!-- Latest minified bootstrap css -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
 
<!-- Latest minified bootstrap js -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Style -->
<style>
    .center-flex{
display: flex;
align-items: center;
justify-content: center;
}

    #select{
    background: #FFFFFF;
    border: 1px solid #6883FB;
    border-radius: 5px;
    color: #6883FB;
    font-family: 'Poppins'!important;
    font-size: 16px !important;
    }

    #final-select{
        background: #7282FB;
        border-radius: 10px;
        color: white;
        width: 200px;
        border: none;
    }

    .dashed-border{
    border: 1px dashed #7282FB;
    border-radius: 10px;
    width: auto;
    display: flex;
align-items: center;
justify-content: center;
    
    }

    .modal-dialog{
   width: 35%;
   margin: auto;
    }

    .modal {
  text-align: center;
}

@media screen and (min-width: 768px) { 
  .modal:before {
    display: inline-block;
    vertical-align: middle;
    content: " ";
    height: 100%;
  }
}

.modal-dialog {
  display: inline-block;
  text-align: left;
  vertical-align: middle;
}

</style>

<!-- Button to trigger modal -->
<button class="btn btn-success btn-lg" id="select" data-toggle="modal" data-target="#modalForm" onclick="m_display();">
    SELECT
</button>
 
<!-- Modal -->
<div class="modal fade" id="modalForm" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <!--<button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>-->
                <center>
                <h4 class="modal-title" id="myModalLabel">Choose Plan</h4>
                </center>
            </div>
             
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="dashed-border">
                                    <img src="images/add_btn.svg" style="padding: 15px;">
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="dashed-border">
                                    <img src="images/add_btn.svg" style="padding: 15px;">
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
             
            <!-- Modal Footer -->
            <div class="modal-footer">
                <center>
                <button type="button" class="btn btn-primary submitBtn" id="final-select" onclick="submitContactForm()">Select</button>
                </center>
            </div>
        </div>
    </div>
</div>

<script>
function m_display(){
    event.preventDefault();
    modal.style.display ="block";
}
</script>
<!--
<script>
function submitContactForm(){
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var name = $('#inputName').val();
    var email = $('#inputEmail').val();
    var message = $('#inputMessage').val();
    if(name.trim() == '' ){
        alert('Please enter your name.');
        $('#inputName').focus();
        return false;
    }else if(email.trim() == '' ){
        alert('Please enter your email.');
        $('#inputEmail').focus();
        return false;
    }else if(email.trim() != '' && !reg.test(email)){
        alert('Please enter valid email.');
        $('#inputEmail').focus();
        return false;
    }else if(message.trim() == '' ){
        alert('Please enter your message.');
        $('#inputMessage').focus();
        return false;
    }else{
        $.ajax({
            type:'POST',
            url:'submit_form.php',
            data:'contactFrmSubmit=1&name='+name+'&email='+email+'&message='+message,
            beforeSend: function () {
                $('.submitBtn').attr("disabled","disabled");
                $('.modal-body').css('opacity', '.5');
            },
            success:function(msg){
                if(msg == 'ok'){
                    $('#inputName').val('');
                    $('#inputEmail').val('');
                    $('#inputMessage').val('');
                    $('.statusMsg').html('<span style="color:green;">Thanks for contacting us, we\'ll get back to you soon.</p>');
                }else{
                    $('.statusMsg').html('<span style="color:red;">Some problem occurred, please try again.</span>');
                }
                $('.submitBtn').removeAttr("disabled");
                $('.modal-body').css('opacity', '');
            }
        });
    }
}
</script>-->