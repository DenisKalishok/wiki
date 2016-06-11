$(document).ready(function(){
	$("#street").keyup(function(){
        if(street.value.length >=3){
			var input_street = $("#street").val();
			$.ajax({
				url : "/wordpress/wp-content/themes/wiki/module_check_street/get_street.php",
				type : "POST",
				data : {input_street : input_street},
				success : function(data){
				$("#street_list").html(data);
				}
			});
		}
	});
	
    $("#check").click(function(){
        if(street.value.length >=3){
			var input_street = $("#street").val();
			$.ajax({
				url : "/wordpress/wp-content/themes/wiki/module_check_street/get_house.php",
				type : "POST",
				data : {input_street : input_street},
				success : function(data){
				var content = data.slice(0,-2);
				$("#message").html(content);
				}
			});
		}
	});
});
