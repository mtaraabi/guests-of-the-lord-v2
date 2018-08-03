
if ('serviceWorker' in navigator) {
  navigator.serviceWorker
    .register('/sw.js')
    .then(function() {
      console.log('Service worker registered!');
    });
}
// Initialize Firebase
  var config = {
    apiKey: "AIzaSyAoGP4z_87OaYEUnV0Dsu6apQ4WkGEi5_k",
    authDomain: "guests-of-the-lord.firebaseapp.com",
    databaseURL: "https://guests-of-the-lord.firebaseio.com",
    projectId: "guests-of-the-lord",
    storageBucket: "guests-of-the-lord.appspot.com",
    messagingSenderId: "407329470115"
  };
  firebase.initializeApp(config);
// create colloction 
    var messageRef = firebase.database().ref('messages');
// listen for form 
document.getElementById('contactForm').addEventListener('submit', submitForm);

/// function submitForm

function submitForm(e){
    // pervent submiting to the same index (defult behaver)
    e.preventDefault();
    // getting values
    var name = getInputID('name'); 
    var company = getInputID('company'); 
    var email = getInputID('email'); 
    var phone = getInputID('phone'); 
    var message = getInputID('message'); 
    // save message
    saveMessage(name, company, email, phone, message);
    // alert
    document.querySelector('.alert').style.display ='block';
    // alert gose away 
    setTimeout(function(){
      document.querySelector('.alert').style.display ='none';  
    }, 3000);

}

/// function to get form value 
function getInputID(id){
    return document.getElementById(id).value;
}

// save messages
function saveMessage(name, company, email, phone, message){
    var newMessageRef = messageRef.push();
    newMessageRef.set({
        name: name,
        company: company,
        email: email,
        phone: phone,
        message: message

    });
}

