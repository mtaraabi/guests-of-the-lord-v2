// Initialize Firebase
  var config = {
    apiKey: "AIzaSyAMSXB8WjvEpgsek_DBjalTkFn9G3bemu0",
    authDomain: "contact-form-624d1.firebaseapp.com",
    databaseURL: "https://contact-form-624d1.firebaseio.com",
    projectId: "contact-form-624d1",
    storageBucket: "contact-form-624d1.appspot.com",
    messagingSenderId: "596942654671"
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

