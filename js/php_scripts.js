 var xml;
  function add(){

    var form = document.querySelector('form');

    var xml = new XMLHttpRequest();

    xml.upload.addEventListener('load',function(e){
      console.log('some sort of mother fucking connection!');
    },false);

    form.addEventListener('submit', function(e){
      e.preventDefault();

      var formData = new FormData(form);

      xml.onreadystatechange = alertContents;


      xml.open('post', "../php/contestant-upload.php", true);
      // xml.onload = function(){
      //   alert("you have been submitted to the contest");
      // }
      xml.send(formData);

       }, false);


    function alertContents() {
    if (xml.readyState === 4) {
      if (xml.status === 200) {
        alert(xml.responseText);
      } else {
        alert('There was a problem with the request.');
      }
    }
  }

}




function post(id, user){
  var selection = "#" + id + " .votes" ;
  $.post('php/vote-upload.php', {posttest:id, postUser:user},
    function(data){
      $(selection).replaceWith("<p class = 'votes'>" + data + "</p>");
    });
}

