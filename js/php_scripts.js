  function add(){

    var form = document.querySelector('form');

    var xml = new XMLHttpRequest();

    xml.upload.addEventListener('load',function(e){
      console.log('some sort of mother fucking connection!');
    },false);

    form.addEventListener('submit', function(e){
      e.preventDefault();

      var formData = new FormData(form);

      xml.open('post', "../php/contestant-upload.php", true);
      xml.send(formData);
     }, false);

}


function post(id, user){
  var selection = "#" + id + " .votes" ;
  $.post('php/vote-upload.php', {posttest:id, postUser:user},
    function(data){
      $(selection).replaceWith("<p class = 'votes'>" + data + "</p>");
    });
}

