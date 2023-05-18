<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Infits</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
    @import url('https://fonts.googleapis.com/earlyaccess/nats.css');
    @font-face {
    font-family: 'NATS';
    src:url('font/NATS.ttf.woff') format('woff'),
        url('font/NATS.ttf.svg#NATS') format('svg'),
        url('font/NATS.ttf.eot'),
        url('font/NATS.ttf.eot?#iefix') format('embedded-opentype'); 
    font-weight: normal;
    font-style: normal;
}

body {
        font-family: 'NATS', serif !important;
    }

    .card {
        width: 403px;
        height: 295px;
        background: #FFFFFF;
        box-shadow: 0px 2.04305px 5.10762px rgba(0, 0, 0, 0.25);
        border-radius: 20.4305px;
    }

    .cards {
        max-width: 1000px;
        margin: 0 auto;
        display: grid;
        gap: 2.7rem;
        grid-template-columns: repeat(auto-fit, minmax(450px, 1fr));
        display: flex;
    flex-wrap: wrap;
    }
    .cancel{
        height: 46px;
    width: 121px;
    color:#7282FB;
    background: #FFFFFF;
    border: 2px solid #7282FB;
    border-radius: 8.99476px
    }
    .card {
           width: 395px;
           height: 287px !important;
        background: #FFFFFF;
        box-shadow: 0px 2.04305px 5.10762px rgba(0, 0, 0, 0.25);
        border-radius: 20.4305px !important;
        padding: 14px;
    }
    .kitbtn{
        background: #7282FB;
        border-radius: 8.99476px;
        Width:87.22px;
       Height:41.14px;
        border:none;
     color: #FFFFFF;
    }
    .kitbtn2{
    width: 320px;
     height: 41.14px;
       background: #7282FB;
       border-radius: 8.99476px;
     border:none;
        color: #FFFFFF;
        margin-left: 22px;
        margin-top: -6px;
}
    .card-upper-image {
        display: inline;
    }
    .card-upper-image img {
        max-width: 100%;
        max-height: 100%;
     display: block;
    }
    .card-middle {
        padding: 1rem;
    }

    .card-below {
        display: inline;
    }
    .btn1{
    border: none;
    background-color: #9C74F5;
    color: white;
    border-radius: 100%;
    font-size:2.7rem;
    padding-left: 1.4rem;
    padding-right: 1.4rem;
    position:relative;
    margin-left:93%;
    overflow: hidden;
    margin-bottom: 1rem;
}

.toptext{
    display:flex;
    justify-content:space-between;
    height:56px;
    align-items:center;
   padding: 30px 5%;
   margin:20px 10px;
}
#heading{
    font-size:2.6rem ;
    /* padding: 6px;
    margin: 13px; */
}
.left{
    display: flex;
}
.hide {
  display: none;
}

.btn1:hover + .hide {
  display: block;
}

.col-2 {
    position: relative;
}


.hidden-div {
        display: none;
    position: absolute;
    top: 0;
    padding: 10px;
    background-color: #f1f1f1;

    top: 45px;
    right: 3px;
    padding: 26px;

width: 388px;
height: 192px;
background: #FFFFFF;
border: 1.74869px solid #E4E4E4;
box-shadow: 0px 5.24607px 6.99476px rgba(0, 0, 0, 0.09);
border-radius: 15px;

}

.col-2:hover .hidden-div {
    display: block;
    z-index: 1000;
}
@media screen and (max-width: 480px){
   .container{
    width:auto;
   }
   .kitbtn2{
     margin-left:2px;
           }
  
   #heading {
    font-size: 1.6rem;
    letter-spacing: 1px;
   }
   .btncont {
    margin-top: 16px;
}
}
@media screen and (max-width: 720px) {
    #btn1{   
        right: 3rem;
     }
}
    </style>
    </head>
<body>
    <?php
include "navbar.php";
?>
<!-- <div class="maincontainer"> -->
    <div class="toptext">
          <div class="left" id="heading">Connect a diet plan with the diet chart</div>
           <div class="right">
           <div class="card-body">
<button type=""class="cancel">Cancel</button></div>
          
            </div>
            </div>
           </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="container">
                <div class="cards">

                                        <div class="card" container>
                        <div class="card-upper row">
                            <div class="card-upper-image col-4">
                                <img src="images/fruit_salad.svg" alt="">
                            </div>
                            <div class="card-upper-details col-8">
                                <div class="row">
                                    <div class="col"
                                        style="margin-top:5px;margin-bottom:5px; font-size:30px;font-weight:400 !important;">
                                        FEATURES </div>
                                        <div class="col-2"
                                        style="margin-top:14px!important;margin-right: 15px">
                                        <img src="images/v12.svg" alt="">

                                            <div class="hidden-div">
                                        <button class="kitbtn" style="margin-right:9px">Vegan </button>
                                        <button class="kitbtn">Vegan </button>
                                        <div class="col"
                                        style="margin-top:5px;margin-bottom:5px;margin-right:5px;margin-left: -10px; font-size:26px;font-weight:400 !important;">
                                        FEATURES</div>
                                         <div  class="isum"style="display:inline-block;width:auto; ;">
                                       <i style="color:black; margin-right:5px; margin-left:5px;" class="fa-regular fa-circle-check"></i>Lorem ipsum 
                                        <i style="color:black;margin-right:5px; margin-left:5px;" class="fa-regular fa-circle-check"></i>Lorem ipsum 
                                        <i style="color:black;margin-right:5px; margin-left:5px;" class="fa-regular fa-circle-check"></i>Lorem ipsum 
                                        <i style="color:black;margin-right:5px; margin-left:5px;" class="fa-regular fa-circle-check"></i>Lorem ipsum 
                                        </div>


                                            </div>

                                        </div>
                                        <div class="w-100">
                                        </div>
                                   
                                    <div class="col-5" style="margin-top:5px;margin-bottom:5px; ">
                                    <button class="kitbtn">Keto </button>
                                    </div>
                                     <div class="col-5" style="margin-top:5px;margin-bottom:5px; ">
                                          <button class="kitbtn">Vegan </button>

                                  </div>
                                  <div class="w-100"></div>
                                    <div class="card-middle row" style="color:#919191;padding-left: 25px;padding-right: 14px;">Lorem ipsum dolor sit amet, sed Lorem ipsum dolor sit amet, sed ore m ipsum dolor sit amet.</div>

                                  </div>
                            </div>
                            <div class="card-below row">
                                <div class="col">
                                    
                                  <div class="row">  
                                     <div class="col-7" style="margin-top:5px;margin-bottom:5px; ">
                                          <button class="kitbtn2">Keto </button>
                                     </div>
                                  <div class="row">
                              </div>
                           </div>
                        </div>
                            </div>
                        </div>
                    </div>
 

                    <div class="card" container>
                        <div class="card-upper row">
                            <div class="card-upper-image col-4">
                                <img src="images/fruit_salad.svg" alt="">
                            </div>
                            <div class="card-upper-details col-8">
                                <div class="row">
                                    <div class="col"
                                        style="margin-top:5px;margin-bottom:5px; font-size:30px;font-weight:400 !important;">
                                        Healthy Diet</div>
                                        <div class="col-2"
                                        style="margin-top:14px!important;margin-right: 15px">
                                        <img src="images/v12.svg" alt="">


                                        <div class="hidden-div">
                                        <button class="kitbtn" style="margin-right:9px">Vegan </button>
                                        <button class="kitbtn">Vegan </button>
                                        <div class="col"
                                        style="margin-top:5px;margin-bottom:5px;margin-right:5px;margin-left: -10px; font-size:26px;font-weight:400 !important;">
                                        FEATURES</div>
                                         <div  class="isum"style="display:inline-block;width:auto; ;">
                                       <i style="color:black; margin-right:5px; margin-left:5px;" class="fa-regular fa-circle-check"></i>Lorem ipsum 
                                        <i style="color:black;margin-right:5px; margin-left:5px;" class="fa-regular fa-circle-check"></i>Lorem ipsum 
                                        <i style="color:black;margin-right:5px; margin-left:5px;" class="fa-regular fa-circle-check"></i>Lorem ipsum 
                                        <i style="color:black;margin-right:5px; margin-left:5px;" class="fa-regular fa-circle-check"></i>Lorem ipsum 
                                        </div>


                                            </div>


                                        </div>
                                        <div class="w-100">
                                        </div>
                                   
                                    <div class="col-5" style="margin-top:5px;margin-bottom:5px; ">
                                    <button class="kitbtn">Keto </button>
                                    </div>
                                     <div class="col-5" style="margin-top:5px;margin-bottom:5px; ">
                                          <button class="kitbtn">Vegan </button>

                                  </div>
                                  <div class="w-100"></div>
                                    <div class="card-middle row" style="color:#919191;padding-left: 25px;padding-right: 14px;">Lorem ipsum dolor sit amet, sed Lorem ipsum dolor sit amet, sed ore m ipsum dolor sit amet.</div>

                                  </div>
                            </div>
                            <div class="card-below row">
                                <div class="col">
                                    
                                  <div class="row">  
                                     <div class="col-7" style="margin-top:5px;margin-bottom:5px; ">
                                          <button class="kitbtn2">Keto </button>
                                     </div>
                                  <div class="row">
                              </div>
                           </div>
                        </div>
                            </div>
                        </div>
                    </div>
 
                    <div class="card" container>
                        <div class="card-upper row">
                            <div class="card-upper-image col-4">
                                <img src="images/fruit_salad.svg"  alt="">
                            </div>
                            <div class="card-upper-details col-8">
                                <div class="row">
                                    <div class="col"
                                        style="margin-top:5px;margin-bottom:5px; font-size:30px;font-weight:400 !important;">
                                        Healthy Diet</div>
                                        <div class="col-2"
                                        style="margin-top:14px!important;margin-right: 15px">
                                        <img src="images/v12.svg" alt="">

                                        <div class="hidden-div">
                                        <button class="kitbtn" style="margin-right:9px">Vegan </button>
                                        <button class="kitbtn">Vegan </button>
                                        <div class="col"
                                        style="margin-top:5px;margin-bottom:5px;margin-right:5px;margin-left: -10px; font-size:26px;font-weight:400 !important;">
                                        FEATURES</div>
                                         <div  class="isum"style="display:inline-block;width:auto; ;">
                                       <i style="color:black; margin-right:5px; margin-left:5px;" class="fa-regular fa-circle-check"></i>Lorem ipsum 
                                        <i style="color:black;margin-right:5px; margin-left:5px;" class="fa-regular fa-circle-check"></i>Lorem ipsum 
                                        <i style="color:black;margin-right:5px; margin-left:5px;" class="fa-regular fa-circle-check"></i>Lorem ipsum 
                                        <i style="color:black;margin-right:5px; margin-left:5px;" class="fa-regular fa-circle-check"></i>Lorem ipsum 
                                        </div>


                                            </div>


                                        </div>
                                        <div class="w-100">
                                        </div>
                                   
                                    <div class="col-5" style="margin-top:5px;margin-bottom:5px; ">
                                    <button class="kitbtn">Keto </button>
                                    </div>
                          <div class="col-5" style="margin-top:5px;margin-bottom:5px; ">
                                 <button class="kitbtn">Vegan </button>

                                 </div>
                              <div class="w-100"></div>
                                    <div class="card-middle row" style="color:#919191;padding-left: 25px;padding-right: 14px;">Lorem ipsum dolor sit amet, sed Lorem ipsum dolor sit amet, sed ore m ipsum dolor sit amet.</div>
                                    
                            </div>
                            </div>
                            <div class="card-below row">
                                <div class="col">
                                    
                                  <div class="row">  
                                     <div class="col-7" style="margin-top:5px;margin-bottom:5px; ">
                                          <button class="kitbtn2">Keto </button>
                                     </div>
                                  <div class="row">
                              </div>
                           </div>
                        </div>
                            </div>
                        </div>
                    </div>
                    <div class="card" container>
                        <div class="card-upper row">
                            <div class="card-upper-image col-4">
                                <img src="images/fruit_salad.svg" alt="">
                            </div>
                            <div class="card-upper-details col-8">
                                <div class="row">
                                    <div class="col"
                                        style="margin-top:5px;margin-bottom:5px; font-size:30px;font-weight:400 !important;">
                                        Healthy Diet</div>
                                        <div class="col-2"
                                        style="margin-top:14px!important;margin-right: 15px">
                                        <img src="images/v12.svg" alt="">
                                        

                                        <div class="hidden-div">
                                        <button class="kitbtn" style="margin-right:9px">Vegan </button>
                                        <button class="kitbtn">Vegan </button>
                                            <div class="col"
                                        style="margin-top:5px;margin-bottom:5px;margin-right:5px;margin-left: -10px; font-size:26px;font-weight:400 !important;">
                                        FEATURES</div>
                                         <div  class="isum"style="display:inline-block;width:auto; ;">
                                       <i style="color:black; margin-right:5px; margin-left:5px;" class="fa-regular fa-circle-check"></i>Lorem ipsum 
                                        <i style="color:black;margin-right:5px; margin-left:5px;" class="fa-regular fa-circle-check"></i>Lorem ipsum 
                                        <i style="color:black;margin-right:5px; margin-left:5px;" class="fa-regular fa-circle-check"></i>Lorem ipsum 
                                        <i style="color:black;margin-right:5px; margin-left:5px;" class="fa-regular fa-circle-check"></i>Lorem ipsum 
                                        </div>


                                            </div>


                                        </div>
                                        <div class="w-100">
                                        </div>
                                   
                                    <div class="col-5" style="margin-top:5px;margin-bottom:5px; ">
                                    <button class="kitbtn">Keto </button>
                                    </div>
                                 <div class="col-5" style="margin-top:5px;margin-bottom:5px; ">
                                 <button class="kitbtn">Vegan </button>

                                 </div>
                                  <div class="w-100"></div>
                                    <div class="card-middle row" style="color:#919191;padding-left: 25px;padding-right: 14px;">Lorem ipsum dolor sit amet, sed Lorem ipsum dolor sit amet, sed ore m ipsum dolor sit amet.</div>               
                                 </div>
                              </div>
                            <div class="card-below row">
                                <div class="col">         
                                  <div class="row">  
                                     <div class="col-7" style="margin-top:5px;margin-bottom:5px; ">
                                          <button class="kitbtn2">Keto </button>
                                     </div>
                                  <div class="row">
                              </div>
                           </div>
                        </div>
                            </div>
                        </div>
                    </div>
                   </div>
    <div class="btncont">
  <button class="btn1" >+</button>
<div class="hide">Create
new</div>
</div>
</div>
</body>