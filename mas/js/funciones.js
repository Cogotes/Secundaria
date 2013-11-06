function validar(formulario,elemento){
	var valido = false;
	if(document.forms[formulario].elements[elemento].value == "0"){
		alert("El campo no puede estar vacio");
		document.forms[formulario].elements[elemento].focus();
		valido = true;
	}
	return valido;
}


function enviar(formulario){
	var valido = false;
	for(i=0;i<document.forms[formulario].elements.length-2;i++){
		valido = validar(formulario,i);
	}
	if(!valido){
		document.forms[formulario].submit();
	}
}