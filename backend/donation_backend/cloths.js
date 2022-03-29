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
let contactInfo = firebase.database().ref("cloths");

// Listen for a submit
document.querySelector(".clothform").addEventListener("submit", submitForm);

function submitForm(e) {
    e.preventDefault();

    //   Get input Values
    let firstname = document.querySelector(".firstname").value;
    let middlename = document.querySelector(".middlename").value;
    let lastname = document.querySelector(".lastname").value;
    let email = document.querySelector(".email").value;       
    let number = document.querySelector(".number").value;
    let clothstype = document.querySelector(".clothstype").value;
    let country = document.querySelector(".country").value;
    let address = document.querySelector(".address").value;
    let annonymous = document.querySelector(".anonymous").value;

    console.log(firstname, middlename, lastname, email, number, clothstype, country, address, annonymous);

    saveContactInfo(firstname, middlename, lastname, email, number, clothstype, country, address, annonymous);

    document.querySelector(".clothform").reset();
}

// Save infos to Firebase
function saveContactInfo(firstname, middlename, lastname, email, number, clothstype, country, address, annonymous) {
    let newContactInfo = contactInfo.push();

    newContactInfo.set({
        firstname: firstname,
        middlename: middlename,
        lastname: lastname,
        email: email,                
        number: number,
        clothstype: clothstype,
        country: country,
        address:address,
        annonymous:annonymous,        
    });
}
