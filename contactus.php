<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/contactus.css">
</head>

<body>

    <?php include 'other/header.php';?>

    <div class="box">
        <div class="text">
            <center>
                <h1>Contact <span class="red">Us</span></h1>
                <div class="redline-address"></div>
            </center>
            <p><b>Have Questions ? We have answers ( may be )</b></p>
        </div>
    </div>

    <div class="touch">
        <center>
            <h2>Get in touch</h2>
            <div class="redline-address"></div>
        </center>
    </div>

    <form action="" class="contact-form" name="contact-form">
        <div class="input_fileds">
            <div class="margin"><input class="firstname" type="text" placeholder="First Name" name="firstname" required></div>
        
            <div class="margin"><input class="lastname" type="text" placeholder="Last Name" name="lastname" required></div>

            <div class="margin"><input class="company" type="text" placeholder="Company Name" name="company" required></div>
        
            <div class="margin"><input class="number" type="number" placeholder="Phone" name="phone" required></div>
        
            <div class="margin"><input class="email" type="email" placeholder="E-mail" name="email" required></div>
        
            <div class="margin"><input class="city" type="text" placeholder="City" name="City" required></div>

            <div class="margin_textarea"><textarea class="message" rows="6" placeholder="Message" name="message" required></textarea></div>
        </div>
        <div class="form_btn">
            <button type="submit">SEND MESSAGE</button>
        </div>
    </form>

    <!--address-->

    <div class="address">
        <div class="text_address">
            <h3>Our Address</h3>
            <div class="redline-address"></div>
            <p>Gokhale Education Society's <br>R. H. Sapat College Engineering,</p>
            <p>Collage Road,</p>
            <p>Nashik,</p>
            <p>Maharashtra,</p>
            <p>India 422005</p>
            <div class="phone-e">
                <p><span class="glyphicon glyphicon-envelope"> </span><a href="mailto:weebtoons065@gmail.com"> weebtoons065@gmail.com</a></p>
                <!-- <p><span class="glyphicon glyphicon-phone"></span> +91-9876543210</p> -->
            </div>
        </div>
        <!--map-->
        <div class="map_address">
            <div id="map"></div>
        </div>
    </div>

    <?php include 'other/footer.php';?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/7.14.1-0/firebase.js"></script>
    
    <script src="backend/contact.js"></script>
    
    <script>
        function initMap(){
            const location = { lat: 20.005150, lng: 73.758179 };
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 16 ,
                center: location,
            });
            const marker = new google.maps.Marker({
                position: location,
                map: map,
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAB0INHqlcOcNexR3OOwZsIghGsh8rCI4A&callback=initMap&v=weekly" async></script>
    
</body>
</html>