function checkUsername(masukan) {
	var syarat = /^(?=.*[a-z])(?=.*[_]).{8,15}$/;

	if (masukan.value.match(syarat)) {
		alert('True');
		return true;
	}else{
		alert('False');
		return false;
	}
}