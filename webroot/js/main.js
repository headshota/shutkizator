$(document).ready(function(){

	// Ajax call from Generate Button

	$("#generateBtn").click(function(event){
		event.preventDefault();
		$.ajax({
		'method'	: 'GET',
		'url'		: 'shutks/view',
		'success' 	: function(data){
			alert(data);
		}
		})
	})

})