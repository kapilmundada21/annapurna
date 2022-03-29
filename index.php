<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="other/bot/bot.css">
    <title>Annapurna</title>
  </head>
  <body>

  <?php include 'other/header.php';?>

  <div class="img_slideshow" align="center">
    <img class="mySlides" src="images/home_slideshow/home_slideshow1.jpg">
    <img class="mySlides" src="images/home_slideshow/home_slideshow2.jpg">
    <img class="mySlides" src="images/home_slideshow/home_slideshow3.jpg">
    <img class="mySlides" src="images/home_slideshow/home_slideshow4.jpg">
  </div>

    <div class="content1">
      <div class="text reveal">
        <p><h4>
          Hey, are u thinking our society is happy coz we get food whenever we want....isn't it?
        </h4></p><br>
        <p>
          But what if I say that two-thirds of our society didn't get food for a week. Yes that's how it is....single largest contributor to disease in the world is "MALNUTRITION"
        </p>
        <p>
        People experiencing food insecurity have typically run out of food for days......imagine you are experiencing this....isn't it terrible?
        </p><br>
      </div>
      <div class="content1img reveal" align="center">
        <img src="images/home/home_content1a.png" alt="logo" width="300px" height="250px">
        <img src="images/home/home_content1b.png" alt="logo" width="300px" height="250px">
        <img src="images/home/home_content1c.png" alt="logo" width="300px" height="250px">
      </div>
    </div>
      
    <div class="parallax"></div>
      
    <div class="content2">
      <div class="left reveal">
          <p>
            Hunger is the leading cause of death in the world. Our planet has provided us with tremendous resources, but unequal access and inefficient handling leave millions of people malnourished. 
          </p>
          <p>
            Children are particularly badly affected. In traditional societies, they suffer heavily from the consequences of structural inequalities. 
          </p>
      </div>
      <div class="right reveal">
        <p>
          925 million <br>																
          people worldwide will go to bed <br>
          hungry tonight <br>
        </p>
      </div>
    </div>

    <div class="block_content_right">
      <center>
        <img src="images/home/causeOfHunger.jpg" width="250px" height="250" class=" reveal">
      </center>
      <div class="text reveal">
          <h2>Cause of Hunger</h2><br>
          <p>
          Due to an unbalanced diet, vital vitamins are lacking, along with iron, iodine, zinc, or diet A. At first glance, the effects aren't always very visible, however, over the long-time period, those nutrient deficiencies result in severe diseases. In particular, youngsters are not able to expand correctly, neither mentally nor physically. The danger of dying is high.
          </p>
        <a href="https://pmny.in/qrgpx69I5tQw"><button type="button">Donate Now</button></a>
      </div>
    </div>

    <div class="block_content_left">
      <div class="text reveal">
          <h2>What we are trying to do?</h2><br>
          <p>
            We are trying to help people who didn't get food by supplying food from people to people
          </p>
          <p>
            We want that everyone gets food...so that they don't face things like malnutrition 
          </p>
          <p>
            supply the food to those in need from those who want to help 
          </p>
      </div>
      <center>
        <img src="images/home/tryingToDo.jpg" width="250px" height="250" class="reveal">
      </center>
    </div>

    <div class="block_content_right">
      <center>
        <img src="images/home/membersDo.jpg" width="250px" height="250" class=" reveal">
      </center>
      <div class="text reveal">
          <h2>What members do :</h2><br>
          <p>
            Supply to those in need from those who want to help
            create your team (if u can) to supply food(cook or uncooked)
          </p>
          <p>
            If possible, try to provide daily food using the concept of daily (1 roti from 1 family) ... if not, try to supply monthly food If possible, connect with the hotel and try to provide the remaining food to the needy.
        </p><br>
        <a href="registration.php"><button type="button" >Be a Member</button></a>
      </div>
    </div>

    <input type="checkbox" id="check"> <label class="chat-btn" for="check"> <i class="fa fa-commenting-o comment"></i>
        <i class="fa fa-close close"></i> </label>
    <div class="wrapper">
        <div class="header">
            <h6>Quick Responce</h6>
        </div>
        <div class="content">
            <span>Please fill out the form to start chat!</span>
            <form action=""  class="instant">
                <input class="name" type="text" class="form-control name" placeholder="Name" required>
                <input class="email" type="text" class="form-control email" placeholder="Email" required>
                <textarea class="message" class="form-control message" placeholder="Your Text Message" required></textarea>
                <span><small>Your query will solved within 24hrs</small></span>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/7.14.1-0/firebase.js"></script>
    <script src="other/bot/bot_backend.js"></script>
    
    <?php include 'other/footer.php';?>

    <script type="text/javascript">

        // image slider js
        var myIndex = 0;
        carousel();

        function carousel() {
          var i;
          var x = document.getElementsByClassName("mySlides");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
          }
          myIndex++;
          if (myIndex > x.length) {myIndex = 1}    
          x[myIndex-1].style.display = "block";  
          setTimeout(carousel, 2000); // Change image every 2 seconds
        }

        // revel animation js
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