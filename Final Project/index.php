<html>
<head>
  <link rel="stylesheet" type="text/css" href="Style.css">
  <title>
  Claudia
  </title>

</head>
  <Body>
    <!-- Side navigation -->
<div class="sidenav">
  <a href="hobbies.php">Hobbies</a>
  <a href="claudia.php">claudia</a>
  <a href="food.php">food</a>
  <a href="workout.php">workout</a>
</div>

<h1>Eating Healthy</H1>
<div>
<img id="imgs" src="2.jpg"/>
<p>Eating healthy has always made me feel better. I love to indudge in sweets and junk food, dont get me wrong. But eating healthy has such great benefits!</p>
</div>

<h1>Workout</H1>
<img id="imgs" src="1.png"/>
<p> If interested fill out this payment form </p>
</div>


</div>

<form action="Endpoint.php" method="post">
		<div>
			  <label>Payment amount</label>
			  <input id="PaymentAmount" name="PaymentAmount"class="form-control" type="text" maxlength="255"></input>
		</div>
		<div">
			  <label>Name on card</label>
			  <input id="NameOnCard" name="NameOnCard" class="form-control" type="text" maxlength="255"></input>
		</div>
		<div class="form-group">
			  <label>Card number</label>
			  <input id="CreditCardNumber" name="CreditCardNumber" class="form-control" type="text"></input>
		</div>
		<div">
			  <label>Expiry date</label>
			  <input id="ExpiryDate" name="ExpiryDate" class="form-control" type="text" placeholder="YYYY-MM" maxlength="7"></input>
		</div>
		<div>
			  <label>Security code</label>
			  <input id="SecurityCode" name="SecurityCode" class="form-control" type="text" ></input>
		</div>
		<div>
			  <label>ZIP/Postal code</label>
			  <input id="ZIPCode" name="ZIPCode" class="form-control" type="text" maxlength="10"></input>
		</div>	  
			  <button id="PayButton" class="btn btn-block btn-success submit-button" type="submit">Pay</button>
</form>


<footer>
Claudia Bellew,2018 

</footer>

</body>
</html>
