<html>
<title>Directions</title>
<head>
  <style>
	#content {
        overflow: auto;
        display: flex;
        flex-direction: column;
        height: 90%;
        font-family: 'Poppins';
        font-style: normal;
        padding: 10px;
        margin: 0px;
    }
	 	.upload-photo{

    position: absolute;
width: 265px;
height: 200px;
left: 610px;
top: 100px;

background: #D9D9D9;
opacity: 0.74;
border-radius: 12px;
}
 .link-container{

 	box-sizing: border-box;

position: absolute;
width: 60px;
height: 52px;
left: 620px;
top: 460px;
background: whitesmoke;
border-radius: 19px;
border-color:rgba(121, 99, 251, 1);
box-shadow:rgba(121, 99, 251, 1) ;

text-align: center;
 }
 #lbl{
 	position: absolute;
width: 25px;
height: 79px;
margin-left:30% ;

font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 40px;
line-height: 100%;


display: flex;

background: linear-gradient(180deg, #7963FB 0%, #BD59EB 100%);
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
background-clip: text;
text-fill-color: transparent;
cursor: pointer;


 }

 .buttons{
    box-sizing: border-box;

position: absolute;
width: 459px;
height: 50px;
left: 556px;
top: 380px;

background: #E7E7E7;
border: 1px solid #E7E7E7;
border-radius: 44px;
text-align: center;

}
.link-add{
	height: 89px;
	width:  181px;
	top:  460px;
	left:  584px;
}
#p-add
{

}
.para{
	position: absolute;


left: 40px;
top: 24px;
/* identical to box height, or 33px */
display: flex;
flex-direction: row;
justify-content:space-between;
color: #929292;
margin:10px;
float:right;

}
.add-direction{
	          display: none;
	          box-sizing: border-box;
                 position: fixed;
                width: 409px;
                height: 212px;
                background: #FFFFFF;

                border: 1px solid #E4E4E4;
                box-shadow: 0px 3px 4px rgba(0, 0, 0, 0.09);
                border-radius:18px;
             transform: translate(-50%,-50%);

}



.div-header{
                display: flex;
                justify-content: space-between;
                height: 15px;
                text-align: justify;
             
                
                                

}
.div-header .title{
	font-family: 'NATS';
	 font-style: normal;
	 font-size: 24px;
	 font-weight: 400;
	 color: black;
	 padding-left: 5px;
}

.box{
	padding-left: 20px;
       justify-content: space-between;


	align-items: center;
}
.input-text{

box-sizing: border-box;

position: absolute;
width: 310px;
height: 33px;
left:  30px;
background: #FFFFF;
border: 1px solid #D5D5D5;
border-radius: 9px;


}
.link-add{
margin-top: 25;
	 padding-left: 25px;


}
.up-btn{
	background: #FFFFFF;
	border: 2px solid #A45DF2;
	border-radius: 10px;
	color: #A45DF2;
	width: 250px;
}

	 </style>

	 <!------js code to open upload file on image click----->
	  <!------code for upload image---->
	  <script>
          $(function(){

          
          $('#up-symbol').on('click',function(){
            $('#video-upload').trigger('click');
          });
        });

          </script>

 


	</head>
	<body>
	
	  	 <!------Side Nav----->
		   <div id="page">
    		<?php include 'event_calendar.php'; ?>

    		<div id="content">
	  	
        
  

<!--
         <div class="buttons" style="text-align: center;">
            <ul class="button-class" style="display:flex; list-style:none";>
			<li> <div class="p-2" style="width: 135px;height:32px; margin-top: 5%;"><a href ="receipe_details_view.php" style="text-decoration: none; color: black; font-size:15;font-weight:400% ">Recipies details</a></div></li>
			<li><div class="p-2" style="width:100px; height:32px; margin-left: 50px;">
				<a href="Ingredients.php" style="text-decoration: none; color: black; font-size:15;font-weight:400%  ">Ingredients</a></div></li>
			<li> <div class="p-2" style="width:78px; height:32px; margin-left: 50px; background-color: white;
			margin-top: 5%; border-radius: 22px; text-align:center;margin-top: 5%;" >
				<a href="#" style="text-decoration: none; color: black; font-size:15; font-weight:400% ;">Directions</a></div></li>
			</ul>
			</div>-->

<form action=" " method="post" enctype="multipart/form-data">


          	<label id="lbl" name="lbl_symbol">+</label>
          	<p > Add Directions</p>


    
                <!------image upload----->
             <!--<div class="up-link" style="display:flex; flex-direction:row; position:absolute;  height: 58px; width:160px;"> -->
		
			 <img src=".\images\upload.svg" id="up-symbol"  style="height:15px; width:15px;">  
				<input type="file" name="video-upload" style="display:none;">
			<button id="upload" name="upload" class="up-btn" style="left:450px;"> upload video</button> 
</div> 


               <!----------upload url-------->
           <!--<div class="up-url" style="display:flex; flex-direction:row;position:absolute;  height: 58px; width:160px;>-->
		  

		   <img src=".\images\url.svg" id="url-symbol" style="height:15px; width:15px;">
		   <input type="file" name="url-upload" style="display:none;">
			<button id="url" name="url" class="up-btn" style="margin-left:190px;"> upload url </button>
           </div>

 


            <!-------popup for add directions--->

            <div class="add-direction" id="add-dir" name="add-dir">
            	<div class="div-header">
            		<div class="title"> Add-Directions</div>
            		<button class="close-button" id="cls-btn" style="background: none; border:none; cursor:pointer;outline: none; font-weight:bold; padding-left: 15px;">
            		 &times;</button>
            	</div>
            	<div class="div-body">
            		
    
        <div class="box">
        <input type= "text" id="text1" class="input-text" name = "text1" value="Directions"><br>
        
       
       <div  class="link-add"> <a href ="#" id="aid" name="aid">Add more Directions</a></div>

       
        
       <button  id ="done"  name = "done" style="font-size:15; background:linear-gradient(267.44deg, rgba(204, 87, 231, 0.66) 0.01%, rgba(116, 99, 252, 0.66) 85.22%); color: white; height: 31px; width: 162px; border-radius:10px;left:124px;border-color:none;margin-top: -10%;" onclick="m_display();">  Done </button>
           
            </div>
</form>
             <!------code for popup directions------->
            <script>
            	var count=0;
            	//button for open
            	var btn = document.getElementById("lbl");
            	//button for close
            	var close_btn =document.getElementById("cls-btn");
            	var modal = document.getElementById("add-dir");
            	//link to add
            	var btn_add = document.getElementById("aid");
         
                      var btn_done =document.getElementById("done");
            	 btn.onclick =function(){
            		modal.style.display = "block";

            	}
            	close_btn.onclick = function(){
            		modal.style.display ="none";
            	       event.preventDefault();
            		
            	}
            	

            	function m_display() 

            	       {
            	       	//event.preventDefault();
                        modal.style.display ="block";

                        }


            </script>


       

	</body>
	</html>