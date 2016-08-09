// JavaScript Document
$(document).ready(function(e) {
	$("#show").click(function(e) {
        $("#menu_zi").toggle();
		$(".menu").find("span").toggle();
		
		if ($(".img").attr("src") == "images/menu.png") {
			$(".img").attr("src","images/x.png");
		} else {
			$(".img").attr("src","images/menu.png");
		}		
    });
	$("#link_show").click(function(e) {
        $("#footer_two").toggle();
		if ($(".show_img").attr("src") == "images/b11.png") {
			$(".show_img").attr("src","images/b10.png");
		} else {
			$(".show_img").attr("src","images/b11.png");
		}		
    });
	$("#down a").click(function(e) {
        //$(document).scrollTop(800);
		 $('body').animate({scrollTop:'550px'},640);
    });
	$("#bottom").click(function(e){
		/*$("#word_three").toggle();
		$(".triangle_up").show()
		if($(".triangle_up").css('top')=="-30px"){
				$(".triangle_up").css("bottom", "-90px");
			}
			else{
				$(".triangle_up").css("top", "-30px");	
			}		
		$("#bottom").find("img").css("bottom", "15%");*/
		if($("#bottom").find('img').attr("src")=="images/down.png"){
				  $("#bottom").find('img').attr("src","images/up.png");
				 }else{
				  $("#bottom").find('img').attr("src","images/down.png"); 
		};
		
		 if($("#trans").css("bottom")=="0px"){
			 $("#trans").animate({bottom:"-100px"},500);
			  $(".swiper-button-next,.swiper-button-prev").animate({top:"91%"},500);
			 return;
		 }else{
		     $("#trans").animate({bottom:"0px"},500);
			 $(".swiper-button-next,.swiper-button-prev").animate({top:"65%"},500)
		 }
			 
					 
	});
	
	/*var a=$("#bottom").find("img").css("bottom");
	alert(a);*/
	$("#track_one").click(function(e){		
		$(".list_one").show();
		$("#l_one").show();
		$("#l_two,#l_three,#l_four").hide();
		$(".list_four,.list_two,.list_three").hide();
		if ($("#track_one").attr("src") == "images/down.png") {			
			$("#track_one").attr("src","images/black.png");
			$("#track_two").attr("src","images/down.png");
	        $("#track_three").attr("src","images/down.png");
	        $("#track_four").attr("src","images/down.png");
		    return;
		}			
	});
	$("#track_two").click(function(e){		
		$(".list_two").show();
		$("#l_two").show();
		$("#l_one,#l_three,#l_four").hide();
		$(".list_four,.list_one,.list_three").hide();
		if ($("#track_two").attr("src") == "images/down.png") {
			$("#track_two").attr("src","images/black.png");
			$("#track_one").attr("src","images/down.png");
			$("#track_three").attr("src","images/down.png");
			$("#track_four").attr("src","images/down.png");
			return;
		} 		
				
	});
	$("#track_three").click(function(e){
		$(".list_three").show();
		$("#l_three").show();
		$("#l_one,#l_two,#l_four").hide();
		$(".list_four,.list_one,.list_two").hide();
		if ($("#track_three").attr("src") == "images/down.png") {
			$("#track_three").attr("src","images/black.png");
			$("#track_one").attr("src","images/down.png");
			$("#track_two").attr("src","images/down.png");
			$("#track_four").attr("src","images/down.png");
			return;
		}				
	});
	$("#track_four").click(function(e){
		$(".list_four").show();	
		$("#l_four").show();
		$("#l_one,#l_two,#l_three").hide();
		$(".list_two,.list_one,.list_three").hide();
		if ($("#track_four").attr("src") == "images/down.png") {
			$("#track_four").attr("src","images/black.png");
			$("#track_one").attr("src","images/down.png");
			$("#track_two").attr("src","images/down.png");
			$("#track_three").attr("src","images/down.png");
			return;
		}		
	});
	$(".showview p").click(function(e){
		location.href='index.php';	
	});
	/***********滑动***********/
	$(".right").click(function(){
		if($(".right").attr("src","images/right_black.png")){
			$(".left").attr("src","images/left.png")	
		}
					
	});
	$(".left").click(function(){	
		if($(".left").attr("src","images/left_black.png")){
			$(".right").attr("src","images/right.png")
			}
				
	});
	/*搜索*/
	$('#server_btn').click(function(){
		$('#server_btn').css('display', 'none');
		$('.text').css('display', 'block');
	});
	
	$('.return').click(function(){
		history.go(-1);
	});
	
});