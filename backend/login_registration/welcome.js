firebase.auth().onAuthStateChanged((user)=>{
    if(!user){
        location.replace("../login.php")
    }else{
        document.getElementById("user").innerHTML = "Hello, " + user.email
        document.getElementById("name").innerHTML = user.email
    }
})


function logout(){
    firebase.auth().signOut()
}

