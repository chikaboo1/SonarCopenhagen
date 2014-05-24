function post(id, user){
  var selection = "#" + id + " .votes" ;
  $.post('php/vote-upload.php', {posttest:id, postUser:user},
    function(data){
      $(selection).replaceWith("<p class = 'votes'>" + data + "</p>");
    });
}

function add(){
  var firstName = document.getElementById('firstname').value;
  var lastName = document.getElementById('lastname').value;
  var email = document.getElementById('email').value;
  var artistName = document.getElementById('artistname').value;
  var trackTitle = document.getElementById('tracktitle').value;
  var soundName = document.getElementById('soundname').value;
  var siteLink = document.getElementById('sitelink').value;



  $.post('php/contestant-upload.php', {postFirstName:firstName, postLastName:lastName,postEmail:email,postArtistName:artistName,postTrackTitle:trackTitle,postSoundName:soundName,postSiteLink:siteLink}, function(data){
      $('#result').html(data);
  });
}

