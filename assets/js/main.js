// Validate email
function validateEmail(email){
	var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	if(re.test(email)){
		document.getElementById('email').style.background ='none';
		document.getElementById('emailError').style.display = "none";
		return true;
	}else{
		document.getElementById('email').style.background ='#e35152';
		document.getElementById('emailError').style.display = "block";
		return false;
	}
}