var register = document.getElementById('register');
var error = document.getElementById('error-message');
var flag = 0;

register.onclick = function()
{
	checkForm();
}

function checkForm()
{
	flag = 0;
	var name = document.getElementById('name');
	var email = document.getElementById('email');
	var password = document.getElementById('password');
	var address = document.getElementById('address');
	var male = document.getElementById('male');
	var female = document.getElementById('female');
	var city = document.getElementById('city');

	if(name.value == "")
	{
		error.innerHTML = "Name must be filled";
		flag++;
	}
	else if(name.value.length < 3 || name.value.length > 20)
	{
		error.innerHTML = "Name must be between 3-20 characters";
		flag++;
	}
	else if(email.value == "")
	{
		error.innerHTML = "Email must be filled";
		flag++;
	}
	else if(email.value.indexOf('@') == -1 && email.value.indexOf('.') == -1)
	{
		error.innerHTML = "Email must containt @ and .";
		flag++;
	}
	else if(email.value.indexOf('@')+1 == email.value.indexOf('.'))
	{
		error.innerHTML = "@ and . can not be neighbour";
		flag++;
	}
	else if(!email.value.endsWith(".com"))
	{
		error.innerHTML = "Email must be ended with .com";
		flag++;
	}
	else if(password.value == "")
	{
		error.innerHTML = "Password must be filled";
		flag++;
	}
	// else if(isNaN(password))
	// {
	// 	error.innerHTML = "Password harus berupa angka";
	// }
	else if(password.value.length > 6 || password.value.length < 6)
	{
		error.innerHTML = "Password must be 6 digit";
		flag++;
	}
	else if(address.value == "")
	{
		error.innerHTML = "Address must be filled";
		flag++;
	}
	else if(!address.value.startsWith("Jln."))
	{
		error.innerHTML = "Alamat must be started with Jln.";
		flag++;
	}
	else if(!male.checked && !female.checked)
	{
		error.innerHTML = "Gender must be selected";
		flag++;
	}
	else if(city.selectedIndex == 0)
	{
		error.innerHTML = "City has not been selected";
		flag++;
	}
	else
	{
		window.location = "main.html"
	}

	if(flag == 0 ){
		error.innerHTML = "";
        window.location.href="/home";
	}
}