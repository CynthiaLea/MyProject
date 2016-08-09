<!doctype html>
<html>
<head>
<meta property="qc:admins" content="1604442224721646157633711" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<META HTTP-EQUIV="expires" CONTENT="Wed, 26 Feb 1990 01:01:01 GMT">
<META HTTP-EQUIV="Last-Modified" CONTENT="Wed, 26 Feb 1990 02:02:02 GMT">
<META HTTP-EQUIV="Cache-Control" CONTENT="no-cache, must-revalidate">
<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
<meta name="viewport" id="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=1,user-scalable=no" />
<meta content="telephone=no, address=no" name="format-detection">
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
<meta name="keywords" content="ABOUT" />
<meta name="description" content="ABOUT" />
<title>ABOUT</title>
<link href="css/css.css" rel="stylesheet" type="text/css">
<link href="css/swiper.min.css" rel="stylesheet" type="text/css">
<script src="js/jquery.min.js"></script>
<script src="js/common.js" language="javascript"></script>
<style>
	 .swiper-container {
        width: 100%;
        height:auto; 	
		margin-left: auto;
        margin-right: auto; 
    }
    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }
	.swiper-button-next{ right:-12px;}
	.swiper-button-prev { left:-5px;}
</style>
</head>

<body>
<div id="wrapper">
	<div id="header">
    	<div class="showview"><p>SHOWVIEW</p></div>
        <div class="menu">
        	<ul>
            	<li><img src="images/server.png"></li>
            	<li id="show"><img src="images/menu.png" class="img"></li>
            	<li><span>MENU</span></li>
            </ul>            
        </div>               	
    </div>
  <div id="banner"> 
 	 <?php require('menu_zi.php');?>
     <div class="latest">
     	<p>SERVICE ITEMS</p>
        <span>
        	Event planning is the effective behavior to improve the 
            occupation rate of market, a can implementation,
            operation and highlighted the creative activities, planning case,
            can enhance the enterprise visibility and brand reputation.
        </span>
     </div>
     <div>
    	<div class="triangle_down" style="display:block; bottom:0; top:-134px;"></div>
     	 <div id="down" style="bottom:45px;">
        	<a href="javascript:();"><img src="images/down.png"></a>
        </div>
     	<div style="background:url(images/bann2.png) no-repeat; background-size:100% 100%; height:278px"></div>
     </div>
  </div>
  <div class="main">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                      <div style="position:relative;">
                      <div class="triangle_up" style="bottom:96px; top:-100px;"></div>
                       <img src="images/r4.png" style="width:100%;">
                        <div class="content" style="height:120px; padding-top:16%; width:100%;">
                       	   
                            <h1>SERVICE ITEMS</h1>
                            <p>Event planning is the effective behavior to improve the occupation rate of market, a can implementation, operation and highlighted the creative activities, planning case, can enhance the enterprise visibility and brand reputation.</p>
                          </div>
                        <img src="images/r5.png" style="width:100%;">
                       </div>
                       <div class="triangle_down" style="display:block; bottom:-90px;; top:100px;"></div>
                </div>
                <div class="swiper-slide">
                	 <div style="position:relative;">
                      <div class="triangle_up" style="bottom:96px; top:-100px;"></div>
                       <img src="images/r4.png" style="width:100%;">
                        <div class="content" style="height:120px; padding-top:16%; width:100%;">
                       	   
                            <h1>SERVICE ITEMS</h1>
                            <p>Event planning is the effective behavior to improve the occupation rate of market, a can implementation, operation and highlighted the creative activities, planning case, can enhance the enterprise visibility and brand reputation.</p>
                          </div>
                        <img src="images/r5.png" style="width:100%;">
                       </div>
                       <div class="triangle_down" style="display:block; bottom:-90px;; top:100px;"></div>
                </div>
                <div class="swiper-slide">Slide 3</div>
                <div class="swiper-slide">Slide 4</div>
                <div class="swiper-slide">Slide 5</div>
                <div class="swiper-slide">Slide 6</div>
                <div class="swiper-slide">Slide 7</div>
                <div class="swiper-slide">Slide 8</div>
                <div class="swiper-slide">Slide 9</div>
                <div class="swiper-slide">Slide 10</div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"><img src="images/right.png" class="right"></div>
        	<div class="swiper-button-prev"><img src="images/left.png" class="left"></div>
        </div>
  </div>
   <div id="none"></div>
   <?php require('footer.php'); ?>
</div>
<script src="js/swiper.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.swiper-container', {
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
		 paginationClickable: true, 
    });
    </script>
</body>
</html>