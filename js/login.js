function validar(){
	var usuario1, contrasenia1;
	usuario1 = document.getElementById('email').value;
	contrasenia1 = document.getElementById('password').value;

	$usuario1 = filter_var($usuario);
	$contrasenia1 = filter_var($contrasenia);

	if ($usuario1 == $usuario){
    echo "La dirección es correcta.";
} else {
    echo "Compruebe la dirección, por favor.";
}