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


//instagram
var feed = new Instafeed({
    get: 'tagged',
    tagName: 'pumpehuset',
    clientId: '4604e28ba24e4582ab9dae943c927879'
});


function createInstagram(venue){
	var venue  = new Instafeed({
		get : "tagged",
		tagName : venue,
		clientId: '4604e28ba24e4582ab9dae943c927879'
	});

	return venue.run();

}
function placeInstagram(venue){
	var instafeed = document.getElementById("instafeed");
		//instafeed.innerHTML = feed.run();
		instafeed.innerHTML = createInstagram(venue);
}

//google mapes
function initialize(lat, long) {
  var mapOptions = {
    zoom: 8,
    center: new google.maps.LatLng(lat, long)
  };

  var map = new google.maps.Map(document.getElementById('instafeed'),
      mapOptions);

  var myLatlng = new google.maps.LatLng(lat, long);


  var marker = new google.maps.Marker({
    position: myLatlng,
    map: map,
    title:"Hello World!"
	});
}

function placeMap(lat, long){
	var instafeed = document.getElementById("instafeed");
		instafeed.innerHTML = initialize(lat, long);
}
