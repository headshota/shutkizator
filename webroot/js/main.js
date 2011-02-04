$(document).ready(function(){

	// Ajax call from Generate Button


	$("#generateBtn").click(function(event){
		event.preventDefault();
		alert('test');
		$.ajax({
			   type: "POST",
			   url: "http://avoe.ge/index.php",
			   data: "",
			   success: function(msg){
				 alert( "Data Saved: " + msg );
			   }
			 });	
		/* $.ajax({		
		'type'	: 'GET',
		'url'		: 'shutks/view',
		'success' 	: function(data){	
			var myJSON = jQuery.parseJSON(data);

			$( "#shutkDialog" ).dialog({	
				autoOpen	: false,				
				height		: 250,
				width		: 500,			
				resizable	: false
			});
			
			$("#shutkDialog").html("ხოოო და, " + myJSON.Shutk['text']);
			$("#shutkDialog").dialog({ title: myJSON.Shutk['name'] });
			$("#shutkDialog").dialog('open');
			return false;
		}
		});	 */

	});
	
	// Image Hovers
	
	$("#generateBtn").hover(function(){
		$(this).attr('src','img/generate_btn_hover.png');	
	},function(){	
		$(this).attr('src','img/generate_btn.png');
	});

})