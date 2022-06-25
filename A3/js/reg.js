function validateForm(){
	var a = document.forms["form"]["fname"].value;
	if (a == "") {
		alert("First Name required to filled out");
		return false;
	}
	var b = document.forms["form"]["lname"].value;
	if (b == "") {
		alert("Last Name required to filled out");
		return false;
	}
	var c = document.forms["form"]["phone"].value;
	if (c == "") {
		alert("Phone Number required to filled out");
		return false;
	}
	var d = document.forms["form"]["email"].value;
	if (d == "") {
		alert("Email address required to filled out");
		return false;
	}
	var e = document.forms["form"]["password"].value;
	if (e == "") {
		alert("Password required to filled out");
		return false;
	}
	var f = document.forms["form"]["password1"].value;
	if (f == "") {
		alert("Confirm Password required to filled out");
		return false;
	}
	var g = document.forms["form"]["address1"].value;
	if (g == "") {
		alert("Address 1 required to filled out");
		return false;
	}
	var h = document.forms["form"]["address2"].value;
	if (h == "") {
		alert("Address 2 required to filled out");
		return false;
	}
	var i = document.forms["form"]["state"].value;
	if (i == "") {
		alert("State required to filled out");
		return false;
	}
	var j = document.forms["form"]["postal"].value;
	if (j == "") {
		alert("Postal Code required to filled out");
		return false;
	}
	else{
		alert("Resgistration Successful.");
	}
}
	
	