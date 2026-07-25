<!DOCTYPE html>
<html>

<head>

<title>Loan EMI Calculator</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

<h2>Loan EMI Calculator</h2>

<form action="save_loan.php" method="POST">

<label>Loan Amount</label>

<input
type="number"
id="amount"
name="loan"
required>

<label>Interest Rate (%)</label>

<input
type="number"
step="0.01"
id="rate"
name="rate"
required>

<label>Loan Period (Years)</label>

<input
type="number"
id="years"
name="years"
required>

<button
type="button"
onclick="calculateEMI()">
Calculate EMI
</button>

<div class="result">

<p>
Monthly EMI :
₹ <span id="emi">0</span>
</p>

<p>
Total Payment :
₹ <span id="payment">0</span>
</p>

<p>
Total Interest :
₹ <span id="interest">0</span>
</p>

</div>

<input type="hidden" id="emiInput" name="emi">
<input type="hidden" id="paymentInput" name="payment">
<input type="hidden" id="interestInput" name="interest">

<button
type="submit"
name="save"
onclick="
document.getElementById('emiInput').value=document.getElementById('emi').innerHTML;
document.getElementById('paymentInput').value=document.getElementById('payment').innerHTML;
document.getElementById('interestInput').value=document.getElementById('interest').innerHTML;
">
Save To Database
</button>

</form>

</div>

<script src="script.js"></script>

</body>

</html>