function checkUsername(masukan) {
	var syarat = /^(?=.*[a-z])(?=.*[_]).{8,8}$/;

	if (masukan.value.match(syarat)) {
		alert('True');
		return true;
	}else{
		alert('False');
		return false;
	}
}