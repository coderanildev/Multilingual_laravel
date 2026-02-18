function ajax_call(form_id,ajax_url,error_id,success_id,redirect_url,ajax_method,datatype){
	$.ajax({
		type: ajax_method,
		url: site_url+ajax_url,
		data: $(form_id).serialize(),
		dataType: datatype,
		success: function(result){ 
			$(error_id).html('');
			$(success_id).html('');
			if(result.category == "success"){
				var url = site_url+redirect_url;
				window.location.replace(url);
			}else{
				$(error_id).html(result.message).css("color", "red");
			}
		}
	});
}

$("#intranetloginform").submit(function(e){
	e.preventDefault(); 
	formData = new FormData($("#intranetloginform")[0]);
	$.ajax({
		url: site_url+"intranet/validateintranet", 
		type: 'POST',
		data: formData,
		processData: false,
		contentType: false,
		success: function(result){ 
			var res = JSON.parse(result);
			if(res.category == "success"){
				var url = site_url+"intranet/home";
				window.location.replace(url);
			}else{
				var url = site_url+"intranet/index";
				window.location.replace(url);
			}
		}
	});
});

$("#language-entry-form").submit(function(e){
	e.preventDefault(); 
	ajax_call("#language-entry-form","admin/languageentry","#languageentry-error","#languageentry-success","admin/language","POST","json");
});

$("#language-edit-form").submit(function(e){
	event.preventDefault();
	var formData = new FormData($("#language-edit-form")[0]);
	$.ajax({
		url: site_url+"admin/editlanguage", 
		type: 'POST',
		data: formData,
		processData: false,
		contentType: false,
		success: function(result){ 
			var res = JSON.parse(result);
			$("#language-edit-success").html('');
			$("#language-edit-error").html('');
			if(res.category == "success"){
				var url = site_url+"admin/languageedit/"+res.message;
				window.location.replace(url);
			}else{
				$("#language-edit-success").html(res.message).css("color", "red");
			}
		}
	});
});

$("#tender-entry-form").submit(function(e){
	event.preventDefault();
	var formData = new FormData($("#tender-entry-form")[0]);
	$.ajax({
		url: site_url+"admin/uploadtender", 
		type: 'POST',
		data: formData,
		processData: false,
		contentType: false,
		success: function(result){ 
			var res = JSON.parse(result);
			$("#tender-success").html('');
			$("#tender-error").html('');
			if(res.category == "Success"){
				var url = site_url+"admin/tender";
				window.location.replace(url);
			}else{
				$("#tender-error").html(res.message).css("color", "red");
			}
		}
	});
});

$(".tender-to-archieve").click(function(e){
	var id = this.id.replace("tender-to-archieve-", "");
	var ids = id.split('-')
	var tender_status = 1;
	var data = {id:ids[0],tender_status:tender_status,csrf_test_name:ids[2]};
	$.ajax({  
		url: site_url+"admin/tender_status_change",  
		method:"POST",  
		data:data,  
		dataType:"json",  
		success:function(data){  
			if(data.category == "success"){
				var url = site_url+"admin/tender";
				window.location.replace(url);
			}else{
				alert(data.message);
			}
		}  
	});
});

$(".tender-to-new").click(function(e){
	var id = this.id.replace("tender-to-new-", "");
	var ids = id.split('-')
	var tender_status = 2;
	var data = {id:ids[0],tender_status:tender_status,csrf_test_name:ids[2]};
	$.ajax({  
		url: site_url+"admin/tender_status_change",  
		method:"POST",  
		data:data,  
		dataType:"json",  
		success:function(data){  
			if(data.category == "success"){
				var url = site_url+"admin/tender";
				window.location.replace(url);
			}else{
				alert(data.message);
			}
		}  
	});
});

$(".delete-tender").click(function(e){
	var id = this.id.replace("delete-tender-", "");
	var ids = id.split('-');
	var tender_status = 0;
	var data = {id:ids[0],tender_status:tender_status,csrf_test_name:ids[2]};
	$.ajax({  
		url: site_url+"admin/tender_status_change",  
		method:"POST",  
		data:data,  
		dataType:"json",  
		success:function(data){  
			if(data.category == "success"){
				var url = site_url+"admin/tender";
				window.location.replace(url);
			}else{
				alert(data.message);
			}
		}  
	});
});

$(".undo-tender").click(function(e){
	var id = this.id.replace("undo-tender-", "");
	var ids = id.split('-');
	var tender_status = 1;
	var data = {id:ids[0],tender_status:tender_status,csrf_test_name:ids[2]};
	$.ajax({  
		url: site_url+"admin/tender_status_change",  
		method:"POST",  
		data:data,  
		dataType:"json",  
		success:function(data){  
			if(data.category == "success"){
				var url = site_url+"admin/tender";
				window.location.replace(url);
			}else{
				alert(data.message);
			}
		}  
	});
});

$("#jobs-entry-form").submit(function(e){
	event.preventDefault();
	var formData = new FormData($("#jobs-entry-form")[0]);
	$.ajax({
		url: site_url+"admin/uploadjobs", 
		type: 'POST',
		data: formData,
		processData: false,
		contentType: false,
		success: function(result){ 
			var res = JSON.parse(result);
			$("#jobs-success").html('');
			$("#jobs-error").html('');
			if(res.category == "Success"){
				var url = site_url+"admin/jobs";
				window.location.replace(url);
			}else{
				$("#jobs-error").html(res.message).css("color", "red");
			}
		}
	});
});

$(".job-to-archieve").click(function(e){
	var id = this.id.replace("job-to-archieve-", "");
	var ids = id.split('-');
	var job_status = 1;
	var data = {id:ids[0],job_status:job_status,csrf_test_name:ids[2]};
	$.ajax({  
		url: site_url+"admin/job_status_change",  
		method:"POST",  
		data:data,  
		dataType:"json",  
		success:function(data){  
			if(data.category == "success"){
				var url = site_url+"admin/jobs";
				window.location.replace(url);
			}else{
				alert(data.message);
			}
		}  
	});
});

$(".job-to-new").click(function(e){
	var id = this.id.replace("job-to-new-", "");
	var ids = id.split('-');
	var job_status = 2;
	var data = {id:ids[0],job_status:job_status,csrf_test_name:ids[2]};
	$.ajax({  
		url: site_url+"admin/job_status_change",  
		method:"POST",  
		data:data,  
		dataType:"json",  
		success:function(data){  
			if(data.category == "success"){
				var url = site_url+"admin/jobs";
				window.location.replace(url);
			}else{
				alert(data.message);
			}
		}  
	});
});

$(".delete-job").click(function(e){
	var id = this.id.replace("delete-job-", "");
	var job_status = 0;
	var ids = id.split('-');
	var data = {id:ids[0],job_status:job_status,csrf_test_name:ids[2]};
	$.ajax({  
		url: site_url+"admin/job_status_change",  
		method:"POST",  
		data:data,  
		dataType:"json",  
		success:function(data){  
			if(data.category == "success"){
				var url = site_url+"admin/jobs";
				window.location.replace(url);
			}else{
				alert(data.message);
			}
		}  
	});
});

$(".undo-job").click(function(e){
	var id = this.id.replace("undo-job-", "");
	var job_status = 1;
	var ids = id.split('-');
	var data = {id:ids[0],job_status:job_status,csrf_test_name:ids[2]};
	$.ajax({  
		url: site_url+"admin/job_status_change",  
		method:"POST",  
		data:data,  
		dataType:"json",  
		success:function(data){  
			if(data.category == "success"){
				var url = site_url+"admin/jobs";
				window.location.replace(url);
			}else{
				alert(data.message);
			}
		}  
	});
});

$("#notifications-entry-form").submit(function(e){
	event.preventDefault();
	var formData = new FormData($("#notifications-entry-form")[0]);
	$.ajax({
		url: site_url+"admin/uploadnotifications", 
		type: 'POST',
		data: formData,
		processData: false,
		contentType: false,
		success: function(result){ 
			var res = JSON.parse(result);
			$("#notifications-success").html('');
			$("#notifications-error").html('');
			if(res.category == "Success"){
				var url = site_url+"admin/notifications";
				window.location.replace(url);
			}else{
				$("#notifications-error").html(res.message).css("color", "red");
			}
		}
	});
});

$(".notification-to-archieve").click(function(e){
	var id = this.id.replace("notification-to-archieve-", "");
	var notification_status = 1;
	var ids = id.split('-');
	var data = {id:ids[0],notification_status:notification_status,csrf_test_name:ids[2]};
	$.ajax({  
		url: site_url+"admin/notification_status_change",  
		method:"POST",  
		data:data,  
		dataType:"json",  
		success:function(data){  
			if(data.category == "success"){
				var url = site_url+"admin/notifications";
				window.location.replace(url);
			}else{
				alert(data.message);
			}
		}  
	});
});

$(".notification-to-new").click(function(e){
	var id = this.id.replace("notification-to-new-", "");
	var notification_status = 2;
	var ids = id.split('-');
	var data = {id:ids[0],notification_status:notification_status,csrf_test_name:ids[2]};
	$.ajax({  
		url: site_url+"admin/notification_status_change",  
		method:"POST",  
		data:data,  
		dataType:"json",  
		success:function(data){  
			if(data.category == "success"){
				var url = site_url+"admin/notifications";
				window.location.replace(url);
			}else{
				alert(data.message);
			}
		}  
	});
});

$(".delete-notification").click(function(e){
	var id = this.id.replace("delete-notification-", "");
	var notification_status = 0;
	var ids = id.split('-');
	var data = {id:ids[0],notification_status:notification_status,csrf_test_name:ids[2]};
	$.ajax({  
		url: site_url+"admin/notification_status_change",  
		method:"POST",  
		data:data,  
		dataType:"json",  
		success:function(data){  
			if(data.category == "success"){
				var url = site_url+"admin/notifications";
				window.location.replace(url);
			}else{
				alert(data.message);
			}
		}  
	});
});

$(".undo-notification").click(function(e){
	var id = this.id.replace("undo-notification-", "");
	var notification_status = 1;
	var ids = id.split('-');
	var data = {id:ids[0],notification_status:notification_status,csrf_test_name:ids[2]};
	$.ajax({  
		url: site_url+"admin/notification_status_change",  
		method:"POST",  
		data:data,  
		dataType:"json",  
		success:function(data){  
			if(data.category == "success"){
				var url = site_url+"admin/notifications";
				window.location.replace(url);
			}else{
				alert(data.message);
			}
		}  
	});
});

$("#newnotifications-entry-form").submit(function(e){
	event.preventDefault();
	var formData = new FormData($("#newnotifications-entry-form")[0]);
	$.ajax({
		url: site_url+"admin/uploadnewnotifications", 
		type: 'POST',
		data: formData,
		processData: false,
		contentType: false,
		success: function(result){ 
			var res = JSON.parse(result);
			$("#newnotifications-success").html('');
			$("#newnotifications-error").html('');
			if(res.category == "Success"){
				var url = site_url+"admin/newnotifications";
				window.location.replace(url);
			}else{
				$("#newnotifications-error").html(res.message).css("color", "red");
			}
		}
	});
});

$(".newnotifications-to-archieve").click(function(e){
	var id = this.id.replace("newnotifications-to-archieve-", "");
	var notification_status = 1;
	var ids = id.split('-');
	var data = {id:ids[0],notification_status:notification_status,csrf_test_name:ids[2]};
	$.ajax({  
		url: site_url+"admin/newnotifications_status_change",  
		method:"POST",  
		data:data,  
		dataType:"json",  
		success:function(data){  
			if(data.category == "success"){
				var url = site_url+"admin/newnotifications";
				window.location.replace(url);
			}else{
				alert(data.message);
			}
		}  
	});

});

$(".newnotifications-to-new").click(function(e){
	var id = this.id.replace("newnotifications-to-new-", "");
	var notification_status = 2;
	var ids = id.split('-');
	var data = {id:ids[0],notification_status:notification_status,csrf_test_name:ids[2]};
	$.ajax({  
		url: site_url+"admin/newnotifications_status_change",  
		method:"POST",  
		data:data,  
		dataType:"json",  
		success:function(data){  
			if(data.category == "success"){
				var url = site_url+"admin/newnotifications";
				window.location.replace(url);
			}else{
				alert(data.message);
			}
		}  
	});
});

$(".delete-newnotifications").click(function(e){
	var id = this.id.replace("delete-newnotifications-", "");
	var notification_status = 0;
	var ids = id.split('-');
	var data = {id:ids[0],notification_status:notification_status,csrf_test_name:ids[2]};
	$.ajax({  
		url: site_url+"admin/newnotifications_status_change",  
		method:"POST",  
		data:data,  
		dataType:"json",  
		success:function(data){  
			if(data.category == "success"){
				var url = site_url+"admin/newnotifications";
				window.location.replace(url);
			}else{
				alert(data.message);
			}
		}  
	});
});

$(".undo-newnotifications").click(function(e){
	var id = this.id.replace("undo-newnotifications-", "");
	var notification_status = 1;
	var ids = id.split('-');
	var data = {id:ids[0],notification_status:notification_status,csrf_test_name:ids[2]};
	$.ajax({  
		url: site_url+"admin/newnotifications_status_change",  
		method:"POST",  
		data:data,  
		dataType:"json",  
		success:function(data){  
			if(data.category == "success"){
				var url = site_url+"admin/newnotifications";
				window.location.replace(url);
			}else{
				alert(data.message);
			}
		}  
	});
});

$("#announcements-entry-form").submit(function(e){
	event.preventDefault();
	var formData = new FormData($("#announcements-entry-form")[0]);
	$.ajax({
		url: site_url+"admin/upload_announcements", 
		type: 'POST',
		data: formData,
		processData: false,
		contentType: false,
		success: function(result){ 
			var res = JSON.parse(result);
			$("#announcements-success").html('');
			$("#announcements-error").html('');
			if(res.category == "Success"){
				var url = site_url+"admin/announcements";
				window.location.replace(url);
			}else{
				$("#announcements-error").html(res.message).css("color", "red");
			}
		}
	});
});

$(".announcement-to-archieve").click(function(e){
	var id = this.id.replace("announcement-to-archieve-", "");
	var announcement_status = 1;
	var ids = id.split('-');
	var data = {id:ids[0],announcement_status:announcement_status,csrf_test_name:ids[2]};
	$.ajax({  
		url: site_url+"admin/announcement_status_change",  
		method:"POST",  
		data:data,  
		dataType:"json",  
		success:function(data){  
			if(data.category == "success"){
				var url = site_url+"admin/announcements";
				window.location.replace(url);
			}else{
				alert(data.message);
			}
		}  
	});
});

$(".announcement-to-new").click(function(e){
	var id = this.id.replace("announcement-to-new-", "");
	var announcement_status = 2;
	var ids = id.split('-');
	var data = {id:ids[0],announcement_status:announcement_status,csrf_test_name:ids[2]};
	$.ajax({  
		url: site_url+"admin/announcement_status_change",  
		method:"POST",  
		data:data,  
		dataType:"json",  
		success:function(data){  
			if(data.category == "success"){
				var url = site_url+"admin/announcements";
				window.location.replace(url);
			}else{
				alert(data.message);
			}
		}  
	});
});

$(".delete-announcement").click(function(e){
	var id = this.id.replace("delete-announcement-", "");
	var announcement_status = 0;
	var ids = id.split('-');
	var data = {id:ids[0],announcement_status:announcement_status,csrf_test_name:ids[2]};
	$.ajax({  
		url: site_url+"admin/announcement_status_change",  
		method:"POST",  
		data:data,  
		dataType:"json",  
		success:function(data){  
			if(data.category == "success"){
				var url = site_url+"admin/announcements";
				window.location.replace(url);
			}else{
				alert(data.message);
			}
		}  
	});
});

$(".undo-announcement").click(function(e){
	var id = this.id.replace("undo-announcement-", "");
	var announcement_status = 1;
	var ids = id.split('-');
	var data = {id:ids[0],announcement_status:announcement_status,csrf_test_name:ids[2]};
	$.ajax({  
		url: site_url+"admin/announcement_status_change",  
		method:"POST",  
		data:data,  
		dataType:"json",  
		success:function(data){  
			if(data.category == "success"){
				var url = site_url+"admin/announcements";
				window.location.replace(url);
			}else{
				alert(data.message);
			}
		}  
	});
});

/* Image upload */
$(document).ready(function(){
	$image_crop = $('#image_demo').croppie({
		enableExif: true,
		viewport: {
			width:200,
			height:250,
			type:'square' //circle
		},
		boundary:{
			width:210,
			height:260
		}
	});

	$('#image').on('change', function(){
		var reader = new FileReader();
		reader.onload = function (event) {
			$image_crop.croppie('bind', {
				url: event.target.result
			}).then(function(){
				console.log('jQuery bind complete');
			});
		}
		reader.readAsDataURL(this.files[0]);
		$('#uploadimageModal').modal('show');
	});

	$('.crop_image').click(function(event){
		//activate(1);
		if($('#croped_image').val() != ''){
			var prev_img = site_url+"includes/images/employees/cropedimage/"+$('#croped_image').val();
			$.ajax({
				url: site_url+"admin/deletecropimage",
				type: "POST",
				data:{"prev_img": prev_img},
				success:function(data){
				}
			});
		}
		$image_crop.croppie('result', {
			type: 'canvas',
			size: 'viewport'
		}).then(function(response){
			$.ajax({
				url: site_url+"admin/cropimage",
				type: "POST",
				data:{"image": response},
				success:function(data){
				var returnedData = JSON.parse(data);
				$('#uploadimageModal').modal('hide');
				$('#uploaded_image').html(returnedData.message);
				$("#croped_image").val('');
				$("#croped_image").val(returnedData.image_name);
				$("#image").val(null);
				$("#image").val(returnedData.image_name);
				}
			});
			//activate(0);
		})
	});

	$image_crop1 = $('#image_demo1').croppie({
		enableExif: true,
		viewport: {
			width:700,
			height:400,
			type:'square' //circle
		},
		boundary:{
			width:710,
			height:410
		}
	});
});
/* Image upload */

$("#addemployee-entry-form").submit(function(e){
	event.preventDefault();
	var formData = new FormData($("#addemployee-entry-form")[0]);
	$.ajax({
		url: site_url+"admin/addemployeesubmit", 
		type: 'POST',
		data: formData,
		processData: false,
		contentType: false,
		success: function(result){ 
			var res = JSON.parse(result);
			$("#addemployee-success").html('');
			$("#addemployee-error").html('');
			if(res.category == "Success"){
				var url = site_url+"admin/employees";
				window.location.replace(url);
			}else{
				$("#addemployee-error").html(res.message).css("color", "red");
			}
		}
	});
});


$("#editemployee-entry-form").submit(function(e){
	event.preventDefault();
	var formData = new FormData($("#editemployee-entry-form")[0]);
	$.ajax({
		url: site_url+"admin/editemployeesubmit", 
		type: 'POST',
		data: formData,
		processData: false,
		contentType: false,
		success: function(result){ 
			var res = JSON.parse(result);
			$("#editemployee-success").html('');
			$("#editemployee-error").html('');
			if(res.category == "Success"){
				var url = site_url+"admin/employees";
				window.location.replace(url);
			}else{
				$("#editemployee-error").html(res.message).css("color", "red");
			}
		}
	});
});


$("#editemployeedirectory-form").submit(function(e){
	event.preventDefault();
	var formData = new FormData($("#editemployeedirectory-form")[0]);
	$.ajax({
		url: site_url+"admin/employeedirectorysubmit", 
		type: 'POST',
		data: formData,
		processData: false,
		contentType: false,
		success: function(result){ 
			var res = JSON.parse(result);
			$("#editemployee-success").html('');
			$("#editemployee-error").html('');
			if(res.category == "Success"){
				var url = site_url+"admin/editemployeedirectory/"+res.contact_directory_id;
				window.location.replace(url);
			}else{
				$("#editemployee-error").html(res.message).css("color", "red");
			}
		}
	});
});


$("#whatsnew-entry-form").submit(function(e){
	event.preventDefault();
	var formData = new FormData($("#whatsnew-entry-form")[0]);
	$.ajax({
		url: site_url+"admin/whatsnewsubmit", 
		type: 'POST',
		data: formData,
		processData: false,
		contentType: false,
		success: function(result){ 
			var res = JSON.parse(result);
			$("#whatsnew-success").html('');
			$("#whatsnew-error").html('');
			if(res.category == "Success"){
				var url = site_url+"admin/whatsnew";
				window.location.replace(url);
			}else{
				$("#whatsnew-error").html(res.message).css("color", "red");
			}
		}
	});
});

$(".whatsnew-to-archieve").click(function(e){
	var id = this.id.replace("whatsnew-to-archieve-", "");
	var whatsnew_status = 1;
	var ids = id.split('-');
	var data = {id:ids[0],whatsnew_status:whatsnew_status,csrf_test_name:ids[2]};
	$.ajax({  
		url: site_url+"admin/whatsnew_status_change",  
		method:"POST",  
		data:data,  
		dataType:"json",  
		success:function(data){  
			if(data.category == "success"){
				var url = site_url+"admin/whatsnew";
				window.location.replace(url);
			}else{
				alert(data.message);
			}
		}  
	});
});

$(".whatsnew-to-new").click(function(e){
	var id = this.id.replace("whatsnew-to-new-", "");
	var whatsnew_status = 3;
	var ids = id.split('-');
	var data = {id:ids[0],whatsnew_status:whatsnew_status,csrf_test_name:ids[2]};
	$.ajax({  
		url: site_url+"admin/whatsnew_status_change",  
		method:"POST",  
		data:data,  
		dataType:"json",  
		success:function(data){  
			if(data.category == "success"){
				var url = site_url+"admin/whatsnew";
				window.location.replace(url);
			}else{
				alert(data.message);
			}
		}  
	});
});

$(".delete-whatsnew").click(function(e){
	var id = this.id.replace("delete-whatsnew-", "");
	var whatsnew_status = 0;
	var ids = id.split('-');
	var data = {id:ids[0],whatsnew_status:whatsnew_status,csrf_test_name:ids[2]};
	$.ajax({  
		url: site_url+"admin/whatsnew_status_change",  
		method:"POST",  
		data:data,  
		dataType:"json",  
		success:function(data){  
			if(data.category == "success"){
				var url = site_url+"admin/whatsnew";
				window.location.replace(url);
			}else{
				alert(data.message);
			}
		}  
	});
});

$(".undo-whatsnew").click(function(e){
	var id = this.id.replace("undo-whatsnew-", "");
	var whatsnew_status = 1;
	var ids = id.split('-');
	var data = {id:ids[0],whatsnew_status:whatsnew_status,csrf_test_name:ids[2]};
	$.ajax({  
		url: site_url+"admin/whatsnew_status_change",  
		method:"POST",  
		data:data,  
		dataType:"json",  
		success:function(data){  
			if(data.category == "success"){
				var url = site_url+"admin/whatsnew";
				window.location.replace(url);
			}else{
				alert(data.message);
			}
		}  
	});
});