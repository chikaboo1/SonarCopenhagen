var facebookID;


//this checks to see if someone has logged into facebook. If they have it sends the id of the div they have clicked to the post function
function doLogin(id){
  FB.getLoginStatus(function(response) {
    if (response.status === 'connected') {
      facebookID = response.authResponse.userID;
      post(id, facebookID);
      // connected
    } else if (response.status === 'not_authorized') {
      // not_authorized
      login(id);
    } else {
      // not_logged_in
      login(id);
    }
  });
}

//facebook login dialogue appears if they haven't logged in
function login(id){
  FB.login(function(response){
    facebookID = response.authResponse.userID;
    post(id, facebookID);

    console.log(response.authResponse.accessToken);

    console.log(facebookID);
  });
}


//button to log people out
function logOut(){
  FB.getLoginStatus(function(response){
    if(response.status === 'connected'){
      FB.logout();
      alert("you have been logged out of facebook.");
    }
  });
}