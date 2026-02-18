	$(document).ready(function() {
	    $("#new-journal").click(function() {
	    	$("#oldissn-div").hide();
	    	$("#former-title").hide();
	    });

	    $("#print-version").click(function() {
	    	$("#oldissn-div").show();
	    	$("#former-title").hide();
	    });

	    $("#online-version").click(function() {
	    	$("#oldissn-div").show();
	    	$("#former-title").hide();
	    });

	    $("#change-of-title").click(function() {
	    	$("#oldissn-div").hide();
	    	$("#former-title").show();
	    });

		$("#issn-application-form").submit(function(e) {
			e.preventDefault(); 
			//activate(1);
			$.ajax({
				type: "POST",
				url: site_url+"issn/submitapplication",
				data: $('#issn-application-form').serialize(),
				dataType: "json",
				success: function(result){ 
					if(result.category == "success"){
						var url = site_url+'issn/thankyou/'+result.message;
						window.location.href = url;
					}else{
						var url = site_url+'issn/applicationissn';
						window.location.href = url;
					}
					//activate(0);
				}
			});
			
		});
	});

	function publicationformat(ref){
		var value = $(ref).val();
		if(value == 'Print'){
			alert("Now you are requested to mention RNI No.!");
			$("#rnidiv").show();
		}else{
			$("#rnidiv").hide();
		}
	}

	function resetapplicationform() {
	    $("#issn-application-form").reset();
	}

	function usernamerequired(){
		if($("#userpwd").prop('checked') == true){
			$("#userpwdfields").show();
		}else{
			$("#userpwdfields").hide();
		}
	}

	function readterms(){
		if($("#readterms").prop('checked') == true){
			$.ajax({
				type: "POST",
				url: site_url+"issn/sessionstart",
				dataType: "json",
				success: function(result){ 
					$('#language-entry-form-error').html('');
					$('#language-entry-form-success').html('');
					if(result.category == "success"){
						$('#language-entry-form-success').html(result.message);
					}else{
						$('#language-entry-form-error').html(result.message);
					}
					//activate(0);
				}
			});
			var url = site_url+'issn/applicationissn';
			window.location.href = url;
		}else{
			alert("Please confirm that you have read and agreed to the terms and conditions.");
		}
	}

	function printpreview(){
		var body = document.getElementById('body').innerHTML;
		var printdata = document.getElementById('printpreview').innerHTML;
		document.getElementById('body').innerHTML = printdata;
		window.print();
	}

