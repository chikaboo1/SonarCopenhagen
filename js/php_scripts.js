 var xml; //var that will be used for ajax

 //this function sends all our contestant information to our php files to be uploaded to our database. It is done via ajax, so no page refresh is required.
  function add(){

    //gets the first form element in the doc. since we only have one, it will find our upload form
    var form = document.querySelector('form');

    //create a variable for ajax request
    var xml = new XMLHttpRequest();

    //sees if there was some sort connection and upload to the php
    xml.upload.addEventListener('load',function(e){
      console.log('Congrats! There was a connection');
    },false);

    //listens to see if the submit button has been clicked.
    form.addEventListener('submit', function(e){
      //stops it from refreshing
      e.preventDefault();

      //creates a FormData object that will hold all the data from our Form
      var formData = new FormData(form);

      //any time the state of the server changes, our alertContents function runs
      xml.onreadystatechange = alertContents;

      //we open a connection to the php file of our choice via POST and do it asynchrounsly
      xml.open('post', "../php/contestant-upload.php", true);

      //we send our formdata object holding all our form data and file
      xml.send(formData);

       }, false);

    //runs on statechange of the server
    function alertContents() {
      //if request happend and there is a response
      if (xml.readyState === 4) {
        //if the http request was OK
        if (xml.status === 200) {
          // we put the response data in the mydiv
          //

          //if the response data is longer than 259 character, this means it has completed and is sending back all the contestants. So we replace the current all-contestants with the new one, which has the latest entry
          if (xml.responseText.length > 259) {
            document.getElementById("myDiv").innerHTML =  "<h2>Awesome! You've been added to the competion. </h2><h2>Check out your entry below</h2> <h2>Good Luck! </h2>";

            document.getElementById("all-contestants").innerHTML = xml.responseText;
          }
            //this means the response was 259 or less character long. Which means all the contestants didn't get sent back. Which means there was an error. We put this error message into the myDiv right by the submit form
            else {

              document.getElementById("myDiv").innerHTML = xml.responseText;
          }

        } else {
          //or we send an alert window saying there was a problem with their request to the server.
          alert('There was a problem with the request.');
        }
      }
    }

}



//this function handles our voting system. This is done with ajax, so the user does not have to refresh to see their result.
function post(id, user){
  //create a variable that holds the html id of the div where the clicked button was
  var selection = "#" + id + " .votes" ;

  //we send the id of the person being voted for and the person did the voting to php via jquery's post method.
  $.post('php/vote-upload.php', {posttest:id, postUser:user},
    // we have a callback that puts our recieved data from the php into the correct spot in the html.
    function(data){
      $(selection).replaceWith("<p class = 'votes'>" + data + "</p>");
    });
}

