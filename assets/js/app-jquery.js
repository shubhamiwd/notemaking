/*
Template Name: App JS.
*/
jQuery(function($){

	$(document).on('click', '.copy', function(e){
	  var serialized = $(this.form).serializeArray();
	  var text = serialized.map(function(field){
	  return field.value}).join("\n");
	  $("#copy").show().val(text)[0].select();
	  document.execCommand("copy");
	  $("#copy").hide();
	  return false
	}); 
	 
	/***************PopUp_Select_Option_One************/
	
		$(".each_model_data").click(function(){
			var favorite = [];
			var fieldname  = $(this).data('fieldname');
			var spanCls    = $(this).data('spancls');
			var checkedval = $(this).data('checkedvalid');
			var teethname  = $(this).data('teethname');

			$.each($("input[name='"+fieldname+"']:checked"), function(){            
                favorite.push($(this).val());
            });
			
			var sel_teeth = $("."+spanCls+"").html(favorite.join(", "));
			$("#"+checkedval+"").val(""+teethname+":" + favorite.join(", ")); 
        });
		
		/*****************Store_DataIn LocalStorage*************/
		
		var checkboxValues = JSON.parse(localStorage.getItem('checkboxValues')) || {},
		$checkboxes = $("#checkbox-container :radio");
		$checkboxes.on("change", function(){
		  $checkboxes.each(function(){
			checkboxValues[this.id] = this.checked;
		  });
		  localStorage.setItem("checkboxValues", JSON.stringify(checkboxValues));
		});
		// On page load
		$.each(checkboxValues, function(key, value){
		  $("#" + key).prop('checked', value);
		});
		
	
	/****************Select Options_LocatStorage************/
		
		if (localStorage.getItem('form_frame')) {
		   var select_opt = $("#form_frame option").eq(localStorage.getItem('form_frame')).prop('selected', true);
		}

		 $("#form_frame").on('change', function() {
			localStorage.setItem('form_frame', $('option:selected', this).index());
		});
		
		/************Copy_to_clipboard************/
		
		$(".copy").click(function(){
				$(".txt_cpd").fadeIn(1000, function(){
					$(".txt_cpd").delay(2000).fadeOut(5000);
				});
		});
		
	/**********La_Extra_Fields_Code**********/
	
		var lastClicked;
		$(".la_class").click(function(e){
			var clsName = $(this).data('sectionclass');
			if(clsName){
				$("."+clsName).show();
			}
				$('.'+lastClicked).hide();
			lastClicked = clsName;	
		});

			/*********Aajx_For_Templates******/

		$("#copy_all_fields").click(function(){	
		var str = $("form").serialize();
		$.ajax({  
			cache: false,
			type:'POST', // type of action POST || GET
            //datatype:'json', 
			url: 'http://form-build.com/notemaking/pdf.php',  
			data: $("form").serialize(),
			success: function(response){  
				$("#results").html("Email Sent to the Admin.");
			},
                error: function(xhr, resp, text) {
                    console.log(xhr, resp, text);
                }
		});
		});
		//}
/* 		$( "input[type='checkbox'], input[type='radio']" ).on( "click", showValues  );
		$( "select" ).on( "change", showValues  );
		$( "input" ).on( "keyup", showValues  );
		showValues(); */
	

 /* 		 $("#copy_all_fields").click(function(){
			 
			//$("#myform_recall").each(function(){
				var AllFields = $(this).find(':input'); //<-- Should return all input elements in that specific form.
				alert("====>" + AllFields);
			//}); 
			 
			//$("#myform_recall").submit();
			//var value = $("form input[type='radio']:checked").val();
			//alert("Value of Changed Radio is : " +value);
		 }); */


		});	/****End Jquery Function****/
		
	/************Copy_to_Clipboard**************/
	
		function copiedReferral() {
			var copyText = document.getElementById("referralcode");
			copyText.select();
			copyText.setSelectionRange(0, 99999);
			document.execCommand("copy");
			var tooltip = document.getElementById("referralTooltip");
			//tooltip.innerHTML = "Copied: " + copyText.value;
			tooltip.innerHTML = "Referral Code Copied";
		}

		function outFunc() {
			 var tooltip = document.getElementById("referralTooltip");
			 tooltip.innerHTML = "Copy to clipboard";
		}
	
	/***********Clear_Storage*************/
	
	function storage_data(){
		//$('.required').each(function(){
		/*	if( $(this).val() == ""){
			alert('Please fill all the fields');
			return false;
        } else{
			$('#myform_recall')[0].reset();
			$('#myform_recall').delay(50).fadeOut().fadeIn('medium');
			$('.all_messages').html('Data Copied.');
			
		} 
		}); 
			return true; 	*/
		localStorage.clear();
	} 
	//sgwatchhubxproximacy
	//5hlJR?#nQ_st
	
	/*************Template_Search**************/
	
	function templateSearch() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
	  }
	}
	
	/*************EnD_Of_File**************/
	