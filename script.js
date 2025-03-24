function validateForm() {
	var password = document.getElementById('password').value;
	var toastMessage = document.getElementById('toast-message');
	var toastContainer = document.getElementById('toast-container');
	var regex =
		/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

	if (!regex.test(password)) {
		toastMessage.textContent =
			'A senha deve ter pelo menos 8 caracteres, incluindo letra maiúscula, minúscula, número e caractere especial.';
		var toast = new bootstrap.Toast(toastContainer);
		toast.show();
		return false;
	}

	return true;
}
