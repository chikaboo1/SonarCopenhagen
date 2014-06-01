 $(document).ready(function(){


 	//playlist desktop

	$("#playlist-wrapper-desktop").toggle(

		function()
		{
		    $('#playlist-wrapper-desktop').animate({left:'0'}, 200);
		},
		function()

		{

		    $('#playlist-wrapper-desktop').animate({left:'-350px'}, 200);

		}


		);
	//playlist mobile

	$('#playlist-wrapper-mobile').hide();

	$( "#playlist-button-mobile" ).click(function(e) {
		e.stopPropagation();
	  $( "#playlist-wrapper-mobile" ).slideToggle('fast');
	});

	$('body').click(function (event) {
    $('#playlist-wrapper-desktop').animate({left:'-350px'}, 200);
    $('#playlist-wrapper-mobile').hide();
	});


    // stratus player

    if ($(window).width() > 760) {
 	$.stratus({
      links: 'https://soundcloud.com/natasha-natarajan/sets/vega',
      color: '2e3192'
    });
 }

 	//mobile menu
 	$("#mobile-menu-button").click(function(){
 		$("nav").slideToggle();

 	});

 	//competition upload
 	$("#contestant-upload").hide();
 	$("#contestant-upload-button").click(function(){
 		$("#contestant-upload").slideToggle();

 	});

  });

