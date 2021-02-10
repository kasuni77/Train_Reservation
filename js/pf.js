function validate() {
	var email = document.getElementById("reference")reference.value;
	var len = email.length;
	var atcount = 0;
	
	for(var i = 0; i < len; i++) {
		
		if(email.charAt(i) == '@')
			atcount++;
	}
	
	if(atcount != 1)
		
		alert("There isn't an @ mark or more than one @ mark, Please correct it");
		
	else {
		
		var index = email.lastIndexOf(".");
		
		if(index >= 0){
			
			if(index > email.indexOf("@")) {
				
				
			}
			
			else {
				alert("There are not any . mark after @ mark");
			}
		}
		
		else {
			
			alert("There are no . mark in your e-mail address. plese check it.");
		}
	}
		
}

/*function checkpassword() {
	if(document.getElementByClass("npassword").value != document.getElementById("cpassword").value)
	{
		alert("Password Mismatch!");
	}
	else
	{
		alert("Success!");
	}
}*/