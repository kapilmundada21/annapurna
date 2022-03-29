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
        <h1>Donate Cloths</h1>
        <hr>
        <div class="food_details">
            <form name="food" action="" method="post" class="clothform">
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
                        <th><label for="cloths_type">Cloths Type : </label></th>
                        <td>
                            <select class="clothstype" name="cloths_type" id="cloths_type">
                                <option value="new">New Cloths</option>
                                <option value="old">Old Cloths</option>
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
           
        </div>
        <div class="recurring">
          <h2>Recurring Gift</h2>
          <hr>
          <input type="checkbox" name="recurring_gift" id="recurring_gift">
          Make this a recurring gift
          <div class="gift">
            <span>Give</span>
            <select name="gift_frequency" id="gift_frequency">
              <option value="monthly">Daily</option>
              <option value="monthly">Monthly</option>
              <option value="quarterly">Quarterly</option>
              <option value="Simiannually">Simiannually</option>
              <option value="annually">Annually</option>
            </select>
            <span> on </span>
            <select name="gift_duration" id="gift_duration">
              <option value="1">day 1 of each month</option>
              <option value="15">day 15 of each month</option>
            </select>
          </div>
        </div>
        <div class="submit_donation">
          <hr>
          
          <button type="submit">Donate</button>
        </div>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/7.14.1-0/firebase.js"></script>
  <script src="backend/donation_backend/cloths.js"></script>

    
  <?php include 'other/footer.php';?>

</body>
</html>