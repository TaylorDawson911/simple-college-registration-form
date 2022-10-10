<script src="index.js"></script>



<form name="myForm" action="confirmation.php" onsubmit="return validateForm()" method="post">
  Full Name: <input type="text" name="fullName">
  Address: <input type="text" name="address">
  Email: <input type="text" name="email">
  Phone Number: <input type="text" name="phone">

  <label for="course">Choose a course:</label>
  <select id="course" name="course">
    <option value="beginner">Beginner</option>
    <option value="intermediate">Intermediate</option>
    <option value="advanced">Advanced</option>
  </select>
  <textarea name="feedback" style="width:200px; height:250;" placeholder="How easy was it to use this form?"></textarea>
  <input type="hidden" name="dateadded" value="<?php echo time(); ?>">
  <input type="submit" value="Submit">
</form>