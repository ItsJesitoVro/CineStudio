function validar(){
	var usuario, contrasenia;
	usuario = document.getElementById('email').value;
	contrasenia = document.getElementById('password').value;

	if (usuario == '') {
		alert("Falta poner el nombre");
		document.getElementById('email').focus();
		document.getElementById('email').style.background="red";
		return false;
	} else if (contrasenia == '') {
		alert("Falta poner una contraseña");
		return false;
	} else if(contrasenia.length<8 || contrasenia.length>15) {
		alert("Su contraseña no es valida tiene que ser mayor a 8 caracteres y menor a 15");
		return false;
	}
}