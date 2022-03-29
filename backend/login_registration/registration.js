document.getElementById("registration-form").addEventListener("submit",(event)=>{
    event.preventDefault()
})

firebase.auth().onAuthStateChanged((user)=>{
    if(user){
        location.replace("Dashboardfiles/dashboard.html")
    }
})

function login(){
    const email = document.getElementById("email").value
    const password = document.getElementById("password").value
    firebase.auth().signInWithEmailAndPassword(email, password)
    .catch((error)=>{
        document.getElementById("error").innerHTML = error.message
    })
}

function signUp() {

    // Fetching value from a html input fields with id
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;
    
    // Fetching additional informations
    const name = document.getElementById("name").value;
    const mobile = document.getElementById("number").value;
    
    // Performing Sign Up Operation
    firebase.auth().createUserWithEmailAndPassword(email, password)
      .then((userCredential) => {
        // Updating additional information
        const user = userCredential.user;
        user.updateProfile({
          name,
          mobile
        });
      })
      .catch((error) => {
        document.getElementById("error").innerHTML = error.message
    })
  }
  

function forgotPass(){
    const email = document.getElementById("email").value
    firebase.auth().sendPasswordResetEmail(email)
    .then(() => {
        alert("Reset link sent to your email id")
    })
    .catch((error) => {
        document.getElementById("error").innerHTML = error.message
    });
}