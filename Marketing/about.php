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
<script>
	$(document).ready(function(e) {
        $(".link_items").click(function(){
			location.href='items.php';
		});
		$(".link_service,").click(function(){
			location.href='service_items.php';
		});
		$(".link_team").click(function(){
			location.href='team.php';
		});
    });
</script>
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
     	<p>ABOUT US</p>
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
     	<div style="background:url(images/bann.png) no-repeat; background-size:100% 100%; height:278px"></div>
     </div>
  </div>
  <div class="main"> 
      <ul>
      	<li style="background:url(images/r1.png) no-repeat; background-size:100% 100%" class="link_items"></li>
        <li>
          <div class="content">
            <h1>SERVICE ITEMS</h1>
            <p>Event planning is the effective behavior to improve the occupation rate of market, a can implementation, operation and highlighted the creative activities, planning case, can enhance the enterprise visibility and brand reputation.</p>
            <div class="down"><img src="images/down.png" class="link_items"><p>Learn More</p></div>
          </div>
          <div class="triangle_left"></div>
        </li>
        <li>
          <div class="content">
            <h1>TEAM INTRODUCTION</h1>
            <p>Event planning is the effective behavior to improve the occupation rate of market, a can implementation, operation and highlighted the creative activities, planning case, can enhance the enterprise visibility and brand reputation.</p>
            <div class="down"><img src="images/down.png" class="link_team"><p>Learn More</p></div>
          </div>
          <div class="triangle_right"></div>
        </li>
        <li style="background:url(images/r2.png) no-repeat; background-size:100% 100%;" class="link_team"></li>
        <li style="background:url(images/r3.png) no-repeat; background-size:100% 100%" class="link_service"></li>
        <li>
          <div class="content">
            <h1>SERVICE ITEMS</h1>
            <p>Event planning is the effective behavior to improve the occupation rate of market, a can implementation, operation and highlighted the creative activities, planning case, can enhance the enterprise visibility and brand reputation.</p>
            <div class="down"><img src="images/down.png" class="link_service" ><p>Learn More</p></div>
          </div>
          <div class="triangle_left"></div>
        </li>
        
      </ul>
   </div>
  
     <div id="none"></div>
   <?php require('footer.php'); ?>
</div>
</body>
</html>