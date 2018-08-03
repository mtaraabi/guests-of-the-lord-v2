// // listen for form 
// document.getElementById('noteForm').addEventListener('submit', submitForm);

// /// function submitForm

// function submitForm(e){
//     // pervent submiting to the same index (defult behaver)
//     e.preventDefault();
//     // getting values
//     var title = getInputID('title'); 
//     var message = getInputID('message'); 
//     // save message
//     saveMessage(title, message);
//     // alert
//     document.querySelector('.alert').style.display ='block';
//     // alert gose away 
//     setTimeout(function(){
//       document.querySelector('.alert').style.display ='none';  
//     }, 3000);

// }

// /// function to get form value 
// function getInputID(id){
//     return document.getElementById(id).value;
// }

// // save messages
// function saveMessage(title, message){
//     var newnotSponsorRef = notSponsorRef.push();
//     newnotSponsorRef.set({
//         title: title,
//         message: message
//     });
// }

