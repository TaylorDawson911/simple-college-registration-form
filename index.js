function validateForm() {
    let fullName = document.forms["myForm"]["fullName"].value;
    let address = document.forms["myForm"]["address"].value;
    let email = document.forms["myForm"]["email"].value;
    let phone = document.forms["myForm"]["phone"].value;
    let course = document.forms["myForm"]["course"].value;
    let feedback = document.forms["myForm"]["feedback"].value;
    
    if (feedback == "") {
        alert("Feedback must be filled out");
        return false;
    }
    if (!ValidateEmail(email)) {
        alert("Invalid email address.");
        return false;
    }
    if (address == "") {
        alert("Address must be filled out");
        return false;
    }
    if (!validatePhoneNumber(phone)) {
        alert("Phone number is not valid");
        return false;
    }
    if (fullName == "") {
      alert("Name must be filled out");
      return false;
    }

    console.log(fullName, address, email, phone, course, feedback);
    console.log("Form submitted successfully");
    return true;

    
}

function validatePhoneNumber(phone) {
    var phoneRe = /^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/;
    return phoneRe.test(phone);
}

function ValidateEmail(email) {
    var emailRe = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
    return emailRe.test(email);
}

function goBack() {
    window.history.back();
}

function goForward() {
    window.location.href = "thanks.php";
}