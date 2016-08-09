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
.swiper-container-horizontal>.swiper-pagination .swiper-pagination-bullet { margin:0;}
.swiper-container-horizontal>.swiper-pagination { bottom:17px;}
.swiper-pagination-bullet { border-radius:0;  background:#B2B2B2; width:16px;}
.swiper-pagination-bullet-active { background:#000;}
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
        <div class="triangle_down" style="display:block; bottom:0; top:-134px;"></div>
     </div>
     <div>
     	 <div id="down" style="bottom:45px;">
        	<a href="javascript:();"><img src="images/down.png"></a>
        </div>
     	<div style="background:url(images/bann4.png) no-repeat; height:278px; background-size:100% 100%"></div>
     </div>
  </div>
  <div class="main">
         <div class="swiper-container" style="height:245px">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="height:244px;">
                	<div class="service">
                    	<div class="hr"></div>
                            	<div class="word_service" >
                                	<h1>1</h1>
                                    <p>SERVICE PROCESS</p>
                                    <span>
                                    	Event planning is the effective behavior to improve the occupation rate of market, 
a can implementation, operation and highlighted the creative activities, 
planning case, can enhance the enterprise visibility and brand reputation.
                                    </span>
                                </div>
                                <div class="page"></div>
                                <div class="hr_down"></div>
                      </div>
                </div>
                <div class="swiper-slide">
                		<div>
                		<div class="hr" ></div>
                            	<div class="word_service">
                                	<h1>2</h1>
                                    <p>SERVICE PROCESS</p>
                                    <span>
                                    	Event planning is the effective behavior to improve the occupation rate of market, 
a can implementation, operation and highlighted the creative activities, 
planning case, can enhance the enterprise visibility and brand reputation.
                                    </span>
                                </div>
                                <div class="page"></div>
                                <div class="hr_down"></div>
                      </div>
                </div>
                <div class="swiper-slide">
                	<div style="width:100%;">
                    		<div class="hr"></div>
                            	<div class="word_service" style="text-align:center;">
                                	<h1>3</h1>
                                    <p>SERVICE PROCESS</p>
                                    <span>
                                    	Event planning is the effective behavior to improve the occupation rate of market, 
a can implementation, operation and highlighted the creative activities, 
planning case, can enhance the enterprise visibility and brand reputation.
                                    </span>
                                </div>
                                <div class="page"></div>
                                <div class="hr_down"></div>
                      </div>
                </div>
                <div class="swiper-slide">Slide 4</div>
                <div class="swiper-slide">Slide 5</div>
                <div class="swiper-slide">Slide 6</div>
                <div class="swiper-slide">Slide 7</div>
                <div class="swiper-slide">Slide 8</div>
                <div class="swiper-slide">Slide 9</div>
                <div class="swiper-slide">Slide 10</div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
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
		pagination: '.swiper-pagination',
        paginationClickable: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        paginationClickable: true, 
		onInit: function(swiper){ //Swiper2.x的初始化是onFirstInit
		 	$(".page").text(swiper.activeIndex+1 + "/"+swiper.slides.length);
        }, 
		onSlideChangeEnd: function(swiper){ 
    	 	//alert(galleryTop.activeIndex);
			$(".page").text(swiper.activeIndex+1 + "/"+swiper.slides.length);
  	    } 
    });
	
    </script>

</body>
</html>