const firebaseConfig = {
    apiKey: "AIzaSyD-QcWNjpEZc4Gy7idRtWIblULtUEHHYok",
    authDomain: "donations-8af0b.firebaseapp.com",
    databaseURL: "https://donations-8af0b-default-rtdb.firebaseio.com",
    projectId: "donations-8af0b",
    storageBucket: "donations-8af0b.appspot.com",
    messagingSenderId: "1011746581059",
    appId: "1:1011746581059:web:ba023976843e3e1ec402f6"
  };

  // Initialize Firebase
firebase.initializeApp(firebaseConfig);

// Refernece contactInfo collections
let contactInfo = firebase.database().ref("food");

// Listen for a submit
document.querySelector(".foodform").addEventListener("submit", submitForm);

function submitForm(e) {
    e.preventDefault();

    //   Get input Values
    let firstname = document.querySelector(".firstname").value;
    let middlename = document.querySelector(".middlename").value;
    let lastname = document.querySelector(".lastname").value;
    let email = document.querySelector(".email").value;       
    let number = document.querySelector(".number").value;
    let foodtype = document.querySelector(".foodtype").value;
    let country = document.querySelector(".country").value;
    let address = document.querySelector(".address").value;
    let annonymous = document.querySelector(".anonymous").value;

    console.log(firstname, middlename, lastname, email, number, foodtype, country, address, annonymous);

    saveContactInfo(firstname, middlename, lastname, email, number, foodtype, country, address, annonymous);

    document.querySelector(".foodform").reset();
}

// Save infos to Firebase
function saveContactInfo(firstname, middlename, lastname, email, number, foodtype, country, address, annonymous) {
    let newContactInfo = contactInfo.push();

    newContactInfo.set({
        firstname: firstname,
        middlename: middlename,
        lastname: lastname,
        email: email,                
        number: number,
        foodtype: foodtype,
        country: country,
        address:address,
        annonymous:annonymous,        
    });
}