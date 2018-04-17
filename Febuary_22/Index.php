<!DOCTYPE html>
<html>
<head>
<title>Checkout</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>
<body>
<div>
	<form action="Endpoint.php" method="post">
		<div class="form-group">
			  <label>Payment amount</label>
			  <input id="PaymentAmount" name="PaymentAmount"class="form-control" type="text" maxlength="255"></input>
		</div>
		<div class="form-group">
			  <label>Name on card</label>
			  <input id="NameOnCard" name="NameOnCard" class="form-control" type="text" maxlength="255"></input>
		</div>
		<div class="form-group">
			  <label>Card number</label>
			  <input id="CreditCardNumber" name="CreditCardNumber" class="form-control" type="text"></input>
		</div>
		<div class="form-group">
			  <label>Expiry date</label>
			  <input id="ExpiryDate" name="ExpiryDate" class="form-control" type="text" placeholder="YYYY-MM" maxlength="7"></input>
		</div>
		<div class="form-group">
			  <label>Security code</label>
			  <input id="SecurityCode" name="SecurityCode" class="form-control" type="text" ></input>
		</div>
		<div class="form-group">
			  <label>ZIP/Postal code</label>
			  <input id="ZIPCode" name="ZIPCode" class="form-control" type="text" maxlength="10"></input>
		</div>	  
			  <button id="PayButton" class="btn btn-block btn-success submit-button" type="submit">Pay</button>
	</form>
</div>
</body>
</html>
