<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support Us</title>
    <link rel="stylesheet" href="css/supportus.css">
</head>

<body>

    <?php include 'other/header.php';?>

    <div class="box">
        <div class="box_text">
            <center>
                <h1>Support <span class="red">Us</span></h1>
                <div class="redline-address"></div>
            </center>
            <p><b>Help us to reach out to needy People</b></p>
        </div>
    </div>

    <div class="block_content_left">
        <div class="text reveal">
            <h2>What we are trying to do?</h2><br>
            <p>
                We are going to work with the idea that someone's will be filled by us. e should help as many people as possible who need food.
            </p>
            <p>
                There are still 2/3 of the world's population who go to bed hungry at night.
                At such a time, the organization will not be able to meet the needs of so many people...
            </p>
            <p>
                So we thought about how we can get help from the common man to those who need food?
            </p>
        </div>
        <center>
            <img src="images/support/tryingToDo.jpg" width="250px" height="250" class="reveal">
        </center>
    </div>

    <div class="block_content_right">
        <center>
            <img src="images/support/ourVision.jpg" width="250px" height="250" class=" reveal">
        </center>
        <div class="text reveal">
            <h2>Our Vision</h2><br>
            <p>
                1. We are trying to help people who didn't get food by supplying food from people to people. <br>
                2. We want that everyone gets food...so that they don't face things like malnutrition. <br>
                3. Supply food to those in need from those who want to help. <br>
                4. Our little efforts to get out of this world of hunger. <br>
                5. Want to build a healthy society. <br>
                6. I want to see a child's happiness after his stomach is full by a healthy diet. <br>
            </p>
            <p>
                So join us and we will make this world free from hunger !!!
            </p><br>
            <a href="registration.php"><button type="button">Be a Member</button></a>
        </div>
    </div>

    <div class="block_content_left">
        <div class="text reveal">
            <h2>Work of Member</h2><br>
            <p>
                Supply to those in need from those who want to help
                create your team (if u can) to supply food(cook or uncooked).
            </p>
            <p>
                If possible, try to provide daily food using the concept of daily (1 roti from 1 family). <br>
                If not, try to supply monthly food If possible, connect with the hotel and try to provide 
                the remaining food to the needy.
            </p>    
        </div>
        <center>
            <img src="images/home/membersDo.jpg" width="250px" height="250" class="reveal">
        </center>
    </div>

    <?php include 'other/footer.php';?>

    <script type="text/javascript">
        window.addEventListener('scroll', reveal);

        function reveal(){
          var reveals = document.querySelectorAll('.reveal');

          for(var i = 0; i < reveals.length; i++){

            var windowheight = window.innerHeight;
            var revealtop = reveals[i].getBoundingClientRect().top;
            var revealpoint = 150;

            if(revealtop < windowheight - revealpoint){
              reveals[i].classList.add('reveal_active');
            }
            else{
              reveals[i].classList.remove('reveal_active');
            }
          }
        }
    </script>

</body>
</html>