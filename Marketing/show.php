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
<meta name="keywords" content="Show" />
<meta name="description" content="Show" />
<title>Show</title>
<link href="css/css.css" rel="stylesheet" type="text/css">
<link href="css/swiper.min.css" rel="stylesheet" type="text/css">
<script src="js/jquery.min.js"></script>
<script src="js/common.js" language="javascript"></script>
<style> 
    .swiper-container {
        width: 100%;
        height: 100%;
    }
    .swiper-slide {
      
    }
.swiper-button-next, .swiper-button-prev { top:91%;}
.swiper-button-next { right:30%;}
.swiper-button-prev { left:30%}
.swiper-slide img { width:100%;}
</style>
</head>

<body>
<div id="wrapper">
	<div id="header">
    	<div class="showview"><p>SHOWVIEW</p></div>
         <?php require('menu.php'); ?>           	
    </div>
    <div id="banner">
         <?php require('menu_zi.php'); ?>
        <div id="show_img">
           <div class="swiper-container">
                <div class="swiper-wrapper">                
                    <div class="swiper-slide"><img src="images/show.png"></div>
                    <div class="swiper-slide"><img src="images/show.png"></div>
                    <div class="swiper-slide"><img src="images/show.png"></div>
                    <div class="swiper-slide"><img src="images/show.png"></div>
                    <div class="swiper-slide"><img src="images/show.png"></div>
                    <div class="swiper-slide"><img src="images/show.png"></div>
                    <div class="swiper-slide"><img src="images/show.png"></div>
                    <div class="swiper-slide"><img src="images/show.png"></div>
                    <div class="swiper-slide"><img src="images/show.png"></div>
                    <div class="swiper-slide"><img src="images/show.png"></div>
                </div>
                
                <!-- Add Arrows -->
                <div class="swiper-button-next"><img src="images/ri.png"></div>
                <div class="swiper-button-prev"><img src="images/li.png"></div>
            </div>    
        </div>
        <div id="trans"> 
        	<div class="page" style="position:absolute; z-index:100; left:0; right:0; margin:0 auto; color:#fff; top:-60px; "></div>
                <div class="triangle_up" style="border-width:0 50px 50px; top:-50px"></div> 
                <div id="bottom"><img src="images/down.png"></div>
        			<div id="word_three">
                       <p>SALES PROMOTION</p>                           
                       <span>Event planning is the effective behavior to improve the occupation rate of market, a can implementation, operation and highlighted the creative activities,planning case, can enhance the enterprise visibility and brand reputation.</span>
                     </div>
       	</div>        
      </div> 
     <!-- <div style="height:50px; opacity:0.6"></div>   --> 
   <?php require('footer.php'); ?>
 <script src="js/swiper.min.js"></script> 
<script>
    var swiper = new Swiper('.swiper-container', {       
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
		onInit: function(swiper){ //Swiper2.x的初始化是onFirstInit
		 	$(".page").text(swiper.activeIndex+1 + "/"+swiper.slides.length);
        }, 
		onSlideChangeEnd: function(swiper){ 
    	 	//alert(galleryTop.activeIndex);
			$(".page").text(swiper.activeIndex+1 + "/"+swiper.slides.length);
  	    } 
    });
</script>   
</div>

</body>
</html>
