$(document).ready(function(){

	


		$("#generateBtn").hover(function(){
			$(this).attr("src","/shutkizator/img/generate_btn_hover.png");
		},function(){
			$(this).attr("src","/shutkizator/img/generate_btn.png");
		});


		var tmpFacebookShare = $("#facebookShare");
		$("#facebookShare").remove();
		$("#shutkDialog").append(tmpFacebookShare);

});