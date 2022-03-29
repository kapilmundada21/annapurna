// Your web app's Firebase configuration
const firebaseConfig = {
    apiKey: "AIzaSyBYf41spsI-0pfgXoWvZIdh4k9e8KYGgvc",
    authDomain: "login-registration-cc0b4.firebaseapp.com",
    databaseURL: "https://login-registration-cc0b4-default-rtdb.firebaseio.com",
    projectId: "login-registration-cc0b4",
    storageBucket: "login-registration-cc0b4.appspot.com",
    messagingSenderId: "851900435946",
    appId: "1:851900435946:web:920caa6cbc87f4fad37693"
  };
// Initialize Firebase
firebase.initializeApp(firebaseConfig);

// Refernece contactInfo collections
let contactInfo = firebase.database().ref("contacts");

// Listen for a submit
document.querySelector(".contact-form").addEventListener("submit", submitForm);

function submitForm(e) {
    e.preventDefault();

    //   Get input Values
    let firstname = document.querySelector(".firstname").value;
    let lastname = document.querySelector(".lastname").value;
    let email = document.querySelector(".email").value;
    let message = document.querySelector(".message").value;    
    let number = document.querySelector(".number").value;
    let city = document.querySelector(".city").value;

    console.log(firstname, lastname, email, message, number, city);

    saveContactInfo(firstname, lastname, email, message, number, city);

    document.querySelector(".contact-form").reset();
}

// Save infos to Firebase
function saveContactInfo(firstname, lastname, email, message,  number, city) {
    let newContactInfo = contactInfo.push();

    newContactInfo.set({
        firstname: firstname,
        lastname: lastname,
        email: email,
        message: message,        
        number: number,    
        city: city,        
    });
}