
document.addEventListener("DOMContentLoaded", function() { 
	var psw_input = document.getElementById("psw");
	var letter = document.getElementById("letter");
	var capital = document.getElementById("capital");
	var number = document.getElementById("number");
	var length = document.getElementById("length");
	var pswmatch = document.getElementById("pswmatch");
	var pswconfirm_input = document.getElementById("pswconfirm");
	
	// When the user clicks on the password field, show the message box
	psw_input.onfocus = function() {
		document.getElementById("psw_message").style.display = "block";
	}

	// When the user clicks outside of the password field, hide the message box
	psw_input.onblur = function() {
		document.getElementById("psw_message").style.display = "none";
	}
	pswconfirm_input.onkeyup = function() {
		if(pswconfirm_input.value == document.getElementById('psw').value) {
			pswmatch.classList.remove("invalid");
			pswmatch.classList.add("valid");
			document.getElementById("pswmatch_message").style.display = "none";
		} else {
			pswmatch.classList.remove("valid");
			pswmatch.classList.add("invalid");
			document.getElementById("pswmatch_message").style.display = "block";
		}
	}
	psw_input.onkeyup = function() {
		
		// Validate lowercase letters
		var lowerCaseLetters = /[a-z]/g;
		if(psw_input.value.match(lowerCaseLetters)) {
			letter.classList.remove("invalid");
			letter.classList.add("valid");
		} else {
			letter.classList.remove("valid");
			letter.classList.add("invalid");
	}

		// Validate capital letters
		var upperCaseLetters = /[A-Z]/g;
		if(psw_input.value.match(upperCaseLetters)) {
			capital.classList.remove("invalid");
			capital.classList.add("valid");
		} else {
			capital.classList.remove("valid");
			capital.classList.add("invalid");
		}

		// Validate numbers
		var numbers = /[0-9]/g;
		if(psw_input.value.match(numbers)) {
			number.classList.remove("invalid");
			number.classList.add("valid");
		} else {
			number.classList.remove("valid");
			number.classList.add("invalid");
		}

		// Validate length
		if(psw_input.value.length >= 12) {
			length.classList.remove("invalid");
			length.classList.add("valid");
		} else {
			length.classList.remove("valid");
			length.classList.add("invalid");
		}
		if(document.getElementById("pswconfirm").value == document.getElementById('psw').value) {
			pswmatch.classList.remove("invalid");
			pswmatch.classList.add("valid");
			document.getElementById("pswmatch_message").style.display = "none";
		} else {
			document.getElementById("pswmatch_message").style.display = "block";
			pswmatch.classList.remove("valid");
			pswmatch.classList.add("invalid");
			
		}
		if(pswconfirm_input.value == document.getElementById('psw').value) {
			pswmatch.classList.remove("invalid");
			pswmatch.classList.add("valid");
			document.getElementById("pswmatch_message").style.display = "none";
		} else {
			pswmatch.classList.remove("valid");
			pswmatch.classList.add("invalid");
			document.getElementById("pswmatch_message").style.display = "block";
		}
	
	}
});