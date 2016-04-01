// Validate email
function validateEmail(email){
	var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	if(re.test(email)){
		document.getElementById('quoteEmail').style.background ='none';
		document.getElementById('quoteEmailError').style.display = "none";
		return true;
	}else{
		document.getElementById('quoteEmail').style.background ='rgba(236, 94, 70, 0.7)';
		document.getElementById('quoteEmailError').style.display = "block";
		return false;
	}
}

//Validate required - Input is name
function validateRequired(x){
	var re = /[A-Za-z -']$/;
	if(re.test(document.getElementById(x).value)){
		document.getElementById(x).style.background = 'none';
		document.getElementById(x + 'Error').style.display = "none";
		return true;
	}else{
		document.getElementById(x).style.background = 'rgba(236, 94, 70, 0.7)';
		document.getElementById(x + 'Error').style.display = "block";
		return false;
	}
}

//Validate phone
function validatePhone(x){
	var re = /\({0,1}((0|\+61)(2|4|3|7|8)){0,1}\){0,1}(\ |-){0,1}[0-9]{2}(\ |-){0,1}[0-9]{2}(\ |-){0,1}[0-9]{1}(\ |-){0,1}[0-9]{3}/gm;
	if(re.test(document.getElementById(x).value)){
		document.getElementById(x).style.background = 'none';
		document.getElementById(x + 'Error').style.display = "none";
		return true;
	}else{
		document.getElementById(x).style.background = 'rgba(236, 94, 70, 0.7)';
		document.getElementById(x + 'Error').style.display = "block";
		return false;
	}
}

$("#logIn").on("click",
	function() {
		document.getElementById("login_box_background").style.display = "block";
		document.getElementById("login_box").style.display = "block";
	});

$("#login_box_background").on("click",
	function() {
		document.getElementById("login_box_background").style.display = "none";
		document.getElementById("login_box").style.display = "none";
	});

$("#projects-page img").on("click",
	function() {
		console.log("image clicked!");
		document.getElementById("project_img_background").style.display = "block";
		document.getElementById("project_img").style.display = "block";
	});

$("#project_img_background").on("click",
	function() {
		document.getElementById("project_img_background").style.display = "none";
		document.getElementById("project_img").style.display = "none";
	});