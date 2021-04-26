// JavaScript Document
document.addEventListener("DOMContentLoaded", function() { 
	var pswmatch = document.getElementById("pswmatch");
	var pswconfirm_input = document.getElementById("pswconfirm");
	pswconfirm_input.onkeyup = function() {
		if(pswconfirm_input.value == document.getElementById('psw').value) {
			pswmatch.classList.remove("invalid");
			pswmatch.classList.add("valid");
			document.getElementById("pswmatch_message").style.display = "none";
		} else {
			document.getElementById("pswmatch_message").style.display = "block";
			pswmatch.classList.remove("valid");
			pswmatch.classList.add("invalid");
			
		}
	}
	pswconfirm_input.onfocus = function() {
		document.getElementById("pswmatch_message").style.display = "block";
	}
});