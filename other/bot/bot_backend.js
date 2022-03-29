// Your web app's Firebase configuration
const firebaseConfig = {
    apiKey: "AIzaSyD0efsrVF4GSQisMssigiHP6YJJ8Irwlcg",
    authDomain: "bot-annapurna.firebaseapp.com",
    databaseURL: "https://bot-annapurna-default-rtdb.firebaseio.com",
    projectId: "bot-annapurna",
    storageBucket: "bot-annapurna.appspot.com",
    messagingSenderId: "902907051382",
    appId: "1:902907051382:web:c0225e3af178a84b65ce57"
  };
// Initialize Firebase
firebase.initializeApp(firebaseConfig);

// Refernece contactInfo collections
let contactInfo = firebase.database().ref("infos");

// Listen for a submit
document.querySelector(".instant").addEventListener("submit", submitForm);

function submitForm(e) {
    e.preventDefault();

    //   Get input Values
    let name = document.querySelector(".name").value;
    let email = document.querySelector(".email").value;
    let message = document.querySelector(".message").value;
    
    console.log(name, email, message);

    saveContactInfo(name, email, message);

    document.querySelector(".instant").reset();
}

// Save infos to Firebase
function saveContactInfo(name, email, message) {
    let newContactInfo = contactInfo.push();

    newContactInfo.set({
        name: name,
        email: email,
        message: message,
        
    });
}