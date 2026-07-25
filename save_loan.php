<?php
include("db_connect.php");

if(isset($_POST['save'])){

$loan=$_POST['loan'];
$rate=$_POST['rate'];
$years=$_POST['years'];
$emi=$_POST['emi'];
$payment=$_POST['payment'];
$interest=$_POST['interest'];

$query="INSERT INTO loan_details
(loan_amount,interest_rate,loan_years,emi,total_payment,total_interest)

VALUES
('$loan','$rate','$years','$emi','$payment','$interest')";

if(mysqli_query($conn,$query)){
    echo "<script>
    alert('Record Saved Successfully');
    window.location='index.php';
    </script>";
}
else{
    echo "Error";
}

}

?>