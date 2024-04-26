window.addEventListener('load', () => {

	let register_form = document.querySelector('form');
    

	let register_btn = register_form.querySelector('.btn');

	register_btn.addEventListener('click', (e) => {
		e.preventDefault();
		validateRegisterForm(register_form);
		errorsExist(register_form);

});

});



function validateRegisterForm(form_el){
    var inputs = form_el.querySelectorAll('input:not([type="submit"])');
	inputs.forEach(input => {

		// console.log(input);
		var field_valid = true;
		var i_value = input.value.trim();
		var i_name = input.name;

		if (i_value == '') {
			field_valid = false;
			displayError(input, 'required');
		} else {
			removeError(input);
		}
		if (field_valid) {
			switch(i_name) {
                case 'fisrtName':
                if (i_value.length < 3) {
                    field_valid = false;
                    displayError(input, 'minlength');
                }
                break;

				case 'email':
				field_valid = validateEmail(i_value);
				if (!field_valid) {
					displayError(input, 'email-invalid');
				}

				break;

				case 'passwordHash':
				if (i_value.length < 6) {
					field_valid = false;
					displayError(input, 'minlength-psw');
				}
				break;

				case 're_passwordHash':
				if (i_value.length < 6) {
					field_valid = false;
					displayError(input, 'minlength-psw');

				} else if (field_valid){

					let psw_value = inputs[2].value;

                    console.log(psw_value);
					if (psw_value !== i_value) {

						displayError(input, 'password-not-match');
					} else {

						console.log('iste su sifre');
					}
				}
				break;

				default:

				    } 
				} 
			});
}



function validateEmail(email) {
	var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	return re.test(String(email).toLowerCase());
}



function errorsExist(form_el){
	var errors = document.querySelectorAll('p.err');
	if (errors.length == 0) {
		form_el.submit();
	}
}

function displayError(field, key){
	
	var errors_lookup = {
		'required' : 'This field is required',
		'minlength' : 'Type at least 3 characters.',
		'minlength-psw' : 'Type at least 6 characters.',
		'email-invalid' : 'Type email in correct format.',
		'password-not-match' : 'Passwords doesn\'t match.'
	};

    
    
	let error_el = document.querySelector('[name="'+field.name+'"] + p');
	error_el.innerText = errors_lookup[key];
	error_el.classList.add('err');
    let el = error_el.previousElementSibling;
    el.classList.remove('border-0', "focus:ring-indigo-600");
    el.classList.add("el_err");
}




function removeError(field){
	
	let error_el = document.querySelector('[name="'+field.name+'"] + p');
	error_el.innerText = "";
	error_el.classList.remove('err');
    let el = error_el.previousElementSibling;
    el.classList.remove("el_err");
    el.classList.add('border-0', "focus:ring-indigo-600");
    
}



