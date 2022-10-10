<script src="index.js"></script>

<?php  
$fullName=$_POST["fullName"];//receiving name field value in $name variable  
$address=$_POST["address"];//receiving password field value in $password variable
$email=$_POST["email"];
$phone=$_POST["phone"];
$course=$_POST["course"];
$feedback=$_POST["feedback"];
$dateadded=$_POST["dateadded"];

  
echo "Please confirm your details: <br>";
echo "Full Name: $fullName <br>";
echo "Address: $address <br>";
echo "Email: $email <br>";
echo "Phone Number: $phone <br>";
echo "Course: $course <br>";
echo "Feedback: $feedback <br>";
echo "Date Added: $dateadded <br>";
?>  

<button onclick="goBack()">Go Back</button>
<button onclick="goForward()">Submit</button>