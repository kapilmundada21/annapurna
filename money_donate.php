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
        <div class="donation">
            <h1>Donation</h1>
            <hr>
            <div class="donation_amount" id="donation_amount">
                <button type="button" class="amount selected_amount">50</button>
                <button type="button" class="amount">100</button>
                <button type="button" class="amount">250</button>
                <button type="button" class="amount">500</button>
                <button type="button" class="amount">1000</button>
                <button type="button" class="amount" id="other_amount">Other</button>
            </div>
        </div>
        <div class="designation_containor">
            <h1>Designation</h1>
            <hr>
            <div class="designation">
                <label for="designation">Designation : </label> 
                <select name="designation" id="designation">
                    <option value="grt_need">Gretest Needs</option>
                    <option value="food">Food</option>
                    <option value="cloths">Cloths</option>
                </select>
            </div>
        </div>
        <div class="billing_address">
            <h1>Billing Address</h1>
            <hr>
            <div class="address">
                <form name="billing" action="" method="post">
                    <table cellspacing="15" cellpadding="10">
                        <tr>
                          <th><label for="name">Name : </label></th>
                          <td colspan="3">
                              <input type="text" name="name" id="name" placeholder="First Name" required>
                              <input type="text" name="name" id="name" placeholder="Midddle Name" required>
                              <input type="text" name="name" id="name" placeholder="Last Name" required>
                          </td>
                        </tr>
                        <tr>
                          <th><label for="email">Email : </label></th>
                          <td><input type="email" name="email" id="email" placeholder="Email" required></td>
                        </tr>
                        <tr>
                          <th><label for="phone">Phone : </label></th>
                          <td><input type="number" name="phone" id="phone" placeholder="Phone(optional)"></td>
                        </tr>
                        <tr>
                          <th><label for="country">Country : </label></th>
                          <td><input type="text" name="country" id="country" placeholder="Country" required></td>
                        </tr>
                        <tr>
                          <th><label for="address">Address : </label></th>
                          <td><textarea name="address" id="address" cols="30" rows="5" placeholder="address" required></textarea></td>
                        </tr>
                      </table>
                      <input type="checkbox" name="anonymous" id="anonymous">
                      I would like this gift to remain anonymous
                </form>
            </div>
        </div>
        <div class="payment_details">
            <h1>Payment Details</h1>
            <hr>
            <div class="payment">
                <label for="payment_method" class="payment_label"><b>Payment Method : </b></label>
                <button type="button" name="credit" class="selected_button" id="credit">Credit Card</button>
                <button type="button" name="debit" class="" id="debit">Direct Debit</button>
                <table name="credit_details" id="credit_details" cellspacing="15" cellpadding="10">
                    <tr>
                      <th><label for="cardholder_name">Cardholder Name : </label></th>
                      <td><input type="text" name="cardholder_name" id="cardholder_name" placeholder="Cardholder Name" required></td>
                    </tr>
                    <tr>
                      <th><label for="card_number">Card Number : </label></th>
                      <td><input type="number" name="card_number" id="card_number" placeholder="Card Number" required></td>
                    </tr>
                    <tr>
                      <th><label for="expiration">Expiration : </label></th>
                      <td>
                        <select name="month" id="month">
                            <option value="select" disabled>Month</option>
                            <option value="month">01</option>
                            <option value="month">02</option>
                            <option value="month">03</option>
                            <option value="month">04</option>
                            <option value="month">05</option>
                            <option value="month">06</option>
                            <option value="month">07</option>
                            <option value="month">08</option>
                            <option value="month">09</option>
                            <option value="month">10</option>
                            <option value="month">11</option>
                            <option value="month">12</option>
                        </select>
                        <select name="year" id="year">
                            <option value="select" disabled>Year</option>
                            <option value="year">2022</option>
                            <option value="year">2023</option>
                            <option value="year">2024</option>
                            <option value="year">2025</option>
                            <option value="year">2026</option>
                            <option value="year">2027</option>
                            <option value="year">2028</option>
                            <option value="year">2029</option>
                            <option value="year">2030</option>
                            <option value="year">2031</option>
                            <option value="year">2032</option>
                            <option value="year">2033</option>
                            <option value="year">2034</option>
                            <option value="year">2035</option>
                            <option value="year">2036</option>
                        </select>
                      </td>
                    </tr>
                    <th><label for="cvc">CVC : </label></th>
                    <td><input type="number" name="cvc" id="cvc" placeholder="cvc" minlength="3" maxlength="3">   </td>
                    <tr>
                    </tr>
                </table>
                <table name="debit_details" id="debit_details" cellspacing="15" cellpadding="10">
                    <tr>
                      <th><label for="bank_name">Bank Name : </label></th>
                      <td><input type="text" name="bank_name" id="bank_name" placeholder="Bank Name" required></td>
                    </tr>
                    <tr>
                      <th><label for="routing_number">Routing Number : </label></th>
                      <td><input type="text" name="routing_number" id="routing_number" placeholder="Routing Number" required></td>
                    </tr>
                    <tr>
                      <th><label for="account_number">Account Number: : </label></th>
                      <td><input type="text" name="account_number" id="account_number" placeholder="Account Number" required></td>
                    </tr>
                    <tr>
                      <th><label for="account_holder">Account Holder : </label></th>
                      <td><input type="text" name="account_holder" id="account_holder" placeholder="Account Holder" required></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="recurring">
          <h1>Recurring Gift</h1>
          <hr>
          <input type="checkbox" name="recurring_gift" id="recurring_gift">
          Make this a recurring gift
          <div class="gift">
            <span>Give</span>
            <select name="gift_frequency" id="gift_frequency">
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
          <label for="comment">Leave a comment (optional) : </label><br>
          <textarea name="comment" id="comment" cols="30" rows="5" placeholder="comment"></textarea><br>
          <!-- <button type="submit">Donate</button> -->
          <div class='pm-button'>
            <a href='https://www.payumoney.com/paybypayumoney/#/B1FBF1A8D1A80A029A5F82907E12975E'><img src='https://www.payumoney.com/media/images/payby_payumoney/new_buttons/22.png' /></a>
        </div>
        </div>
    </div>

    <script>
      // Amount
      var donation_amount = document.getElementById("donation_amount");
      var amounts = donation_amount.getElementsByClassName("amount");
      for (var i = 0; i < amounts.length; i++) {
          amounts[i].addEventListener("click", function() {
              var current = document.getElementsByClassName("selected_amount");
              current[0].className = "amount";
              this.className += " selected_amount";
          });
        }
              
        
      // Amount Other
      let other_amount = document.getElementById('other_amount');
      let html = `<input type="text" name="amount" placeholder="other" id="input_amount" class="input_amount">`;
      let input_amount = document.getElementById('input_amount');
      other_amount.addEventListener('click' , addhtml());
      function addhtml(){
        other_amount.innerHTML = html;  
      }
      

      // payment details
      let credit = document.getElementById('credit');
      let debit = document.getElementById('debit');
      credit.addEventListener('click' , function() {
          credit.className = "selected_button";
          debit.className = "";
          document.getElementById('credit_details').style.display = "block";
          document.getElementById('debit_details').style.display = "none";
      });
      debit.addEventListener('click' , function() {
          debit.className = "selected_button";
          credit.className = "";
          document.getElementById('credit_details').style.display = "none";
          document.getElementById('debit_details').style.display = "block";
      });
    </script>
  <?php include 'other/footer.php';?>

</body>
</html>