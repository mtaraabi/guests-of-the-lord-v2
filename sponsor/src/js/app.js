
if ('serviceWorker' in navigator) {
  navigator.serviceWorker
    .register('/sw.js')
    .then(function() {
      console.log('Service worker registered!');
    });
};
// Initialize Firebase
//   var config = {
//     apiKey: "AIzaSyAoGP4z_87OaYEUnV0Dsu6apQ4WkGEi5_k",
//     authDomain: "guests-of-the-lord.firebaseapp.com",
//     databaseURL: "https://guests-of-the-lord.firebaseio.com",
//     projectId: "guests-of-the-lord",
//     storageBucket: "guests-of-the-lord.appspot.com",
//     messagingSenderId: "407329470115"
//   };
//   firebase.initializeApp(config);
// // create colloction for message
//     var messageRef = firebase.database().ref('messages');
// // create colloction for message
//     var notSponsorRef = firebase.database().ref('notification-sponsor');
// // getting data form firebase
// function getNote(){
//   const db = firebase.database();
//   const events = db.chlid('event');

//   const query = events
//                       .orderByChild('title')
//                       .limtToLast(1);
//   query.on('value', snap => {
//     console.log('it work ');
//   });
//   };