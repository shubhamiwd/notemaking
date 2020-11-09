/*
Template: App Ajax
*/

jQuery(function($){	
	//$('#next_btn_auto').hide();
	$('.cp_cl').on('click', function(){
		//$("#butsave").attr("disabled", "disabled");
		var f_name      = $('#f_name').val();
		var sur_name    = $('#sur_name').val();
		var u_email     = $('#u_email').val();
		var sel_country = $('#sel_country').val();
		var u_password  = $('#u_password').val();
		var terms_accept= $('#terms_accept').val();
		if(f_name!="" && sur_name!="" && u_email!="" && sel_country!="" && u_password!=""){
			$.ajax({
				url: "functions.php",
				type: "POST",
				data: {
					f_name: f_name,
					sur_name: sur_name,
					u_email: u_email,
					sel_country: sel_country,				
					u_password: u_password,				
					terms_accept: terms_accept				
				},
				cache: false,
				success: function(response){
					var dataResult = JSON.parse(response);
					if(dataResult.statusCode==200){
						//alert(dataResult.unique_id);
						$('#unique_id').val(dataResult.unique_id);
						$("#butsave").removeAttr("disabled");
						$('#fupForm').find('input:text').val('');
						$("#success").show();
						$('#success').html('You are register now, please complete the next process.!'); 
						$('#butsave').fadeOut("slow");
						$('#next_btn_auto').show();
						$('#terms_accept').hide();
						$('#term_label').hide();
						$("#terms_accept").prop("checked", false);
						//$('#next_btn_auto').click();	
					}else if(dataResult.statusCode==201){
					   //$("#success")hide();
					   $("#error_accur").show();
					   $('#error_accur').html('This email is already in our records. Please try to reset your password'); 
					}else if(dataResult.statusCode==202){
					   //$("#success")hide();
					   $("#error_accur").show();
					   $('#error_accur').html('Someting went wrong. Please contact to our support.'); 
					} 
				}
			});
		}else{
			alert('Please fill all the field !');
		}
	});
	
	/**********form_validation**********/

	function checkPasswordMatch() {
      var password = $("#u_password").val();
      var confirmPassword = $("#c_password").val();
      if (password != confirmPassword){
        $("#message").html("Passwords does not match!");
		$("#u_password, #c_password").css("background-color", "#ffc0cb");
		return false;
	  }else{
        $("#message").html("Passwords match.");
		$("#u_password, #c_password").css("background-color", "#d6e9c6");
	  }}
       $("#c_password").keyup(checkPasswordMatch);
	   
	
	/**********************Builder_Ajax***************************/
	/* $('#form_cat').on('change', function () {
	var selectedText = $("#form_cat option:selected").val();
        //alert(selectedText);
	}); */
	
	/**********DataTable_JS************/
	//$(document).ready(function() {
    jQuery('#example').DataTable();
	//} );
	//jQuery("#formTemplates").click();	
	//$("#formTemplates").children("option[value='user']").prop('selected',true);

	$("#auto_click").click(function(){
		jQuery('#formTemplates').click();
	});
	
	$("#myModal").modal('show');
	
	/************************/
	
}); 