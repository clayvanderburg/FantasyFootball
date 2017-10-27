			
			
			$('#search1').hideseek({
    			list: '.list1',
			});

			// $(':input').focusout(function() {
			// 	this.value = "" ;
			// 	$(':input').trigger({type: 'keypress', which: 8, keyCode: 8});
			// });
	    	
	    	//Assigns player position class to the list item containing the string
			$("li:contains('WR')").addClass("receiver");
			$("li:contains('RB')").addClass("rback");
			$("li:contains('QB')").addClass("qback");
			$("li:contains('TE-')").addClass("tend");
			$("li:contains('DST')").addClass("dst");
			$("li:contains('K-')").addClass("kicker");

			//Toggles classes of list items on click eventsf
		    $(".listitem1").click(function(e){
        	 $(this).toggleClass('listitem2'); 
   		    });
   		 	$(".listitem1").dblclick(function(f){
        		$(this).toggleClass('listitem3'); 
	   		});

	   		$(".quarterbackbt").click(function(g){
	   						//$("li:contains('QB'),li:contains('WR'),li:contains('RB'),li:contains('TE'),li:contains('DST'),li:contains('K')").removeClass("hiddenbt");
	   						
	   			   			$("li:contains('QB')").toggleClass("hiddenbt");
	   			   			$(".quarterbackbt").toggleClass("btshrink");
	   			   			
	   			});
	   		$(".runningbackbt").click(function(g){
	   						
	   			   			$("li:contains('RB')").toggleClass("hiddenbt");
	   			   			$(".runningbackbt").toggleClass("btshrink");
	   			   			
	   			});
	   		$(".tightendbt").click(function(g){

	   			   			$("li:contains('TE-')").toggleClass("hiddenbt");
	   			   			$(".tightendbt").toggleClass("btshrink");
	   			});
	   		$(".receiverbt").click(function(g){

	   			   			$("li:contains('WR')").toggleClass("hiddenbt");
	   			   			$(".receiverbt").toggleClass("btshrink");
	   			});
	   			   			
	   			
	   		$(".defensebt").click(function(g){

	   			   			$("li:contains('DST')").toggleClass("hiddenbt");
	   			   			$(".defensebt").toggleClass("btshrink");
	   			});

	   		$(".kickerbt").click(function(g){

	   			   			$("li:contains('K-')").toggleClass("hiddenbt");
	   			   			$(".kickerbt").toggleClass("btshrink");
	   			});


	   		var wrap = $("#wrap");

			$(window).on("scroll", function() {
    
			  if ($(window).scrollTop() > 75) {
			    wrap.addClass("positionsbartop");
			  } else {
			    wrap.removeClass("positionsbartop");
			 }
				});	   			

	   		
			

			

			//.css("cursor","pointer")