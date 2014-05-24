var facebookID;

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

function login(id){
  FB.login(function(response){
    facebookID = response.authResponse.userID;
    post(id, facebookID);

    console.log(response.authResponse.accessToken);

    console.log(facebookID);
  });
}

function logOut(){
  FB.getLoginStatus(function(response){
    if(response.status === 'connected'){
      FB.logout();
      alert("you have been logged out of facebook.");
    }
  });
}