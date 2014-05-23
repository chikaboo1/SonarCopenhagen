 $(document).ready(function(){

 

 	//playlist slider

    // $('img.playlist-text, #playlist-wrapper').click(function(e){
    // 	$("#playlist-wrapper").animate({
    // 		left:["toggle","0"]

    // 	});

    // });

  	if($('#playlist-wrapper').css('width') === '100%'){

    $("#playlist-wrapper").toggle(

		function()
		{
		    $('#playlist-wrapper').animate({left:'0'}, 200);
		},
		function()

		{
			
		    $('#playlist-wrapper').animate({left:'-80%'}, 200);

		}


		);

}

else {

	$("#playlist-wrapper").toggle(

		function()
		{
		    $('#playlist-wrapper').animate({left:'0'}, 200);
		},
		function()

		{
			
		    $('#playlist-wrapper').animate({left:'-37%%'}, 200);

		}


		);


}

    // stratus player
 	$.stratus({
      links: 'https://soundcloud.com/natasha-natarajan/sets/vega'
    });

  });