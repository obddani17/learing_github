
         $("#stepone").click(function()
		{
 
		current_fs = $(this).parent();
		next_fs = $(this).parent().next();	
	
		if (v.form())
			{
			
			$("input","#step2").removeClass("ignore");
			
			$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
			$('#step1').hide();
			$('#step2').show(); 
			window.scrollTo(0, 0);
			}
 
		});
 
		$("#previous1").click(function()
		{
			
			$("input","#step2").addClass("ignore");
			
			current_fs = $(this).parent();
			previous_fs = $(this).parent().prev();
			
			$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
			$('#step2').hide();
			$('#step1').show(); 
			window.scrollTo(0, 0);
		});