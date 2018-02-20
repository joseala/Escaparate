function onSignIn(googleUser) {
    "use strict";
    var profile = googleUser.getBasicProfile();
    
}

function signOut() {
    "use strict";
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
        
    });
}

window.onload = onSignIn;