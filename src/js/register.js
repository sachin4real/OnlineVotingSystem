function checkPassword(){
	var v1 = document.getElementById("psw").value;
	var v2 = document.getElementById("psw-confirm").value;
	
    if(v1 != v2){
		alert("password mismatch!");
	}
	else{
		alert("success");
	}
}
function AcceptTerms(){
	var chk = document.getElementById("chkTerms");
	var sub = document.getElementById("registerbtn");
	
	if(chk.checked){
		sub.disabled = false;
	}
	else{
		sub.disabled = true;
	}
}
