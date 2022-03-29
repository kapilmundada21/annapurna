<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate</title>
    <link rel="stylesheet" href="css/donate.css">
</head>
<body>

  <?php include 'other/header.php';?>

    <div class="main_containor">
        <h1>Donate Food</h1>
        <p>Place your request we will reach you soon..</p>
        <hr>
        
        <div class="food_details">
            <form name="food" action="" method="post"  class="foodform">
                <table cellspacing="15" cellpadding="10">
                    <tr>
                        <th><label for="name">Name : </label></th>
                        <td colspan="3">
                            <input class="firstname" type="text" name="name" id="name" placeholder="First Name" required>
                            <input class="middlename" type="text" name="name" id="name" placeholder="Midddle Name" required>
                            <input class="lastname" type="text" name="name" id="name" placeholder="Last Name" required>
                        </td>
                    </tr>
                    <tr>
                        <th><label for="email">Email : </label></th>
                        <td><input class="email" type="email" name="email" id="email" placeholder="Email" required></td>
                    </tr>
                    <tr>
                        <th><label for="phone">Phone : </label></th>
                        <td><input class="number" type="number" name="phone" id="phone" placeholder="Phone(optional)"></td>
                    </tr>
                    <tr>
                        <th><label for="food_type">Food Type : </label></th>
                        <td>
                            <select class="foodtype" name="food_type" id="food_type">
                                <option value="cooked">Cooked</option>
                                <option value="uncooked">Uncooked</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th><label for="country">Country : </label></th>
                        <td><input class="country" type="text" name="country" id="country" placeholder="Country" required></td>
                    </tr>
                    <tr>
                        <th><label for="address">Address : </label></th>
                        <td><textarea class="address" name="address" id="address" cols="30" rows="5" placeholder="address" required></textarea></td>
                    </tr>
                    </table>
                    <input class="anonymous" type="checkbox" name="anonymous" id="anonymous">
                    I would like this gift to remain anonymous
                    <div class="submit_donation">
          <hr>
          
          <button type="submit">Donate</button>
        </div>
            </form>
        </div>
        
        
    </div>    
  <?php include 'other/footer.php';?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/7.14.1-0/firebase.js"></script>
  <script src="backend/donation_backend/food.js"></script>

</body>
</html>