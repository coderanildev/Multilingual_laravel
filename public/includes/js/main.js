(function($) {
    "use strict";
     $(document).on('ready', function() {	
 
		jQuery(window).on('scroll', function() {
			if ($(this).scrollTop() > 100) {
				$('.header').addClass("sticky");
			} else {
				$('.header').removeClass("sticky");
			}
		});
 	
		$('.menu').slicknav({
			prependTo:".mobile-menu",
			duration: 600,
			closeOnClick:true,
		});

		$('.slider-active').owlCarousel({
			autoplay:true,
			autoplayTimeout:3500,
			autoplayHoverPause:true,
			items:1,
			smartSpeed: 600,
			loop:true,
			merge:true,
			nav:true,
			dots:false,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			responsive:{
				300: {
					nav:false,
				},
				768: {
					nav:false,
				},
				1170: {
					nav:true,
				},
			}
		});
	
		$('.circle').circleProgress({
			fill: {
				color: '#00B16A'
			}
		})
		
		$('.event-slider').owlCarousel({
			autoplay:true,
			autoplayTimeout:3500,
			smartSpeed: 600,
			autoplayHoverPause:true,
			margin:25,
			loop:true,
			merge:true,
			nav:true,
			dots:false,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			responsive:{
				300: {
					items:1,
				},
				480: {
					items:2,
				},
				768: {
					items:2,
				},
				1170: {
					items:3,
				},
			}
		});	
		
		$('.video-gallery-slider').owlCarousel({
			autoplay:true,
			autoplayTimeout:3500,
			smartSpeed: 600,
			autoplayHoverPause:true,
			margin:25,
			loop:true,
			merge:true,
			nav:true,
			dots:false,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			responsive:{
				300: {
					items:1,
				},
				480: {
					items:2,
				},
				768: {
					items:2,
				},
				1170: {
					items:3,
				},
			}
		});
		
		$('.visionaries-slider').owlCarousel({
			autoplay:true,
			autoplayTimeout:3500,
			smartSpeed: 600,
			autoplayHoverPause:true,
			margin:25,
			loop:true,
			merge:true,
			nav:true,
			dots:false,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			responsive:{
				300: {
					items:1,
				},
			}
		});	
		
		$('.publication-slider').owlCarousel({
			items:3,
			autoplay:true,
			autoplayTimeout:3500,
			smartSpeed: 600,
			autoplayHoverPause:true,
			margin:25,
			loop:true,
			merge:true,
			dots:false,
			nav:true,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			responsive:{
				300: {
					items:1,
				},
				480: {
					items:3,
				},
				768: {
					items:3,
				},
				1170: {
					items:4,
				},
				1800: {
					items:5,
				},
			}
		});	
 
		$('.govtlogo-slider').owlCarousel({
			items:3,
			autoplay:true,
			autoplayTimeout:3500,
			smartSpeed: 600,
			autoplayHoverPause:true,
			margin:25,
			loop:true,
			merge:true,
			dots:false,
			nav:true,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			responsive:{
				300: {
					items:2,
				},
				480: {
					items:3,
				},
				768: {
					items:3,
				},
				1170: {
					items:4,
				},
				1800: {
					items:6,
				},
			}
		});
		
		$('.facilities-slider').owlCarousel({
			items:3,
			autoplay:true,
			autoplayTimeout:3500,
			smartSpeed: 600,
			autoplayHoverPause:true,
			margin:25,
			loop:true,
			merge:true,
			dots:false,
			nav:true,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			responsive:{
				300: {
					items:1,
				},
				480: {
					items:1,
				},
				768: {
					items:2,
				},
				1170: {
					items:3,
				},
				1441: {
					items:4,
				},
			}
		});
		
		$('.testimonial-slider').owlCarousel({
			autoplay:true,
			autoplayTimeout:3500,
			smartSpeed: 600,
			autoplayHoverPause:true,
			margin:25,
			loop:true,
			merge:true,
			center:false,
			nav:true,
			dots:false,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			responsive:{
				300: {
					items:1,
					nav:false,
				},
				480: {
					items:2,
					nav:false,
				},
				768: {
					items:2,
					nav:false,
				},
				1170: {
					items:2,
				},
			}
		});	

		$('.event-gallery').owlCarousel({
			items:1,
			autoplay:false,
			autoplayTimeout:3500,
			smartSpeed: 600,
			autoplayHoverPause:true,
			animateOut: 'fadeOut',
			animateIn: 'fadeIn',
			margin:0,
			loop:true,
			merge:true,
			nav:true,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			dots:false,
		});	

		$('.blog-slider').owlCarousel({
			items:2,
			autoplay:false,
			autoplayTimeout:3500,
			smartSpeed: 600,
			autoplayHoverPause:true,
			margin:15,
			loop:true,
			merge:true,
			nav:true,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			dots:true,
			responsive:{
				300: {
					items:1,
					nav:false,
				},
				480: {
					items:2,
					nav:false,
				},
				768: {
					items:2,
					nav:false,
				},
				1170: {
					items:3,
				},
			}
		});	
		
		$('.staff-slider').owlCarousel({
			loop:true,
			margin:10,
			nav:true,
			autoplay:1000,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:3
				},
				1000:{
					items:5
				}
			}
		})

		$('.b-gallery').owlCarousel({
			items:1,
			autoplay:false,
			autoplayTimeout:3500,
			smartSpeed: 600,
			autoplayHoverPause:true,
			animateOut: 'fadeOut',
			animateIn: 'fadeIn',
			margin:0,
			fade:true,
			loop:true,
			merge:true,
			nav:true,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			dots:false,
		});	
 
		$('.panel').on('click', function() {
            $(".panel").removeClass("active");
            $(this).addClass("active");
		});

		$.scrollUp({
			scrollName: 'scrollUp', 
			scrollDistance: 300,        
			scrollFrom: 'top',           
			scrollSpeed: 1000,            
			animation: 'fade',           
			animationSpeed: 200,         
			scrollTrigger: false,        
			scrollTarget: false,         
			easing: 'easeInOutQuart',
			scrollText: ["<i class='fa fa-angle-up'></i>"], 
			scrollTitle: false,          
			scrollImg: false,            
			activeOverlay: false,        
			zIndex: 2147483647           
		});
	
	});

	$(window).on('load', function() {
		var controller = $('#language_switcher_link').attr('controller');
		var page = $('#language_switcher_link').attr('method');
		var language = $('#language_switcher_link').attr('language');
		$.ajax({
			url: site_url+"langswitch/translationcheck", 
			type: 'POST',
			data: {"controller":controller,"page":page,"language":language},
			dataType: "json",
			success: function(result){ 
				if(result.category == "success"){
					location.reload();
				}
				activate(0);
			}
		});
		
		$.ajax({
			url: site_url+"home/visitor", 
			type: 'GET',
			success: function(result){ 
				var res = JSON.parse(result);
				if(res.category == "newvisitor"){

				}else{

				}
			}
		});
	});

	$('#language_switcher_link').click(function(event){
		activate(1);
		event.preventDefault();
		var controller = $(this).attr('controller');
		var page = $(this).attr('method');
		var language = $(this).attr('language');
		var csrf_test_name = $(this).attr('csrf_hash');
		$.ajax({
			url: site_url+"langswitch/switchlanguage", 
			type: 'POST',
			data: {"controller":controller,"page":page,"language":language,csrf_test_name:csrf_test_name},
			dataType: "json",
			success: function(result){ 
				if(result.category == "success"){
					location.reload();
				}else{
					$('#hindi-translation-alert').modal('show'); 
				}
				activate(0);
			}
		});
	});

	$('.homepagelanguageselector').click(function(event){

		activate(1);
		event.preventDefault();
		var controller = $(this).attr('controller');
		var page = $(this).attr('method');
		var language = $(this).attr('language');
		var csrf_test_name = $(this).attr('csrf_hash');
		$.ajax({
			url: site_url+"langswitch/switchlanguage", 
			type: 'POST',
			data: {"controller":controller,"page":page,"language":language,csrf_test_name:csrf_test_name},
			dataType: "json",
			success: function(result){ 
				if(result.category == "success"){
					location.reload();
				}else{
					$('#hindi-translation-alert').modal('show'); 
				}
				activate(0);
			}
		});
	});

	
	/*
	$('#language_switcher_link_english').click(function(event){
		activate(1);
		event.preventDefault();
		var controller = $(this).attr('controller');
		var page = $(this).attr('method');
		var language = $(this).attr('language');
		$.ajax({
			url: site_url+"langswitch/switchlanguage", 
			type: 'POST',
			data: {"controller":controller,"page":page,"language":language},
			dataType: "json",
			success: function(result){ 
				if(result.category == "success"){
					location.reload();
				}else{
					$('#hindi-translation-alert').modal('show'); 
				}
				activate(0);
			}
		});
	});
	*/

	function activate(para){
		if(para==1)
		{
			$("img.activator").css("display","block");
		}
		else
		{
			$("img.activator").css("display","none");
		}
	}
	
	$('.show-seminars').click(function(){
		$(this).parent().prev().slideToggle("slow");
		if ($(this).text() == "Show Details")
		   $(this).text("Hide Details")
		else
		   $(this).text("Show Details");
	});

	$('#submitfeedback').click(function(event){
		activate(1);
		event.preventDefault();
		var formData = new FormData($("#feedback-form")[0]);
		$.ajax({
			url: site_url+"home/submitfeedback", 
			type: 'POST',
			data: formData,
			processData: false,
			contentType: false,
			success: function(result){ 
				var res = JSON.parse(result);
				$(".feedback-success-message").html('');
				$(".feedback-error-message").html('');
				if(res.category == "Success"){
					$("#feedback-form").hide();
					$(".feedback-success-message").html(res.message).css({"margin-bottom": "15px"});
					$(".feedback-success-message").children().css({"color": "green"});
					activate(0);
					setTimeout(function(){
						$('#feedback-model').modal('hide');
					}, 5000);
					
				}else{
					$(".feedback-error-message").html(res.message).css({"margin-bottom": "15px"});
					$(".feedback-error-message").children().css({"color": "red"});
					activate(0);
				}
			}
		});
	});
	
	$('#feedback-model').on('hidden.bs.modal', function () {
		location.reload();
	});
	
	$('#submitealert').click(function(event){
		activate(1);
		event.preventDefault();
		var formData = new FormData($("#ealert-form")[0]);
		$.ajax({
			url: site_url+"home/submitealert", 
			type: 'POST',
			data: formData,
			processData: false,
			contentType: false,
			success: function(result){ 
				var res = JSON.parse(result);
				$(".ealert-success-message").html('');
				$(".ealert-error-message").html('');
				if(res.category == "Success"){
					$("#ealert-form").hide();
					$(".ealert-success-message").html(res.message).css({"margin-bottom": "15px"});
					$(".ealert-success-message").children().css({"color": "green"});
					activate(0);
					setTimeout(function(){
						$('#ealert-model').modal('hide');
					}, 5000);
					
				}else{
					$(".ealert-error-message").html(res.message).css({"margin-bottom": "15px"});
					$(".ealert-error-message").children().css({"color": "red"});
					activate(0);
				}
			}
		});
	});
	
	$('#ealert-model').on('hidden.bs.modal', function () {
		location.reload();
	});
	
	$('#top-search-button').click(function(event){
		activate(1);
		event.preventDefault();
		var formData = $("#top-search").serialize()
		$.ajax({
			url: site_url+"home/customgooglesearch", 
			type: 'POST',
			data: formData,
			success: function(result){ 
				var res = JSON.parse(result);
				if(res.category == "success"){
					window.open(res.message, '_blank');
					activate(0);
				}else{
					alert(res.message);
					activate(0);
				}
			}
		});
	});
	
	$("#language-entry-form").submit(function(e) {
		activate(1);
		e.preventDefault(); 
		$.ajax({
			type: "POST",
			url: site_url+"home/languageentry",
			data: $('#language-entry-form').serialize(),
			dataType: "json",
			success: function(result){ 
				$('#language-entry-form-error').html('');
				$('#language-entry-form-success').html('');
				if(result.category == "success"){
					$('#language-entry-form-success').html(result.message);
				}else{
					$('#language-entry-form-error').html(result.message);
				}
				activate(0);
			}
		});
	});
	
	$("#isaloginform").submit(function(e) {
		activate(1);
		e.preventDefault(); 
		$.ajax({
			type: "POST",
			url: site_url+"isa/validateisaadmin",
			data: $('#isaloginform').serialize(),
			dataType: "json",
			success: function(result){ 
				$('#isa-login-error').html('');
				$('#isa-login-success').html('');
				if(result.category == "success"){
					window.location.replace(site_url+"isa/isadata");
				}else{
					$('#isa-login-error').html(result.message).css("color", "red");
				}
				activate(0);
			}
		});
	});
	
	/*
	$('#pagination').on('click','a',function(e){
		e.preventDefault(); 
		var pageno = $(this).attr('data-ci-pagination-page');
		loadPagination(pageno);
	});
	
	loadPagination(0);

	function loadPagination(pagno){
		activate(1);
		$.ajax({
			url: 'http://www.niscair.res.in/isa/loadRecord/'+pagno,
			type: 'get',
			dataType: 'json',
			success: function(response){
				$('#pagination').html(response.pagination);
				$('#isadataresult').html(response.result);
				activate(0);
			}
		});
	}
	*/
	
	$(document).on('click', '.edit_isa_data', function(){  
		var dataid = $(this).attr("id"); 
		$.ajax({  
			url: site_url+"isa/editform",  
			method:"POST",  
			data:{dataid:dataid, csrf_test_name:csrfHash},  
			dataType:"json",  
			success:function(data){  
				$('#final_id').val(data.final_id);
				$('#sub_udc_no').val(data.sub_udc_no);
				$('#record_no').val(data.record_no);
				$('#author_name').val(data.author_name);
				$('#author_dept').val(data.author_dept);
				$('#author_inst').val(data.author_inst);
				$('#author_place').val(data.author_place);
				$('#email').val(data.email);
				$('#title').val(data.title);
				$('#journ_abbreviation').val(data.journ_abbreviation);
				$('#year_pub').val(data.year_pub);
				$('#volume').val(data.volume);
				$('#page').val(data.page);
				$('#additional_info').val(data.additional_info);
				$('#abstract').val(data.abstract);

				$('#edit_isa_data_Modal').modal('show');
			}  
		}); 
	});
	
	$("#edit-isa-data-form").submit(function(e) {
		activate(1);
		e.preventDefault(); 
		$.ajax({
			type: "POST",
			url: site_url+"isa/submitisadata",
			data: $('#edit-isa-data-form').serialize(),
			dataType: "json",
			success:function(data){  
				$('#final_id').val(data.final_id);
				$('#sub_udc_no').val(data.sub_udc_no);
				$('#record_no').val(data.record_no);
				$('#author_name').val(data.author_name);
				$('#author_dept').val(data.author_dept);
				$('#author_inst').val(data.author_inst);
				$('#author_place').val(data.author_place);
				$('#email').val(data.email);
				$('#title').val(data.title);
				$('#journ_abbreviation').val(data.journ_abbreviation);
				$('#year_pub').val(data.year_pub);
				$('#volume').val(data.volume);
				$('#page').val(data.page);
				$('#additional_info').val(data.additional_info);
				$('#abstract').val(data.abstract);

				$('#edit_isa_data_Modal').modal('show');
				activate(0);
			}
		});
	});

	$(document).on('click', '.add_isa_data', function(){  
		$('#add_isa_data_Modal').modal('show');
	});
	
	$("#add-isa-data-form").submit(function(e) {
		activate(1);
		e.preventDefault(); 
		$.ajax({
			type: "POST",
			url: site_url+"isa/addisadata",
			data: $('#add-isa-data-form').serialize(),
			dataType: "json",
			success:function(result){  
				if(result.category == "success"){
					window.location.replace(site_url+"isa/isadataentry");
				}else{
					$('#isa-data-entry-error').html(result.message).css("color", "red");
				}
				activate(0);
			}
		});
	});
	
	$("#add-isa-data-form-2020").submit(function(e) {
		activate(1);
		e.preventDefault(); 
		$.ajax({
			type: "POST",
			url: site_url+"isa/addisadata2020",
			data: $('#add-isa-data-form-2020').serialize(),
			dataType: "json",
			success:function(result){  
				if(result.category == "success"){
					window.location.replace(site_url+"isa/isadataentry2020");
				}else{
					$('#isa-data-entry-error').html(result.message).css("color", "red");
				}
				activate(0);
			}
		});
	});
	
	$(document).on('click', '.edit_add_isa_data', function(){  
		var dataid = $(this).attr("id"); 
		$.ajax({  
			url: site_url+"isa/editaddform",  
			method:"POST",  
			data:{dataid:dataid, csrf_test_name:csrfHash},  
			dataType:"json",  
			success:function(data){  
				$('#add_final_id').val(data.final_id);
				$('#add_isa_volume').val(data.isa_volume);
				$('#add_isa_issue').val(data.isa_issue);
				$('#add_isa_date').val(data.isa_date);
				$('#add_isa_month').val(data.isa_month);
				$('#add_isa_year').val(data.isa_year);
				$('#add_entry_no').val(data.entry_no);
				$('#add_record_no').val(data.record_no);
				$('#add_operator_name').val(data.operator_name);
				$('#add_doc_type').val(data.doc_type);
				$('#add_sub_udc_id').val(data.sub_udc_id);
				$('#add_sub_udc_no').val(data.sub_udc_no);
				$('#add_author_name').val(data.author_name);
				$('#add_author_dept').val(data.author_dept);
				$('#add_author_inst').val(data.author_inst);
				$('#add_author_place').val(data.author_place);
				$('#add_issue').val(data.issue);
				$('#add_email').val(data.email);
				$('#add_title').val(data.title);
				$('#add_patent_std_no').val(data.patent_std_no);
				$('#add_country_code').val(data.country_code);
				$('#add_thesis_guide').val(data.thesis_guide);
				$('#add_journal_id').val(data.journal_id);
				$('#add_journ_abbreviation').val(data.journ_abbreviation);
				$('#add_year_id').val(data.year_id);
				$('#add_year_pub').val(data.year_pub);
				$('#add_volume').val(data.volume);
				$('#add_page').val(data.page);
				$('#add_additional_info').val(data.additional_info);
				$('#add_ref').val(data.ref);
				$('#add_keywords').val(data.keywords);
				$('#add_geographic').val(data.geographic);
				$('#add_generic').val(data.generic);
				$('#add_abstract').val(data.abstract);

				$('#edit_add_isa_data_Modal').modal('show');
			}  
		}); 
	});
	
	$("#edit_add_isa_data-form").submit(function(e) {
		activate(1);
		e.preventDefault(); 
		$.ajax({
			type: "POST",
			url: site_url+"isa/editisadata",
			data: $('#edit_add_isa_data-form').serialize(),
			dataType: "json",
			success:function(data){  
				window.location.replace(site_url+"isa/isadataeditform/"+data.final_id);
				/*
				$('#add_final_id').val(data.final_id);
				$('#add_isa_volume').val(data.isa_volume);
				$('#add_isa_issue').val(data.isa_issue);
				$('#add_isa_date').val(data.isa_date);
				$('#add_isa_month').val(data.isa_month);
				$('#add_isa_year').val(data.isa_year);
				$('#add_entry_no').val(data.entry_no);
				$('#add_record_no').val(data.record_no);
				$('#add_operator_name').val(data.operator_name);
				$('#add_doc_type').val(data.doc_type);
				$('#add_sub_udc_id').val(data.sub_udc_id);
				$('#add_sub_udc_no').val(data.sub_udc_no);
				$('#add_author_name').val(data.author_name);
				$('#add_author_dept').val(data.author_dept);
				$('#add_author_inst').val(data.author_inst);
				$('#add_author_place').val(data.author_place);
				$('#add_issue').val(data.issue);
				$('#add_email').val(data.email);
				$('#add_title').val(data.title);
				$('#add_patent_std_no').val(data.patent_std_no);
				$('#add_country_code').val(data.country_code);
				$('#add_thesis_guide').val(data.thesis_guide);
				$('#add_journal_id').val(data.journal_id);
				$('#add_journ_abbreviation').val(data.journ_abbreviation);
				$('#add_year_id').val(data.year_id);
				$('#add_year_pub').val(data.year_pub);
				$('#add_volume').val(data.volume);
				$('#add_page').val(data.page);
				$('#add_additional_info').val(data.additional_info);
				$('#add_ref').val(data.ref);
				$('#add_keywords').val(data.keywords);
				$('#add_geographic').val(data.geographic);
				$('#add_generic').val(data.generic);
				$('#add_abstract').val(data.abstract);

				$('#edit_add_isa_data_Modal').modal('show');
				*/
				activate(0);
			}
		});
	});
	
	$("#edit_add_isa_data-form-2020").submit(function(e) {
		activate(1);
		e.preventDefault(); 
		$.ajax({
			type: "POST",
			url: site_url+"isa/editisadata2020",
			data: $('#edit_add_isa_data-form-2020').serialize(),
			dataType: "json",
			success:function(data){  
				window.location.replace(site_url+"isa/isadataeditform2020/"+data.final_id);
				activate(0);
			}
		});
	});
	
	$("#isa-data-edit-form").submit(function(e) {
		activate(1);
		e.preventDefault(); 
		$.ajax({
			type: "POST",
			url: site_url+"isa/isadataeditsubmit",
			data: $('#isa-data-edit-form').serialize(),
			dataType: "json",
			success:function(data){  
				window.location.replace(site_url+"isa/isadataedit/"+data.final_id);
				activate(0);
			}
		});
	});

	$(document).on('click', '.edit_isa_keywords', function(){  
		var dataid = $(this).attr("id"); 
		$.ajax({  
			url: site_url+"isa/editkeywordsform",  
			method:"POST",  
			data:{dataid:dataid, csrf_test_name:csrfHash},  
			dataType:"json",  
			success:function(data){  
				$('#keywords_final_id').val(data.final_id);
				$('#keywords_keywords').val(data.keywords);

				$('#edit_isa_keywords_Modal').modal('show');
			}  
		}); 
	});

	$("#edit-isa-keywords-form").submit(function(e) {
		activate(1);
		e.preventDefault(); 
		$.ajax({
			type: "POST",
			url: site_url+"isa/editkeywords",
			data: $('#edit-isa-keywords-form').serialize(),
			dataType: "json",
			success:function(result){  
				if(result.category == "success"){
					window.location.replace(site_url+"isa/keywordindex");
				}else{
					$('#isa-keywords-error').html(result.message).css("color", "red");
				}
				activate(0);
			}
		});
	});
	
	$(document).on('click', '.edit_isa_author_index', function(){  
		var dataid = $(this).attr("id"); 
		$.ajax({  
			url: site_url+"isa/editkeywordsform",  
			method:"POST",  
			data:{dataid:dataid, csrf_test_name:csrfHash},  
			dataType:"json",  
			success:function(data){  
				$('#author_index_final_id').val(data.final_id);
				$('#author_index_author_name').val(data.author_name);

				$('#edit_isa_author_index_Modal').modal('show');
			}  
		}); 
	});

	$("#edit-isa-author-index-form").submit(function(e) {
		activate(1);
		e.preventDefault(); 
		$.ajax({
			type: "POST",
			url: site_url+"isa/editauthorindex",
			data: $('#edit-isa-author-index-form').serialize(),
			dataType: "json",
			success:function(result){  
				if(result.category == "success"){
					window.location.replace(site_url+"isa/authorindex");
				}else{
					$('#isa-author-index-error').html(result.message).css("color", "red");
				}
				activate(0);
			}
		});
	});
	
	$(document).on('click', '.edit_isa_generic_index', function(){  
		var dataid = $(this).attr("id"); 
		$.ajax({  
			url: site_url+"isa/editkeywordsform",  
			method:"POST",  
			data:{dataid:dataid, csrf_test_name:csrfHash},  
			dataType:"json",  
			success:function(data){  
				$('#generic_index_final_id').val(data.final_id);
				$('#generic_index_generic').val(data.generic);

				$('#edit_isa_generic_index_Modal').modal('show');
			}  
		}); 
	});

	$("#edit-isa-generic-index-form").submit(function(e) {
		activate(1);
		e.preventDefault(); 
		$.ajax({
			type: "POST",
			url: site_url+"isa/editgenericindex",
			data: $('#edit-isa-generic-index-form').serialize(),
			dataType: "json",
			success:function(result){  
				if(result.category == "success"){
					window.location.replace(site_url+"isa/genericindex");
				}else{
					$('#isa-generic-index-error').html(result.message).css("color", "red");
				}
				activate(0);
			}
		});
	});
	
	$(document).on('click', '.edit_isa_geographic_index', function(){  
		var dataid = $(this).attr("id"); 
		$.ajax({  
			url: site_url+"isa/editkeywordsform",  
			method:"POST",  
			data:{dataid:dataid, csrf_test_name:csrfHash},  
			dataType:"json",  
			success:function(data){  
				$('#geographic_index_final_id').val(data.final_id);
				$('#geographic_index_geographic').val(data.geographic);
				//$('#geographic_title').val(data.title);
				//$('#geographic_record_no').val(data.record_no);
				
				$('#edit_isa_geographic_index_Modal').modal('show');
			}  
		}); 
	});
	
	$("#edit-isa-geographic-index-form").submit(function(e) {
		activate(1);
		e.preventDefault(); 
		$.ajax({
			type: "POST",
			url: site_url+"isa/editgeographicindex",
			data: $('#edit-isa-geographic-index-form').serialize(),
			dataType: "json",
			success:function(result){  
				if(result.category == "success"){
					window.location.replace(site_url+"isa/geographicindex");
				}else{
					$('#isa-geographic-index-error').html(result.message).css("color", "red");
				}
				activate(0);
			}
		});
	});

	/* Sales Order Start */
	$("#product-type-order-form").submit(function(e){
		activate(1);
		e.preventDefault(); 
		$.ajax({
			type: "POST",
			url: site_url+"sales/producttype",
			data: $('#product-type-order-form').serialize(),
			dataType: "json",
			success:function(result){  
				if(result.category == "success"){
					window.location.replace(site_url+"sales/products");
				}else{
					$('#product-type-order-form-validation').removeClass("border-div margin-bottom-10");
					$('#product-type-order-form-validation').html(result.message).addClass("border-div margin-bottom-10").find("p").css({"color": "red"})
				}
				activate(0);
			}
		});
	});

	$('[id*="select_product_button_"]').click(function(e){
		e.preventDefault(); 
    	var id = $(this).attr('id');
    	var value = $(this).val();
    	if(value == "Select"){
	    	var form_id = id.replace("select_product_button_", "product_form_");
	    	form_id = '#'+form_id+'';
			$.ajax({
				type: "POST",
				url: site_url+"sales/addproduct",
				data: $(form_id).serialize(),
				dataType: "json",
				success:function(result){  
					if(result.category == "success"){
						$("#"+id).val('Remove');
						var row_id = id.replace("select_product_button_", "product_form_row_");
						$("#"+row_id).css({"background-color":"green","color":"white"});
					}else{
						alert(result.message);
					}
					activate(0);
				}
			});
		}else{
			$.ajax({
				type: "POST",
				url: site_url+"sales/removeproduct",
				data: {id:id},
				dataType: "json",
				success:function(result){  
					if(result.category == "success"){
						$("#"+id).val('Select');
						var row_id = id.replace("select_product_button_", "product_form_row_");
						$("#"+row_id).css({"background-color":"white","color":"black"});
					}else{
						location.reload();
					}
					activate(0);
				}
			});
		}
	});

	$("#order-form-customer-detail").submit(function(e) {
		activate(1);
		e.preventDefault(); 
		$.ajax({
			type: "POST",
			url: site_url+"sales/addcustomerdetail",
			data: $('#order-form-customer-detail').serialize(),
			dataType: "json",
			success:function(result){  
				if(result.category == "success"){
					window.location.replace(site_url+"sales/confirmation");
				}else{
					$('#order-form-customer-detail-validation').html("");
					$('#order-form-customer-detail-validation').removeClass("border-div margin-bottom-10");
					$('#order-form-customer-detail-validation').html(result.message).addClass("border-div margin-bottom-10");
				}
				activate(0);
			}
		});
	});

	$("#place_order").click(function(e) {
		activate(1);
		e.preventDefault(); 
		$.ajax({
			type: "POST",
			url: site_url+"sales/placeorder",
			dataType: "json",
			success:function(result){  
				if(result.category == "success"){
					window.location.replace(site_url+"sales/thankyou");
				}else{
					alert(result.message);
				}
				activate(0);
			}
		});
	});
	/* Sales Order End */
	
})(jQuery);

function Export2Doc(element, filename = ''){
	var preHtml = "<html xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns='http://www.w3.org/TR/REC-html40'><head><meta charset='utf-8'><title>Export HTML To Doc</title></head><body>";
	var postHtml = "</body></html>";
	var html = preHtml+document.getElementById(element).innerHTML+postHtml;

	var blob = new Blob(['\ufeff', html], {
		type: 'application/msword'
	});
	
	// Specify link url
	var url = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(html);
	
	// Specify file name
	filename = filename?filename+'.doc':'document.doc';
	
	// Create download link element
	var downloadLink = document.createElement("a");

	document.body.appendChild(downloadLink);
	
	if(navigator.msSaveOrOpenBlob ){
		navigator.msSaveOrOpenBlob(blob, filename);
	}else{
		// Create a link to the file
		downloadLink.href = url;
		
		// Setting the file name
		downloadLink.download = filename;
		
		//triggering the function
		downloadLink.click();
	}
	
	document.body.removeChild(downloadLink);
}

$("#employeesloginform").submit(function(e){
	event.preventDefault();
	e.preventDefault(); 
	$.ajax({
		type: "POST",
		url: site_url+"employees/validatelogin",
		data: $('#employeesloginform').serialize(),
		dataType: "json",
		success:function(result){  
			if(result.category == "success"){
				window.location.replace(site_url+"employees/dashboard");
			}else{
				window.location.replace(site_url+"employees/login");
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
		var id = this.id;
		var ids = id.split('-')
		if($('#croped_image').val() != ''){
			var prev_img = site_url+"includes/images/employees/cropedimage/"+$('#croped_image').val();
			$.ajax({
				url: site_url+"employees/deletecropimage",
				type: "POST",
				data:{"prev_img": prev_img, "csrf_test_name":ids[2]},
				success:function(data){
				}
			});
		}
		$image_crop.croppie('result', {
			type: 'canvas',
			size: 'viewport'
		}).then(function(response){
			$.ajax({
				url: site_url+"employees/cropimage",
				type: "POST",
				data:{"image": response, csrf_test_name:csrfHash},
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
});
/* Image upload */

$("#employeedashboard-entry-form").submit(function(e){
	event.preventDefault();
	var formData = new FormData($("#employeedashboard-entry-form")[0]);
	$.ajax({
		url: site_url+"employees/editemployee", 
		type: 'POST',
		data: formData,
		processData: false,
		contentType: false,
		success: function(result){ 
			var res = JSON.parse(result);
			$("#employeedashboard-success").html('');
			$("#employeedashboard-error").html('');
			if(res.category == "Success"){
				alert("Your profile successfully updated");
				var url = site_url+"employees/dashboard";
				window.location.replace(url);
			}else{
				var url = site_url+"employees/editprofile";
				window.location.replace(url);
			}
		}
	});
});

$("#employeeschangepasswordform").submit(function(e){
	event.preventDefault();
	var formData = new FormData($("#employeeschangepasswordform")[0]);
	$.ajax({
		url: site_url+"employees/changepasswordsubmit", 
		type: 'POST',
		data: formData,
		processData: false,
		contentType: false,
		success: function(result){ 
			var res = JSON.parse(result);
			$("#employees-changepassword-success").html('');
			var url = site_url+"employees/changepassword";
			if(res.category == "Success"){
				window.location.replace(url);
			}else{
				window.location.replace(url);
			}
		}
	});
});

function getemployeedata(page){  
	//activate(1);
    $.ajax({
        url: site_url+"employees/employeepagination/"+page,
        beforeSend: function(){
            $('.loading').show();
        },
        success: function(data){
            $('.loading').hide();
            $('#employeepagination').html(data);
        }
    });
    //activate(0);
}

function load_journals_in_foreign_currency(){
	$("img.activator").css("display","block"); 
	$.ajax({
		type: "POST",
		url: site_url+"sales/journals_in_foreign_currency",
		dataType: "json",
		success:function(result){  
			if(result.category == "success"){
				$('#product-order-form').html('');
				$('#product-order-form').html(result.message);
			}else{
				alert(result.message);
			}
			$("img.activator").css("display","none");
		}
	});
}

function change_product_quantity(ref){
	$("img.activator").css("display","block"); 
	var rowid = ref.id;
	var quantity = ref.value;
	$.ajax({
		type: "POST",
		url: site_url+"sales/updatecart",
		data: {rowid:rowid,quantity:quantity},
		dataType: "json",
		success:function(result){  
			if(result.category == "success"){
				$('#updated_cart').html('');
				$('#updated_cart').html(result.message);
			}else{
				window.location.replace(site_url+"sales/products");
			}
			$("img.activator").css("display","none"); 
		}
	});
}

function remove_cart_product(ref){
	$("img.activator").css("display","block"); 
	var rowid = ref.id;
	$.ajax({
		type: "POST",
		url: site_url+"sales/updatecart",
		data: {rowid:rowid,quantity:0},
		dataType: "json",
		success:function(result){  
			if(result.category == "success"){
				$('#updated_cart').html('');
				$('#updated_cart').html(result.message);
			}else{
				window.location.replace(site_url+"sales/products");
			}
			$("img.activator").css("display","none"); 
		}
	});
}

function load_journals_in_indian_currency(){
	$("img.activator").css("display","block"); 
	$.ajax({
		type: "POST",
		url: site_url+"sales/journals_in_indian_currency",
		dataType: "json",
		success:function(result){  
			if(result.category == "success"){
				$('#product-order-form').html('');
				$('#product-order-form').html(result.message);
			}else{
				alert(result.message);
			}
			$("img.activator").css("display","none");
		}
	});
}

function load_journals(){
	window.location.replace(site_url+"sales/index");
}

function load_books(){
	$("img.activator").css("display","block"); 
	$.ajax({
		type: "POST",
		url: site_url+"sales/load_books",
		dataType: "json",
		success:function(result){  
			if(result.category == "success"){
				$('#currency-order-form').html('');
				$('#currency-order-form').html(result.currency);
				$('#product-order-form').html('');
				$('#product-order-form').html(result.books);
			}else{
				alert(result.message);
			}
			$("img.activator").css("display","none");
		}
	});
}

function load_magazines(){
	$("img.activator").css("display","block"); 
	$.ajax({
		type: "POST",
		url: site_url+"sales/load_magazines",
		dataType: "json",
		success:function(result){  
			if(result.category == "success"){
				$('#currency-order-form').html('');
				$('#currency-order-form').html(result.currency);
				$('#product-order-form').html('');
				$('#product-order-form').html(result.magazines);
			}else{
				alert(result.message);
			}
			$("img.activator").css("display","none");
		}
	});
}

function load_cdrom(){
	$("img.activator").css("display","block"); 
	$.ajax({
		type: "POST",
		url: site_url+"sales/load_cdrom",
		dataType: "json",
		success:function(result){  
			if(result.category == "success"){
				$('#currency-order-form').html('');
				$('#currency-order-form').html(result.currency);
				$('#product-order-form').html('');
				$('#product-order-form').html(result.cdrom);
			}else{
				alert(result.message);
			}
			$("img.activator").css("display","none");
		}
	});
}

function load_currency(){
	$("img.activator").css("display","block");
	var producttype = [];
	$(':checkbox:checked').each(function(i){
		producttype[i] = $(this).val();
	});

	if (producttype.length === 0) {
	    producttype[0] = 'empty';
	}

	$.ajax({
		type: "POST",
		url: site_url+"sales/load_currency",
		data: {producttype:producttype},
		dataType: "json",
		success:function(result){  
			if(result.category == "success"){
				$('#currency-order-form').html('');
				$('#currency-order-form').html(result.currency);
			}else{
				alert(result.message);
			}
			$("img.activator").css("display","none");
		}
	});
}

$(document).ready(function() {
	$(".hideshowbutton").click(function() {
		$(this).parent().siblings('.hideshowpanel').slideToggle("slow");
	    if ($(this).text() == "Show")
	       $(this).text("Hide")
	    else
	       $(this).text("Show");
	});
});