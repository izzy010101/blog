window.addEventListener('load', () => {

	var login_form = document.querySelector('form');
	console.log(login_form);

	var login_btn = login_form.querySelector('.login_btn');
	
	login_btn.addEventListener('click', (e) => {
		e.preventDefault();
		validateForm(login_form);
		errorsExist(login_form);
	});

});

function validateForm(form_el){
	var inputs = form_el.querySelectorAll('input:not([type="submit"])');

	inputs.forEach(input => {
		console.log(input);

		var field_valid = true;
		var i_value = input.value.trim();
		var i_name = input.name;

		if (i_value == '') {
			field_valid = false;
			displayError(input, 'required');
		} else {
			removeError(input);
		}
		console.log(field_valid);
		if (field_valid) {
			console.log(i_name);
			switch(i_name) {
				case 'login_email':
				field_valid = validateEmail(i_value);
				if (!field_valid) {
					displayError(input, 'email-invalid');
				}
				break;
				case 'login_password':
				if (i_value.length < 6) {
					field_valid = false;
					displayError(input, 'minlength-psw');
				}
				break;
			}
		}
	});
}

function validateEmail(email) {
	var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	return re.test(String(email).toLowerCase());
}

function displayError(field, key){
	var errors = {
		'required' : 'This field is required',
		'minlength' : 'Type at least 3 characters.',
		'minlength-psw' : 'Type at least 6 characters.',
        'email-invalid' : 'Type email in correct format',
	};

	var error_el = document.querySelector('[name="'+field.name+'"] + p');
	error_el.innerText = errors[key];
	error_el.classList.add('err');
    let el = error_el.previousElementSibling;
    el.classList.remove('border-0', "focus:ring-indigo-600");
    el.classList.add("el_err");
}

function removeError(field){
	
	var error_el = document.querySelector('[name="'+field.name+'"] + p');
	error_el.innerText = '';
	error_el.classList.remove('err');
    let el = error_el.previousElementSibling;
    el.classList.remove("el_err");
    el.classList.add('border-0', "focus:ring-indigo-600");
}

function errorsExist(form_el){
	var errors = document.querySelectorAll('p.err');
	console.log(errors);
	if (errors.length == 0) {
		form_el.submit();
	}
}